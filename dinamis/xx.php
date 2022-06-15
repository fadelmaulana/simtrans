<?php
include("koneksi.php");

$sql = "SELECT * FROM trafficlight";
$query = mysqli_query($koneksi, $sql);

while($data = mysqli_fetch_array($query)){
?>
[<?php echo $data['lat']; ?>, <?php echo $data['lng']; ?>, '<?php echo $data['lokasi']; ?>'],
<?php
}
?>