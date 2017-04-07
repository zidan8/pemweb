<?php session_start();

include "koneksi_user.php";
$username=$_POST['username'];
$password=$_POST['password'];
$query=mysql_query("SELECT * from user where username='$username' and password='$password'");
$cek=mysql_num_rows($query);
$ambil=mysql_fetch_array($query);

if($cek){
	$_SESSION['username']=$username;
	$_SESSION['password']=$password;
	header("location:dbuser.php");
}
else{
 	?>Anda gagal login. silahkan <a href="login.php">Login kembali</a><?php
 	echo mysql_error();
}
?>