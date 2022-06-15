<?php

include("../../../config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['simpan'])){
	
	// ambil data dari formulir
	$a = $_POST['no'];
	$b = $_POST['dari'];
	$c = $_POST['tujuan'];
	$d = $_POST['jamkeberangkatan'];
	$e = $_POST['tarifeko'];
	$f = $_POST['tarifac'];
	
	// buat query update
	$sql = "UPDATE damribkllubukpinangrinci SET 
    `dari`='$b',
    `tujuan`='$c',
    `jamkeberangkatan`='$d',
    `tarifekonomi`='$e',
    `tarifac`='$f'
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
