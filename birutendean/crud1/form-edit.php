<?php 

include("config.php");

if( !isset($_GET['id_loc']) ){
	// kalau tidak ada id di query string
	header('Location: index.php');
}

//ambil id dari query string
$id = $_GET['id_loc'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM kantor WHERE id_loc=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
	die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Formulir Edit Siswa | SMK Coding</title>
</head>

<body>
	
	<form action="proses-edit.php" method="POST">
		
		<fieldset>
			
			<input type="hidden" name="id_loc" value="<?php echo $siswa['id_loc'] ?>" />
		
		<p>
			<label for="nama">Nama: </label>
			<input type="text" name="nama" placeholder="Nama Lokasi" value="<?php echo $siswa['nama'] ?>" />
		</p>
		<p>
			<label for="kota">Kota: </label>
			<input type="text" name="kota" placeholder="Nama Kota" value="<?php echo $siswa['kota'] ?>" />
		</p>
		<p>
			<label for="provinsi">Provinsi: </label>
			<input type="text" name="provinsi" placeholder="Nama Provinsi" value="<?php echo $siswa['provinsi'] ?>" />
		</p>
		<p>
			<label for="alamat">Alamat: </label>
			<textarea name="alamat"><?php echo $siswa['alamat'] ?></textarea>
		</p>
		<p>
			<label for="notelp">No Telp: </label>
			<input type="text" name="no_hp" placeholder="Nomor Telpon" value="<?php echo $siswa['no_hp'] ?>" />
		</p>
		<p>
			<label for="website">Website: </label>
			<input type="text" name="website" placeholder="Halaman Website" value="<?php echo $siswa['website'] ?>" />
		</p>
		<p>
			<label for="latitude">Latitude: </label>
			<input type="text" name="lat" placeholder="Titik Latitude" value="<?php echo $siswa['lat'] ?>" />
		</p>
		<p>
			<label for="logitude">Logitude: </label>
			<input type="text" name="lng" placeholder="Titik Longitude" value="<?php echo $siswa['lng'] ?>" />
		</p>
		<p>
			<input type="submit" value="Simpan" name="simpan" />
		</p>
		
		</fieldset>
		
	
	</form>
	
	</body>
</html>
