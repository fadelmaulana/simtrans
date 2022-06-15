<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
    (function() {
        window.onload = function() {
            var map;
            var locations = [
<?php
include("koneksi.php");

$sql = "SELECT * FROM trafficlight WHERE id_loc=2";
$query = mysqli_query($koneksi, $sql);

while($data = mysqli_fetch_array($query)){
?>
[<?php echo $data['lat']; ?>, <?php echo $data['lng']; ?>, '<?php echo $data['lokasi']; ?>'],
<?php
}
?>
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
</script>

<!-- Style untuk Peta -->
<style>
    #peta {
        border:1px solid #000;
        width:700px;
        height:500px;
    }
</style>

<div align="center">  
    <div id="peta"></div>
</div>