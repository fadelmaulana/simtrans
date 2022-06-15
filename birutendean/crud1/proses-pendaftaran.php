<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){
	
	// ambil data dari formulir
	$id = $_POST['id_loc'];
	$nama = $_POST['nama'];
	$kota = $_POST['kota'];
	$provinsi = $_POST['provinsi'];
	$alamat = $_POST['alamat'];
	$no_hp = $_POST['no_hp'];
	$website = $_POST['website'];
	$lat = $_POST['lat'];
	$lng = $_POST['lng'];
	
	// buat query
	$sql = "INSERT INTO kantor (
    nama, 
    kota, 
    provinsi, 
    alamat, 
    no_hp, 
    website, 
    lat,
    lng ) VALUE (
    '$nama', 
    '$kota', 
    '$provinsi', 
    '$alamat', 
    '$no_hp', 
    '$website', 
    '$lat',
    '$lng' )";
	$query = mysqli_query($db, $sql);
	
	// apakah query simpan berhasil?
	if( $query ) {
		// kalau berhasil alihkan ke halaman index.php dengan status=sukses
		header('Location: index.php?status=sukses');
	} else {
		// kalau gagal alihkan ke halaman indek.ph dengan status=gagal
		header('Location: index.php?status=gagal');
	}
	
	
} else {
	die("Akses dilarang...");
}

?>
