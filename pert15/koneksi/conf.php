<?php 
$host='localhost';
$user='root';
$pwd='';
$db='latbase';

$con = mysqli_connect($host,$user,$pwd,$db);
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
?>
