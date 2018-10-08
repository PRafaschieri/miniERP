<?php 
$hostname = "localhost";
$username = "root";
$password = "Pasqua1506";
$database = "User";

mysql_connect($hostname,$username,$password) or die ("connection failed");
mysql_select_db($database) or die ("error connect database");
?>