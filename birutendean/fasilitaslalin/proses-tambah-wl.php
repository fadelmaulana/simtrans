<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){
	
	// ambil data dari formulir
	$id = $_POST['id_loc'];
	$lokasi = $_POST['lokasi'];
	$kabupaten = $_POST['kabupaten'];
	$keterangan = $_POST['keterangan'];
	$lat = $_POST['lat'];
	$lng = $_POST['lng'];
	
	// buat query
	$sql = "INSERT INTO warnlight (
    lokasi, 
    kabupaten, 
    keterangan, 
    lat,
    lng ) VALUE (
    '$lokasi', 
    '$kabupaten', 
    '$keterangan', 
    '$lat',
    '$lng' )";
	$query = mysqli_query($db, $sql);
	
	// apakah query simpan berhasil?
	if( $query ) {
		// kalau berhasil alihkan ke halaman index.php dengan status=sukses
        echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
		header('Location: index.php');
	} else {
		// kalau gagal alihkan ke halaman index.php dengan status=gagal
		header('Location: index.php');
	}
	
	
} else {
	die("Akses dilarang...");
}

?>
