<?php
// Make a MySQL Connection
$db_host = 'localhost'; // Nama Server
$db_user = 'root'; // User Server
$db_pass = ''; // Password Server
$db_name = 'mahasiswa'; // Nama Database

mysql_connect("localhost", "root", "") or die ("gagal :".mysql_error());
mysql_select_db("mahasiswa");
	
$query = "SELECT * FROM sekolah WHERE status='Negeri'"; 	 
$result = mysql_query($query) or die(mysql_error());

while($row = mysql_fetch_array($result)){
	echo $row['sekolah']." - ".$row['alamat'];
	echo "<br />";
}?>