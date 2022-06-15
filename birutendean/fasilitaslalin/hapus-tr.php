<?php

include("config.php");

if( isset($_GET['id_loc']) ){
	
	// ambil id dari query string
	$id = $_GET['id_loc'];
	
	// buat query hapus
	$sql = "DELETE FROM macet WHERE id_loc=$id";
	$query = mysqli_query($db, $sql);
	
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
