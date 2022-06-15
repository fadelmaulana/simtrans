            <?php
            //memasukkan koneksi database
            require_once("koneksi.php");

            //jika berhasil/ada post['id'], jika tidak ada ya tidak dijalankan
            if($_GET['id']){
                //membuat variabel id berisi post['id']
                $id = $_GET['id'];
                //query standart select where id
                $sql = "SELECT * FROM trafficlight WHERE id_loc='$id'";
                //jika ada datanya
                $query = mysqli_query($koneksi, $sql);
                while($data = mysqli_fetch_array($query)){
            ?>
              <?php echo''.$data['lat'].', '.$data['lng'].''; ?>
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
          <div id="map-container">

          </div>

<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script>
			var var_map;
    		var var_location = new google.maps.LatLng(<?php echo''.$data['lat'].', '.$data['lng'].''; ?>);
	
     function map_init() {		 	
			
            var var_mapoptions = {
              center: var_location,
              zoom: 14,
              mapTypeId: google.maps.MapTypeId.ROADMAP,
              mapTypeControl: false,
              panControl:false,
              rotateControl:false,
              streetViewControl: false,
            };
            var_map = new google.maps.Map(document.getElementById("map-container"),
                var_mapoptions);
      
          var contentString = 
				'<div id="mapInfo">'+
				'<p><strong>Peggy Guggenheim Collection</strong><br><br>'+
				'Dorsoduro, 701-704<br>' +
				'30123<br>Venezia<br>'+
				'P: (+39) 041 240 5411</p>'+
				'<a href="http://www.guggenheim.org/venice" target="_blank">Plan your visit</a>'+
				'</div>';
 
          var var_infowindow = new google.maps.InfoWindow({
            content: contentString
          });
          
          var var_marker = new google.maps.Marker({
            position: var_location,
            map: var_map,
            title:"Click for information about the Guggenheim museum in Venice",
                  maxWidth: 200,
                  maxHeight: 200
          });
 
          google.maps.event.addListener(var_marker, 'click', function() {
             var_infowindow.open(var_map,var_marker);
          });
      }
 
          google.maps.event.addDomListener(window, 'load', map_init);
      
      //start of modal google map
      $('#mapmodals').on('shown.bs.modal', function () {
          google.maps.event.trigger(var_map, "resize");
          var_map.setCenter(var_location);
      });
</script>
            <?php
                }
            }
            ?>