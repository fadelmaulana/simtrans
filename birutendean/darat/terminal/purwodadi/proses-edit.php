<?php

include("../../../config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['simpan'])){
	
	// ambil data dari formulir
	$nomor = $_POST['no'];
	$kode = $_POST['kodeangkutan'];
	$jur = $_POST['jurusan'];
	$lewat = $_POST['melewati'];
	$tarifpel = $_POST['tarifpelajar'];
	$tarifmah = $_POST['tarifmahasiswa'];
	$tarifumm = $_POST['tarifdewasa'];
	$wrn = $_POST['warna'];
	
	// buat query update
	$sql = "UPDATE angkot SET 
    kodeangkutan='$kode', 
    jurusan='$jur', 
    melewati='$lewat',
    tarifpelajar='$tarifpel',
    tarifmahasiswa='$tarifmah',
    tarifdewasa='$tarifumm',
    warna='$wrn' 
    WHERE no=$nomor";
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
