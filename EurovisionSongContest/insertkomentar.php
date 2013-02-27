<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("eurosong", $con);

$sql="INSERT INTO komentari (ime, komentar)
VALUES
('$_POST[ime]','$_POST[komentar]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
  
header( 'Location: video2.php');

mysql_close($con);
?>