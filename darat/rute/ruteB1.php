<div class="col-lg-4">
    <h2>Rute B1</h2><hr>
    <div id="map-canvas" style="width:100%;height:450px;margin-top:10px;"></div>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8-jUzfKWBqtvT3XAUDLJb1n1qdQlZzwk&callback=initMap"></script>
<script>
function initialize() {
var mapOptions = {
zoom: 13.2,
center: new google.maps.LatLng(-3.7776244,102.2667238),
mapTypeId: google.maps.MapTypeId.TERRAIN
};


var map = new google.maps.Map(document.getElementById('map-canvas'),
  mapOptions);

var flightPlanCoordinates = [
<?php
//If konesi.php outputs ANYTHING, the map will fail to load. However, you should
//change the connection variable to $connection = mysqli_connect("HOST","USERNAME","PASSWORD","DATABASE");
include('koneksi.php');

//switch to correct database
mysqli_select_db($koneksi,"angkot");

//Query the user for start and ending location. Store locations in variables
$query = mysqli_query($koneksi,"SELECT lat, long1, lat2, long2 FROM lokasib1 LIMIT 1");
$row = mysqli_fetch_assoc($query);
$lat = $row['lat'];
$lon = $row['long1'];
$lat2 = $row['lat2'];
$lon2 = $row['long2'];

//Echo out the users start location
echo 'new google.maps.LatLng('.$lat.', '.$lon.'),';

//Assuming route that lat and long coordinates are in multiple records and not in a array within a single record
//Loop through all records and echo out the positions
$query = mysqli_query($koneksi,"SELECT lat, lng FROM ruteb1");
while($row = mysqli_fetch_assoc($query)){
    $lat = $row['lat'];
    $lon = $row['lng'];
    echo 'new google.maps.LatLng('.$lat.', '.$lon.'),';
}

//echo users ending position
echo 'new google.maps.LatLng('.$lat2.', '.$lon2.')';

?>

];

var flightPath = new google.maps.Polyline({
    path: flightPlanCoordinates,
    geodesic: true,
    strokeColor: '#FF0000',
    strokeOpacity: 1.0,
    strokeWeight: 2
});
flightPath.setMap(map);
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
<br>

  </div>
