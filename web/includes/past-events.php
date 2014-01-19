<?php
namespace Refresh;
use DirectoryIterator;
use DateTime;

class PastEvents {
    
    /**
     * Array of past events
     * 
     * @var array
     */
    protected $pastEvents = array();
   
    /**
     * Number of events to display per page
     * 
     * @var int
     */
    protected $displayPerPage = 5;
    
    /**
     * Constructor
     * 
     * @param int $displayPerPage Number of events to display per page
     */
    public function __construct($displayPerPage = null)
    {
        if ($displayPerPage !== null) {
            $this->displayPerPage = $displayPerPage;
        }
        
        // Read in list of events in past-events folder
        $dir = new DirectoryIterator('past-events');
        foreach ($dir as $fileinfo) {
            if (!$fileinfo->isDot()) {
                if (preg_match('/^([0-9]{8}).php$/', $fileinfo->getFilename(), $m)) { 
                    $this->pastEvents[] = array(
                        'date' => new DateTime($m[1]),
                        'file' => 'past-events/' . $fileinfo->getFilename(),
                    );
                }
            }
        }
        
        // Sort events by date descending
        usort($this->pastEvents, function($a, $b){
            if ($a['date'] < $b['date']) {
                return 1;
            } else {
                return -1;
            }
        });
    }
        
    /**
     * Return past events
     * 
     * @param int $currentPage Current page to display
     */
    public function getEvents($currentPage = false)
    {
        // Set current page 
        if (!$currentPage) {
            $currentPage = 0;
        } else {
            $currentPage = (int) $currentPage;
        }
        
        // Calculate pagination
        $total = count($this->pastEvents);
        $pagination = false;
        if ($total > $this->displayPerPage) {
            $pagination = true; 
        }
        if ($pagination) {
            $totalPages = floor($total / $this->displayPerPage);
            if ($currentPage == 0) {
                $start = 0;
                $end   = $this->displayPerPage;
            } else {
                $start = $currentPage * $this->displayPerPage;
                $end   = $start + $this->displayPerPage;
                if ($end > $total) {
                    $end = $total;
                }    
            }
            
        } else {
            $start = 0;
            $end   = $total;
        }
        
        // Build HTML
        $html = '';
        for ($x=$start;$x<$end;$x++) {
            ob_start();
            include($this->pastEvents[$x]['file']);
            $html .= ob_get_clean();
        }
        
        if ($pagination) {
            if ($currentPage == 0) {
                $html .= '<p class="more-events"><a href="/past-events/1">More events</a></p>';
            } elseif ($currentPage == $totalPages) {
                $html .= '<p class="more-events"><a href="/past-events/' . ($totalPages - 1) . '">Back</a></p>';
            } elseif ($currentPage == 1) {
                $html .= '<p class="more-events"><a href="/past-events">Back</a> | <a href="/past-events/' . ($currentPage + 1) . '">More events</a></p>';
            } else {
                $html .= '<p class="more-events"><a href="/past-events/' . ($currentPage - 1) . '">Back</a> | <a href="/past-events/' . ($currentPage + 1) . '">More events</a></p>';
            }
        }
        
        return $html;
    }
    
}

