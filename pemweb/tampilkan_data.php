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
	<title>Data Sekolah</title>
	<style type="text/css">
		body {
			font-size: 15px;
			color: #343d44;
			font-family: "segoe-ui", "open-sans", tahoma, arial;
			padding: 0;
			margin: 0;
		}
		table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}

		h1 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 17px;
		}

		table td {
			transition: all .5s;
		}
		
		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}

		.data-table th, 
		.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		.data-table caption {
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th {
			background-color: #508abb;
			color: #FFFFFF;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: right;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		.data-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
		}

		/* Table Footer */
		.data-table tfoot th {
			background-color: #e5f5ff;
			text-align: right;
		}
		.data-table tfoot th:first-child {
			text-align: left;
		}
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
		}
	</style>
</head>
<body>
	<h1>Daftar Sekolah SLTA</h1>
	<table class="data-table">
		<caption class="title">Kabupaten Brebes</caption>
		<li><a href="index1 - Copy.html" class="button">Kembali</a></li>
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
			<tr>
				<th colspan="4">Jumlah Sekolah</th>
				<th><?=number_format('106', 0, ',', '.')?></th>
			</tr>
			<tr>
				<th colspan="4">Sekolah yang tanpa Siswa</th>
				<th><?=number_format('9', 0, ',', '.')?></th>
			</tr>
		</tfoot>
	</table>
</body>
</html>