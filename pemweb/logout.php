<?php
session_start();
// apabila ditekan tombol logout, session username & level akan hilang
unset($_SESSION['username']);
header("location:index.php");
?>