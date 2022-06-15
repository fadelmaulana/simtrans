<?php include "koneksi.php"; ?>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8-jUzfKWBqtvT3XAUDLJb1n1qdQlZzwk"></script>

<script>
    var marker;
    function initialize() {
        
        // Variabel untuk menyimpan informasi (desc)
        var infoWindow = new google.maps.InfoWindow;
        
        //  Variabel untuk menyimpan peta Roadmap
        var mapOptions = {
            center:new google.maps.LatLng(-3.7973787,102.2659725),
            zoom:12,
            mapTypeId:google.maps.MapTypeId.ROADMAP
        } 
        
        // Pembuatan petanya
        var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
          

        // Pengambilan data dari database
        <?php
            $queryall = mysqli_query($koneksi,"select * from brt where no='4' or no='5' or no='6'");
            while ($dataall = mysqli_fetch_array($queryall))
            {
                $shelter = $dataall['halte'];
                $lat = $dataall['lat'];
                $long = $dataall['long'];
                
                echo ("addMarker($lat, $long, '<b>$shelter</b>');\n");                        
            }
          ?>
          
        // Proses membuat marker 
        function addMarker(lat, lng, info) {
            var lokasi = new google.maps.LatLng(lat, lng);
            
            var marker = new google.maps.Marker({
                map: map,
                position: lokasi
            });       
            
            bindInfoWindow(marker, map, infoWindow, info);
         }
        
        // Menampilkan informasi pada masing-masing marker yang diklik
        function bindInfoWindow(marker, map, infoWindow, html) {
            google.maps.event.addListener(marker, 'click', function() {
                infoWindow.setContent(html);
                infoWindow.open(map, marker);
            });
        }
 
        }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>

<div id="map-canvas" style="width: 100%; height: 768px;"></div>