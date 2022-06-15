<?php  
//Sesuaikan username, password dan nama database sesuai db anda
$username="root";
$password="";
$database="simtrans";
 
// Start XML file, create parent node
$dom = new DOMDocument("1.0");
$node = $dom->createElement("markers");
$parnode = $dom->appendChild($node); 
// Opens a connection to a MySQL server
$connection=mysql_connect (localhost, $username, $password);
if (!$connection) {  die('Not connected : ' . mysql_error());} 
// Set the active MySQL database
$db_selected = mysql_select_db($database, $connection);
if (!$db_selected) {
  die ('Can\'t use db : ' . mysql_error());
} 
// Select all the rows in the markers table -> Sesuaikan tabel yang akan diambil datanya
$query = "SELECT * FROM trafficlight WHERE 1";
$result = mysql_query($query);
if (!$result) {  
  die('Invalid query: ' . mysql_error());
} 
header("Content-type: text/xml"); 
// Iterate through the rows, adding XML nodes for each
while ($row = @mysql_fetch_assoc($result)){  
  // ADD TO XML DOCUMENT NODE  
  $node = $dom->createElement("marker");  
  $newnode = $parnode->appendChild($node);   
  $newnode->setAttribute("name",$row['r_nama']);
  $newnode->setAttribute("address", $row['r_lokasi']);  
  $newnode->setAttribute("lat", $row['r_lat']);  
  $newnode->setAttribute("lng", $row['r_long']);  
  $newnode->setAttribute("type", $row['r_keterangan']);
} 
echo $dom->saveXML();
?>