<?php
  $host = 'localhost';
  $user = 'root';
  $pass = '';
  $db = 'gis';

  $conn = mysql_connect($host, $user, $pass);
  mysql_select_db($db, $conn);
