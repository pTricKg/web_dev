
      
function initialize() {
  var myLatlng = new google.maps.LatLng(39.5445470, -107.3260750);
  var mapOptions = {
    zoom: 4,
    center: myLatlng,
	mapTypeId: google.maps.MapTypeId.SATELLITE
  }
  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

  var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: 'my place'
  });
}

google.maps.event.addDomListener(window, 'load', initialize)
   