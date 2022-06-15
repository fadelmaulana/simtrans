<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['simpan'])){
	
	// ambil data dari formulir
	$id = $_POST['id_loc'];
	$lokasi = $_POST['lokasi'];
	$kabupaten = $_POST['kabupaten'];
	$keterangan = $_POST['keterangan'];
	$lat = $_POST['lat'];
	$lng = $_POST['lng'];
	
	// buat query update
	$sql = "UPDATE trafficlight SET 
    lokasi='$lokasi', 
    kabupaten='$kabupaten', 
    keterangan='$keterangan', 
    lat='$lat',
    lng='$lng' 
    WHERE id_loc=$id";
	$query = mysqli_query($db, $sql);
	
	// apakah query update berhasil?
	if( $query ) {
		// kalau berhasil alihkan ke halaman list-siswa.php
		header('Location: index.php');
	} else {
		// kalau gagal tampilkan pesan
		die("Gagal menyimpan perubahan...");
	}
	
	
} else {
	die("Akses dilarang...");
}

?>
