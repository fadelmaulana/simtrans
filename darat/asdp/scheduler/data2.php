<?php 

require_once("codebase/connector/scheduler_connector.php");
 
$res=mysql_connect("localhost","root","");
mysql_select_db("simtrans");
 
$conn = new SchedulerConnector($res);
 
$conn->render_table("asdpjadwal","id","start_date,end_date,text");

?>