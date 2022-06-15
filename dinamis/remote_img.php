
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>Modal remote file with image tag</title>  
</head>
<body>
  <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                 <h4 class="modal-title">Modal title</h4>
            </div>			<!-- /modal-header -->
            <div class="modal-body clearfix">
            <?php
            //memasukkan koneksi database
            require_once("koneksi.php");

            //jika berhasil/ada post['id'], jika tidak ada ya tidak dijalankan
            if($_GET['id']){
                //membuat variabel id berisi post['id']
                $id = $_GET['id'];
                //query standart select where id
                $sql = "SELECT * FROM trafficlight WHERE id_loc='$id'";
                }
            ?>
            <?php
            $query = mysqli_query($koneksi, $sql);
            while($data = mysqli_fetch_array($query)){
                echo "".$data['lat'].", ".$data['lng']."";
            }
            ?>

          <div style="width:100%;height:450px;" id="map-container">

          </div>
            </div>			<!-- /modal-body -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>			<!-- /modal-footer -->
        </div>         <!-- /modal-content -->
    </div>     <!-- /modal-dialog -->
    
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script>
			var var_map;
    		var var_location = new google.maps.LatLng(
            <?php
            $query = mysqli_query($koneksi, $sql);
            while($data = mysqli_fetch_array($query)){
                echo "".$data['lat'].", ".$data['lng']."";
            }
            ?>
            );
	
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
				'<strong><?php echo''.$data['lokasi'].''; ?></strong>'+
				'</div>';
 
          var var_infowindow = new google.maps.InfoWindow({
            content: contentString
          });
          
          var var_marker = new google.maps.Marker({
            position: var_location,
            map: var_map,
            title:"Click for more information",
                  maxWidth: 200,
                  maxHeight: 200
          });
 
          google.maps.event.addListener(var_marker, 'click', function() {
             var_infowindow.open(var_map,var_marker);
          });
      }
 
          google.maps.event.addDomListener(window, 'load', map_init);
      

</script>
<script type="text/javascript">

$('a[data-target="#myModal[wpv-post-id]"]').on("click", function(){

var duration = 1000;
setTimeout(function() {

var mapelement = $('#myModal[wpv-post-id] *[id^="gmw-map-"]')[1];
var canv_id = mapelement.id;
var mapid = canv_id.replace(/[^0-9]/g, ");
google.maps.event.trigger(gmwMapObjects[mapid].map, "resize");

}, duration);

}
);

</script>
</body>
</html>
