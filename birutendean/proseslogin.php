<?php
// KONEKSI KE DATABASE
$koneksi = mysql_connect("localhost", "root", "") or die("Tidak bisa terhubung ke Database!");
mysql_select_db("dpuprbu", $koneksi) or die("Tidak ada Database yang dipilih!");
?>
 
<?php
// PROSES LOGIN
if($_POST['login']){
	$user	= $_POST['username'];
	$pass	= $_POST['password'];
 
	if($user && $pass){
		$cek_db	= "SELECT * FROM tw_login WHERE username='$user'";
		$query	= mysql_query($cek_db);
		if(mysql_num_rows($query) != 0){
			$row = mysql_fetch_assoc($query);
			$db_user = $row['username'];
			$db_pass = $row['password'];
 
			if($user == $db_user && $pass == $db_pass){
				echo '<p><b>Anda berhasil Login!</b></p>';
				// masukkan script lainnya disini
				// seperti Session atau redirect ke halaman admin
			}else{
				echo '<p>Username dan Password tidak cocok!</p>';
			}
		}else{
			echo '<p>Username tidak ada dalam Database!</p>';
		}
	}else{
		echo '<p>Username dan Password masih kosong!</p>';
	}
}
?>