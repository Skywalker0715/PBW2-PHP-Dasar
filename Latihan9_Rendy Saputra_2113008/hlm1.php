<?php
session_start();
if (empty($_SESSION["username"]) AND empty($_SESSION["password"]))
{
	echo "<br>hmmm...belum login ya...";
	echo "<br><a href='login.php'>Login dulu</a>";
}
else{	
	echo "Hai, selamat datang ".$_SESSION["username"];
	echo "<br>Ini halaman hanya untuk" .$_SESSION["username"]. "saja";
	echo "<br><a href='logout.php'>Logout</a> untuk keluar";
	echo "<br><a href='hlm2.php'>ke halaman lain</a>";
}
?>
