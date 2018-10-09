<?php 
$hostname = "localhost";
$username = "root";
$password = "Pasqua1506";
$database = "miniERP";

mysql_connect($hostname,$username,$password) or die ("connection failed");
echo "connessione stabilita";
mysql_select_db($database) or die ("error connect database");
?>