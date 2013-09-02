// configure Google Map
function initialize() {
    var mapOptions = {
        center: new google.maps.LatLng(48.9958066, -122.3434586),
        zoom: 10,
        mapTypeId: google.maps.MapTypeId.TERRAIN,
        disableDefaultUI: true
    };
    var map = new google.maps.Map(
        document.getElementById("map-canvas"),
        mapOptions
    );
}
google.maps.event.addDomListener(window, 'load', initialize);