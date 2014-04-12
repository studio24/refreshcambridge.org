<?php
use Refresh\PastEvents;
include 'includes/header.php';
include 'includes/past-events.php';
?>

            <!-- first section -->
            <div id="past-events">
                <h1 class="textLightGreen">Past Events</h1>
                
                <section class="four column start">
                    <p class="textLightGreen">Refresh has been running since 2007, details of some of our past meetups appear below.</p>
                    <p class="textLightGreen">If you'd like to talk at a future meetup please get in touch via our
                    <a href="http://groups.google.com/group/refreshcambridge/subscribe">mailing list</a>.</p>
                </section>
                <?php include 'includes/next-meetup.php' ?>
            
            </div>
            <!--// first section -->

            <!-- second section -->
            <div id="pastEvents" class="four column start">
                
                <?php 
                // Get page number if set
                $page = isset($_GET['page']) ? filter_var($_GET['page'], FILTER_SANITIZE_NUMBER_INT) : false;
                
                // Display past events
                $events = new PastEvents();
                echo $events->getEvents($page);
                ?>

            </div>
            
            <!--// second section -->
            <div id="whereconnect" class="twoend column end right">

                <?php include 'includes/next-meetup-location.php' ?>

                <div id="connect" class="darkGreen six column end right">
                    <p>Connect</p>
                    <div class="social">
                        <span class="facebook"><a href="https://www.facebook.com/RefreshCambridge"><img src="/assets/img/facebook.png" alt="Facebook"></a></span>
                        <span class="twitter"><a href="https://twitter.com/refreshcambs"><img src="/assets/img/twitter.png" alt="Twitter"></a></span>
                    </div>
                    <p>Newsletter<br><a href="http://groups.google.com/group/refreshcambridge/subscribe" target="_blank">Sign up to our mailing list</a></p>

                </div>

            </div>

    <?php include 'includes/footer.php'; ?>