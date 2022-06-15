<?php

include("../../../config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){
	
	// ambil data dari formulir
	$a = $_POST['no'];
	$b = $_POST['halte'];
	$c = $_POST['rute'];
	$d = $_POST['jamoperasi'];
	$e = $_POST['tarif'];
	$f = $_POST['lat'];
	$g = $_POST['lng'];
	
	// buat query
	$sql = "INSERT INTO brt (`no`,`rute`,`halte`,`jamoperasi`,`tarif`,`lat`,`long`) VALUE ('$a','$c','$b','$d','$e','$f','$g' )";
	$query = mysqli_query($koneksi, $sql);
	
	// apakah query simpan berhasil?
	if( $query ) {
		// kalau berhasil munculkan pesan berhasil dan dialihkan ke index.php
		echo "<script>
        alert('Data berhasil disimpan!');
        window.location.href='index.php';  
        </script>";
	} else {
		// kalau gagal munculkan pesan gagal dan dialihkan ke index.php
		echo "<script>
        alert('Data gagal disimpan!');
        window.location.href='index.php';  
        </script>";
	}
	
	
} else {
	die("Akses dilarang...");
}

?>
