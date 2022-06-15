<div style="z-index:1" class="col-md-4">
  <div style="
  border-top: 3px solid #025f9b;
  border-left: 1px solid #ededed;
  border-right: 1px solid #ededed;
  padding-bottom:10px;
  border-top-left-radius:5px;
  border-top-right-radius:5px;
  background-color: white;">
  </div>
  <div style="
  padding-left:10px; 
  padding-right:10px;
  padding-bottom:10px;
  border-left: 1px solid #ededed;
  border-right: 1px solid #ededed;
  border-bottom: 1px solid #ededed;
  background-color: white;
  ">
<h2>&nbsp</h2><hr>
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

    }
    google.maps.event.addDomListener(window, 'load', initialize);
    </script>
</div>
</div>