<?php
        error_reporting(0);
       
        $koneksi = mysql_connect("localhost","root","") or die("Koneksi Gagal !" . mysql_error());
        if($koneksi) echo "Koneksi Berhasil";
 
        $db = mysql_select_db("mahasiswa") or die("Database tidak ada !" . mysql_error());
       
        echo "<br />";
       
        if($db) echo "Database mahasiswa berhasil dibuka !";
 
        mysql_close($koneksi);
?>