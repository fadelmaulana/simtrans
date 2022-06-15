<html>
<head>
	<title>Aplikasi CRUD dengan PHP</title>
</head>
<body>
<?php
mysql_connect("localhost","root","");
mysql_select_db("simtrans");
    
function autonumber($tabel, $kolom, $lebar=0, $awalan='')
{
	$query = "select $kolom from $tabel order by $kolom desc limit 1";
	$hasil = mysql_query($query);
	$jumlahrecord = mysql_num_rows($hasil);
	if($jumlahrecord == 0)
		$nomor=1;
	else
	{
		$row=mysql_fetch_array($hasil);
		$nomor=intval(substr($row[0],strlen($awalan)))+1;
	}
	if($lebar>0)
		$angka = $awalan.str_pad($nomor,$lebar,"0",STR_PAD_LEFT);
	else
		$angka = $awalan.$nomor;
	return $angka;
}
?>
	<h1>Tambah Data Siswa</h1>
	<form method="post" action="proses_simpan.php" enctype="multipart/form-data">
	<table cellpadding="8">
	<tr>
		<td>ID</td>
		<td><input type="text" name="id" value="<?php echo autonumber("tematikanalog","id",1 ,""); ?>" readonly></td>
	</tr>
	<tr>
		<td>Keterangan</td>
		<td><input type="text" name="keterangan"></td>
	</tr>
	<tr>
		<td>Foto</td>
		<td><input type="file" name="foto"></td>
	</tr>
	</table>
	
	<hr>
	<input type="submit" value="Simpan">
	<a href="index.php"><input type="button" value="Batal"></a>
	</form>
</body>
</html>
