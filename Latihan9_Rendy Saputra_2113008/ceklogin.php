<?php
session_start();
$username = $_POST["username"];
$password = $_POST["password"];
if (($username =="admin") and ($password == "kunci"))
{
	$_SESSION["username"]=$username;
	$_SESSION["password"]=$password;
	header("location: hlm1.php");
} 
else 
{
	header("location: login.php");
}
?>
