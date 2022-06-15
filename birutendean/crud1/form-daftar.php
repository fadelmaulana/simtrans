<!DOCTYPE html>
<html>
<head>
	<title>Formulir Pendaftaran Siswa Baru | SMK Coding</title>
</head>

<body>
    
	<form action="proses-pendaftaran.php" method="POST">
		
		<fieldset>
		<p>
			<label for="nama">Nama: </label>
			<input type="text" name="nama" placeholder="Nama Lokasi" />
		</p>
		<p>
			<label for="kota">Kota: </label>
			<input type="text" name="kota" placeholder="Nama Kota" />
		</p>
		<p>
			<label for="provinsi">Provinsi: </label>
			<input type="text" name="provinsi" placeholder="Nama Provinsi" />
		</p>
		<p>
			<label for="alamat">Alamat: </label>
			<textarea name="alamat"></textarea>
		</p>
		<p>
			<label for="notelp">No Telp: </label>
			<input type="text" name="no_hp" placeholder="Nomor Telpon"/>
		</p>
		<p>
			<label for="website">Website: </label>
			<input type="text" name="website" placeholder="Halaman Website" />
		</p>
		<p>
			<label for="latitude">Latitude: </label>
			<input type="text" name="lat" placeholder="Titik Latitude"/>
		</p>
		<p>
			<label for="logitude">Logitude: </label>
			<input type="text" name="lng" placeholder="Titik Longitude"/>
		</p>
		<p>
			<input type="submit" value="Daftar" name="daftar" />
		</p>
		
		</fieldset>
	
	</form>
	
	</body>
</html>
