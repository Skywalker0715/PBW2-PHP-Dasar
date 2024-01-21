<?php
session_start();
if (empty($_SESSION["username"]) AND empty($_SESSION["password"]))
{
	echo "<br>Hmmm...belum login ya...";
	echo "<br><a href='login.php'>Login dulu</a>";
}
else{
	echo "Ini halaman hanya untuk “.$_SESSION[‘username’].” saja";
	echo "<br><a href='logout.php'>Logout</a> untuk keluar";
}
?>
