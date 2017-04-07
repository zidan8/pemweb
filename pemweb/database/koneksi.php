<?php
$hostname = "localhost";
$database = "mahasiswa";
$username = "root";
$password = "";

$koneksi = mysql_connect($hostname, $username, $password) or trigger_error(mysql_error(), E_USER_ERROR);

?>