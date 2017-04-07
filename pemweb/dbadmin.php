<?php
$db_host = 'localhost'; // Nama Server
$db_user = 'root'; // User Server
$db_pass = ''; // Password Server
$db_name = 'sekolah'; // Nama Database

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Gagal terhubung dengan MySQL: ' . mysqli_connect_error());	
}

$sql = 'SELECT * 
		FROM user';
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
?>
<html>
	<head>
		<title>Database Siswa</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body id="top">

		<!-- Header -->
			<header id="header">
				<div class="inner">
					<a href="#" class="image avatar"><img src="images/avatar.jpg" alt="" /></a>
					<h3><a href="index.php"> Home</a></h3>
					<h3><a href="jadwal.php"> Jadwal Kuliah</a></h3>
					<h5><a href="mi.php"> Database sekolah MI</a></h5>
					<h5><a href="mts.php"> Database sekolah MTs</a></h5>
					<h5><a href="ma.php"> Database sekolah MA</a></h5>
					<h5><a href="sd.php"> Database sekolah SD</a></h5>
					<h6><a href="sdA.php"> Akreditasi A</a></h6>
					<h6><a href="sdBlum.php"> Belum Terakreditasi</a></h6>
					<h6><a href="sdBantul.php"> Sekolah di Kab. Bantul</a></h6>
					<h5><a href="smp.php"> Database sekolah SMP</a></h5>
					<h5><a href="sma.php"> Database sekolah SMA</a></h5>
					<h5><a href="smk.php"> Database sekolah SMK</a></h5>
					<h5><a href="logout.php"> Logout</a></h5>
				</div>
			</header>

		<!-- Main -->
			<div id="main">

				<!-- One -->
					<section id="one">
						<table border="1" class="data-tabel">
						<h2>Database User</h2>
						<div class="row"></div>
							<thead>
							<tr>
								<th>Firstname</th>
								<th>Lastname</th>
								<th>Asal</th>
								<th>Tanggal Lahir</th>
								<th>Bulan</th>
								<th>Tahun</th>
								<th>Jenis Kelamin</th>
								<th>Email</th>
								<th>No HP</th>
								<th>Password</th>
							</tr>
							</thead>
							<tbody>
								<?php
								$host = mysql_connect("localhost","root","");
								$db = mysql_select_db("sekolah");
								$query_mysql = mysql_query("SELECT * FROM user")or die(mysql_error());
								while ($row = mysqli_fetch_array($query))
								{
									echo '<tr>
												<td>'.$row['nama_depan'].'</td>
												<td>'.$row['nama_belakang'].'</td>
												<td>'.$row['asal'].'</td>
												<td>'.$row['tgl_lahir'].'</td>
												<td>'.$row['bulan_lahir'].'</td>
												<td>'.$row['tahun_lahir'].'</td>
												<td>'.$row['kelamin'].'</td>
												<td>'.$row['email'].'</td>
												<td>'.$row['hp'].'</td>
												<td>'.$row['password'].'</td>';
								}
								?>
							</tbody>
							
						</table>
						</section>
			</div>

		<!-- Footer -->
			<footer id="footer">
				
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
	</body>
</html>