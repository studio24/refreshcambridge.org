# Refresh Cambridge

Website for http://refreshcambridge.org/

## Updating pages
The Refresh site is a simple site with a few pages. the .htaccess file contains
details of what PHP pages run each page but it's all pretty self-explanatory.

Header and footer are currently included from the *includes/* folder.

Less is currently used to process CSS.

## Adding a new meetup
Add details on the next meetup to *includes/next-meetup.php*. If the venue is not
the Cambridge Brew House then the map will need to be updated on the homepage 
(see *assets/js/main.js*) and venue details on each page (see *index.php*, *about.php*,
*past-events.php*). 

We need to refactor the code so venue information is in one page 
(ideally next-meetup.php).

## Past Events
Past events are stored in the *past-events/* folder. We store one event in one 
file and the Past events page automatically builds these into paginated event
pages. 

To add a new past event just create a new file with the naming format *{YYYYMMDD}.php*
and copy the HTML format from the template below:

    <article>
        <div class="title">
            <span>5<sup>th</sup> October 2014</span>
            <h2>Talk title</h2>
        </div>
        <p>Event report content</p>
    </article>

## Making changes
If you wish to make any changes please fork the repository and send a pull request 
in detailing your changes. 
