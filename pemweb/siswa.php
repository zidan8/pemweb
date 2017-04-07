<?php
$db_host = 'localhost'; // Nama Server
$db_user = 'root'; // User Server
$db_pass = ''; // Password Server
$db_name = 'mahasiswa'; // Nama Database

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Gagal terhubung dengan MySQL: ' . mysqli_connect_error());	
}

$sql = 'SELECT * 
		FROM sekolah';
		
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
					<h5><a href="mi.php"> Database sekolah MI</a></h5>
					<h5><a href="mts.php"> Database sekolah MTs</a></h5>
					<h5><a href="ma.php"> Database sekolah MA</a></h5>
					<h5><a href="sd.php"> Database sekolah SD</a></h5>
					<h5><a href="smp.php"> Database sekolah SMP</a></h5>
					<h5><a href="sma.php"> Database sekolah SMA</a></h5>
					<h5><a href="smk.php"> Database sekolah SMK</a></h5>
				</div>
			</header>

		<!-- Main -->
			<div id="main">

				<!-- One -->
					<section id="one">
						<table border="1" class="data-tabel">
						<h2>Database Siswa</h2>
						
						<div class="row"></div>
							<thead>
							<tr>
								<th>kode sekolah</th>
								<th>nama sekolah</th>
								<th>alamat</th>
								<th>Status</th>
								<th>jumlah siswa</th>
							</tr>
							</thead>
							<tbody>
								<?php
								$total = 0;
								while ($row = mysqli_fetch_array($query))
								{
									$siswa  = $row['siswa'] == 0 ? '' : number_format($row['siswa'], 0, ',', '.');
									echo '<tr>
									<td>'.$row['kode'].'</td>
									<td>'.$row['sekolah'].'</td>
									<td>'.$row['alamat'].'</td>
									<td>'.$row['status'].'</td>
									<td>'.$siswa.'</td>
									</tr>';
									$total += $row['siswa'];
								}?>
							</tbody>
							<tfoot>
								<tr>
									<th colspan="4">TOTAL</th>
									<th><?=number_format($total, 0, ',', '.')?></th>
								</tr>
							</tfoot>
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