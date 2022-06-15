<?php

include("../../../config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['simpan'])){
	
	// ambil data dari formulir
	$a = $_POST['no'];
	$b = $_POST['rute'];
	$c = $_POST['halte'];
	$d = $_POST['jamoperasi'];
	$e = $_POST['tarif'];
	$f = $_POST['latitude'];
	$g = $_POST['longitude'];
	
	// buat query update
	$sql = "UPDATE brt SET 
    `rute`='$b',
    `halte`='$c',
    `jamoperasi`='$d',
    `tarif`='$e',
    `lat`='$f',
    `long`='$g'
    WHERE `no`='$a'";
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
