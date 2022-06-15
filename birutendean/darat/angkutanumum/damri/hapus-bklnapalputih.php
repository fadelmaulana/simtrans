<?php

include("../../../config.php");

if( isset($_GET['no']) ){
	
	// ambil id dari query string
	$id = $_GET['no'];
	
	// buat query hapus
	$sql = "DELETE FROM damribklnapalrinci WHERE no=$id";
	$query = mysqli_query($koneksi, $sql);
	
	// apakah query hapus berhasil?
	if( $query ) {
		// kalau berhasil munculkan pesan berhasil dan dialihkan ke index.php
		echo "<script>
        alert('Data berhasil dihapus!');
        window.location.href='index.php';  
        </script>";
	} else {
		// kalau gagal munculkan pesan gagal dan dialihkan ke index.php
		echo "<script>
        alert('Data gagal dihapus!');
        window.location.href='index.php';  
        </script>";
	}
	
} else {
	die("akses dilarang...");
}

?>
