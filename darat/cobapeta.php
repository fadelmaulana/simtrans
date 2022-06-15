<?php include "koneksi1.php"; ?>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8-jUzfKWBqtvT3XAUDLJb1n1qdQlZzwk&language=id&region=ID"></script>
<?php
// buat query untuk ambil data dari database
$sql = "SELECT * FROM brt WHERE no=5";
?>
<script>
function initialize() {
    var propertiPeta = {
        center:new google.maps.LatLng(
            <?php
            $query = mysqli_query($koneksi, $sql);
            while($data = mysqli_fetch_array($query)){
                echo "".$data['lat'].", ".$data['long']."";
            }
            ?>
        ),
        zoom:15,
        mapTypeId:google.maps.MapTypeId.ROADMAP
    };
    
    var peta = new google.maps.Map(document.getElementById("map-halte1"), propertiPeta);
    var contentString = 
        '<?php
        $query = mysqli_query($koneksi, $sql);
        while($data = mysqli_fetch_array($query)){
            echo "".$data['halte']."";
        }
        ?>';
    var infowindow = new google.maps.InfoWindow({
        content: contentString
    });
    // membuat Marker
    var marker=new google.maps.Marker({
        position: new google.maps.LatLng(
            <?php
            $query = mysqli_query($koneksi, $sql);
            while($data = mysqli_fetch_array($query)){
                echo "".$data['lat'].", ".$data['long']."";
            }
            ?>
        ),
        map: peta,
        title: '<?php
        $query = mysqli_query($koneksi, $sql);
        while($data = mysqli_fetch_array($query)){
            echo "".$data['halte']."";
        }
        ?>'
    });
    marker.addListener('click', function() {
        infowindow.open(peta, marker);
    });
}
// event jendela di-load  
google.maps.event.addDomListener(window, 'load', initialize);
</script>

<div id="map-halte1" style="width:100%;height:380px;"></div>