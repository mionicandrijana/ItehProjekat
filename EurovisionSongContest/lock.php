<?php

include('konekcija1.php');

session_start();
$user_check = $_SESSION['login_user'];

$ses_sql = mysql_query("SELECT username FROM login WHERE username='$user_check'");

$row = mysql_fetch_array($ses_sql);

$login_session = $row['username'];

if (!isset($login_session)) {
    header("Location: login.php");
}
?>