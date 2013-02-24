<?php
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "eurosong";


$db = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Povezivanje sa bazom nije uspelo");
mysql_select_db($mysql_database, $db) or die("Povezivanje sa bazom nije uspelo");
?>