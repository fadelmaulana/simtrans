<?php include("config.php"); ?>


<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran Siswa Baru | SMK Coding</title>
</head>

<body>
	
	<nav>
		<a href="form-daftar.php">[+] Tambah Baru</a>
	</nav>
	
	<br>
	
	<table border="1">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Kota</th>
			<th>Provinsi</th>
			<th>Alamat</th>
			<th>NO Telp</th>
            <th>Website</th>
            <th>Latitude</th>
            <th>Longitude</th>
			<th>Tindakan</th>
		</tr>
	</thead>
	<tbody>
		
		<?php
		$sql = "SELECT * FROM kantor";
		$query = mysqli_query($db, $sql);
		
		while($siswa = mysqli_fetch_array($query)){
			echo "<tr>";
			
			echo "<td>".$siswa['id_loc']."</td>";
			echo "<td>".$siswa['nama']."</td>";
			echo "<td>".$siswa['kota']."</td>";
			echo "<td>".$siswa['provinsi']."</td>";
			echo "<td>".$siswa['alamat']."</td>";
			echo "<td>".$siswa['no_hp']."</td>";
            echo "<td>".$siswa['website']."</td>";
            echo "<td>".$siswa['lat']."</td>";
            echo "<td>".$siswa['lng']."</td>";
			
			echo "<td>";
			echo "<a href='form-edit.php?id_loc=".$siswa['id_loc']."'>Edit</a> | ";
			echo "<a href='hapus.php?id_loc=".$siswa['id_loc']."'>Hapus</a>";
			echo "</td>";
			
			echo "</tr>";
		}		
		?>
		
	</tbody>
	</table>
	
	<p>Total: <?php echo mysqli_num_rows($query) ?></p>
	
	</body>
</html>
