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
