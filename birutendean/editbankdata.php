<?php include('akses.php'); ?>
<?php
// include database connection file
include_once("koneksi.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	
	$lat=$_POST['lat'];
	$lng=$_POST['lng'];
		
	// update user data
	$result = mysqli_query($koneksi, "UPDATE ruas1 SET lat='$lat',lng='$lng' WHERE id=$id");
	
	// Redirect to homepage to display updated user in list
	header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($koneksi, "SELECT * FROM ruas1 WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$lat = $user_data['lat'];
	$lng = $user_data['lng'];
}
?>
<html>
<head>	
	<title>Edit User Data</title>
</head>
 
<body>
	<a href="?p=ruas1">Home</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Latitude</td>
				<td><input type="text" name="lat" value=<?php echo $lat;?>></td>
			</tr>
			<tr> 
				<td>Mobile</td>
				<td><input type="text" name="lng" value=<?php echo $lng;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>