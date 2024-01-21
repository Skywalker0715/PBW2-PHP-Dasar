<?php 
$cari=$_POST['cari']; 
$con = mysqli_connect("localhost","root","","latbase");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

$sql="select * from karyawan where nama like '%$cari%'";
$hasil=mysqli_query($con, $sql); 
$jumlah=mysqli_num_rows($hasil); 
echo "Ditemukan ".$jumlah." record"; 
echo "<table border='1' cellspacing='1' cellpadding='3'>";
echo "<tr bgcolor='green' align='center'>"; 
echo "<th width='100'><b>Nama</b></th>"; 
echo "<th width='200'><b>Alamat</b></th></tr>"; 
while($baris=mysqli_fetch_row($hasil)) 
{ 
echo "<tr>";
echo "<td align='center'>$baris[1]</td>"; 
echo "<td align='center'>$baris[2]</td></tr>";
} ?>
