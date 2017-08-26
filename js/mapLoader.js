function myMap() {
    var myCenter = new google.maps.LatLng(48.229130, 20.252578);
    var marker = new google.maps.Marker({position:myCenter});
    var mapOptions = {
        center: myCenter,
        zoom: 17
    };
    var map = new google.maps.Map(document.getElementById("map"), mapOptions);
    marker.setMap(map);
}
