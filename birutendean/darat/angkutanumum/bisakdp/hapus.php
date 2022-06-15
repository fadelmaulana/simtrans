<?php

include("../../../config.php");

if( isset($_GET['no']) ){
	
	// ambil id dari query string
	$id = $_GET['no'];
	
	// buat query hapus
	$sql = "DELETE FROM angkot WHERE no=$id";
	$query = mysqli_query($koneksi, $sql);
	
	// apakah query hapus berhasil?
	if( $query ){
		header('Location: index.php');
	} else {
		die("gagal menghapus...");
	}
	
} else {
	die("akses dilarang...");
}

?>
