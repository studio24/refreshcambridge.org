    <?php include 'includes/header.php'; ?>

            <!-- first section -->
            <div id="about">
                <section id="aboutcontent" class="four column start">
                    <p class="textLightGreen">A community of designers and developers working to refresh the web design and development industry in the Cambridge area.</p>
                    <p class="textDarkGreen">We meet every couple of months to share ideas, network, learn, promote local talent and make our cities better.<br>
                    </p>
                </section>
                <?php include 'includes/next-meetup.php' ?>

            </div>
            <!--// first section -->



            <div id="speakers" class="four column start">

                <section class="lightGreen">

                    <img src="assets/img/september.jpg" alt="Speakers at September Refresh" style="margin: 10px;">

                    <p>To close the summer holidays with a bang, Refresh Cambridge presents a triple-header of speakers doing Nice Things on and off the interwebs:</p>

                    <p>The <a href="http://www.e-luminatefestivals.co.uk/">e-Luminate Cambridge Festival</a> connects ambitious art with ingenious technology to shed light on low carbon innovation - their co-founder and MD will be here to talk about how they collaborate with local artists and designers;</p>

                    <p><a href="http://www.arcusglobal.com/">Arcus Global</a> are a Cambridge-based cloud services provider to the public sector and not-for-profits - their CTO will join us to discuss their scalable, open-source and budget-friendly solutions;</p>

                    <p>And finally, we'll have a talk on the volunteer-led kids coding initiative, <a href="https://www.codeclub.org.uk/">Code Club</a>, including how you can get involved.</p>

                    <p>The event is sponsored by <a href="http://www.arcusglobal.com/">Arcus Global</a>.</p>
                </section>
<!--
                <section class="lightGreen">
                    <img src="assets/img/simon.jpg" alt="Photo of Simon Jones">
                    <p>Speaker</p>
                    <h2>Simon Jones</h2>
                    <p>Simon Jones will be talking about some of the interesting developments in the PHP world over the past year.</p>
                </section>
-->
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


            <!-- Map -->
            <div id="map-canvas"></div>
            <div id="directions"><a href="https://www.google.com/maps/preview#!data=!1m4!1m3!1d2289!2d0.1223454!3d52.2074008!4m30!3m15!1m0!1m4!2s0x47d87095d95bb29b%3A0xade5e50e00eec178!3m2!3d52.2074008!4d0.1223454!3m8!1m3!1d24417542!2d-95.677068!3d37.0625!3m2!1i1440!2i719!4f13.1!5m11!1m10!1s52.2074008%2C0.1223454!4m8!1m3!1d24417542!2d-95.677068!3d37.0625!3m2!1i1440!2i719!4f13.1!7m1!3b1&fid=0"><img src="assets/img/directions.png" alt="Google map directions"></a></div>
            <script>
// Homepage map
var brewhouse = new google.maps.LatLng(52.2074008,0.1223454);
var computingcentre = new google.maps.LatLng(52.207855,0.148506);

// Set next event location
var nextEventLocation = brewhouse;

// Load map
$(document).ready(function() {

    function initialize() {
      var mapOptions = {
        zoom: 16,
        center: nextEventLocation,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        mapTypeControl: false
      };
      var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
      var icon = "/assets/img/marker.png";
      var myLatLng = nextEventLocation;
      var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          icon: icon
      });
    }

    google.maps.event.addDomListener(window, 'load', initialize);
});
            </script>
            <!--// map -->

    <?php include 'includes/footer.php'; ?>
