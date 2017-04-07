<?php
if(isset($_POST['submit'])){
	include('koneksi_user.php');

		$username		= $_POST['username'];
		$nama_depan 	= $_POST['nama_depan'];
		$nama_belakang 	= $_POST['nama_belakang'];
		$asal 			= $_POST['asal'];
		$tgl_lahir 		= $_POST['tgl_lahir'];
		$bulan_lahir 	= $_POST['bulan_lahir'];
		$tahun_lahir 	= $_POST['tahun_lahir'];
		$kelamin 		= $_POST['kelamin'];
		$email 			= $_POST['email'];
		$hp 			= $_POST['hp'];
		$password 		= $_POST['password'];


	$input = mysql_query("INSERT INTO user (username, nama_depan, nama_belakang, asal, tgl_lahir,
		bulan_lahir, tahun_lahir, kelamin, email, hp, password) VALUES('$username', '$nama_depan', '$nama_belakang', 
		'$asal', '$tgl_lahir', '$bulan_lahir', '$tahun_lahir', '$kelamin','$email',
		'$hp','$password')") or die(mysql_error());

	if ($input) {
		 header("location:dbuser.php");
	}

	else
		echo "Gagal input data";
}

else
	echo '<script>window.history.back()</script>';

?>