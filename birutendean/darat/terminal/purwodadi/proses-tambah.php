<?php

include("../../../config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){
	
	// ambil data dari formulir
	$nomor = $_POST['no'];
	$kode = $_POST['kodeangkutan'];
	$jur = $_POST['jurusan'];
	$lewat = $_POST['melewati'];
	$tarifpel = $_POST['tarifpelajar'];
	$tarifmah = $_POST['tarifmahasiswa'];
	$tarifumm = $_POST['tarifdewasa'];
	$wrn = $_POST['warna'];
	
	// buat query
	$sql = "INSERT INTO angkot (
    no, 
    kodeangkutan, 
    jurusan, 
    melewati,
    tarifpelajar,
    tarifmahasiswa,
    tarifdewasa,
    warna ) VALUE (
    '$nomor', 
    '$kode', 
    '$jur', 
    '$lewat',
    '$tarifpel',
    '$tarifmah',
    '$tarifumm',
    '$wrn' )";
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
