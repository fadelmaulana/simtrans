<?php 
include 'koneksi.php';
 
$username = $_POST['username'];
$password = md5($_POST['password']);
 
$login = mysql_query("select * from admin where username='$username' and password='$password'");
$cek = mysql_num_rows($login);
 
if($cek > 0){
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	echo '<script language="javascript">alert("Anda berhasil Login '.$_SESSION['username'].'!"); document.location="index.php";</script>';
}else{
	echo '<script language="javascript">alert("Username atau Password Salah!"); document.location="login.php";</script>';	
}
 
?>