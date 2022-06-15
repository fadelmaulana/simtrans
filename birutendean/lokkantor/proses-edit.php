<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['simpan'])){
	
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
	
	// buat query update
	$sql = "UPDATE kantor SET 
    nama='$nama', 
    kota='$kota', 
    provinsi='$provinsi', 
    alamat='$alamat', 
    no_hp='$no_hp', 
    website='$website', 
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
