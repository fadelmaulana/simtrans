<?php
//memasukkan koneksi database
require_once("koneksi.php");

//jika berhasil/ada post['id'], jika tidak ada ya tidak dijalankan
if($_POST['id']){
	//membuat variabel id berisi post['id']
	$id = $_POST['id'];
	//query standart select where id
	$view = $koneksi->query("SELECT * FROM trafficlight WHERE id_loc='$id'");
	//jika ada datanya
	if($view->num_rows){
		//fetch data ke dalam veriabel $row_view
		$row_view = $view->fetch_assoc();
		//menampilkan data dengan table
	}
}
?>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8-jUzfKWBqtvT3XAUDLJb1n1qdQlZzwk"></script>
<script type="text/javascript">
    (function() {
        window.onload = function() {
            var map;
            var locations = [
                [<?php echo $row_view['lat']; ?>, <?php echo $row_view['lng']; ?>, '<?php echo $row_view['lokasi']; ?>'],
            ];
            //Parameter Google maps
            var options = {
                zoom: 15, //level zoom maps
                center: new google.maps.LatLng(-3.7973787,102.2659725), //kordinat tengah maps
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            
            // Buat maps pada id peta 
            var map = new google.maps.Map(document.getElementById('peta'), options);
            
            // Tambahkan Marker 
            var infowindow = new google.maps.InfoWindow();
            
            var marker, i;
            
            /* kode untuk menampilkan banyak marker */
            for (i = 0; i < locations.length; i++) {  
                marker = new google.maps.Marker({
                    position: new google.maps.LatLng(locations[i][0], locations[i][1]),
                    map: map,
                    icon: 'marker.png'
                });
                
                /* menambahkan event clik untuk menampikan infowindows dengan isi sesuai dgn marker yang di klik */
                google.maps.event.addListener(marker, 'click', (function(marker, i) {
                    return function() {
                        infowindow.setContent('<img src="' + locations[i][3] + '" width="80" /><br/><b>' + locations[i][2] + '</b>');
                        infowindow.open(map, marker);
                    }
                })(marker, i));
            }
        };
    })();
    
    $('#myModal').on('shown.bs.modal', function () {
  initialize_0();
});
</script>

<!-- Style untuk Peta -->
<style>
    #peta {
        border:1px solid #000;
        width:100%;
        height:500px;
    }
</style>

<div align="center">  
    <div id="peta"></div>
</div>
