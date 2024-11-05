<?php 


$db_name = "ezyro_35842795_zolfaghar";
$mysql_username = "ezyro_35842795";
$mysql_password = "fde2ea94dd122";
$server_name = "sql113.ezyro.com";  
$ccoonn = mysqli_connect($server_name, $mysql_username, $mysql_password,$db_name);
if (!$ccoonn)
  {
  die("Connection error: " . mysqli_connect_error());
  }
 
?>