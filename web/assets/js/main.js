$(document).ready(function() {

    $('#menu a').click(function(){
        $('html, body').animate({
            scrollTop: $( $.attr(this, 'href') ).offset().top
        }, 500);
        return false;
    });

});



var map;
function initialize() {
  var mapOptions = {
    zoom: 16,
    center: new google.maps.LatLng(52.2074008,0.1223454),
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);

var image = '/assets/img/pin.png';


  var myLatLng = new google.maps.LatLng(52.2074008,0.1223454);
  var marker = new google.maps.Marker({
      position: myLatLng,
      map: map,
      icon: image
  });


}

google.maps.event.addDomListener(window, 'load', initialize);

