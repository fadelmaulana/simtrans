<?php include('akses.php'); ?>
<?php
session_destroy();
 
echo '<script language="javascript">alert("Anda berhasil Logout!"); document.location="login.php";</script>';
?>