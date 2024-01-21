<?php 
$con = mysqli_connect("localhost","root","","latbase");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
$sql="select * from karyawan"; 
$result = mysqli_query($con,$sql);

echo"<table border='1'>"; 
echo"<tr><td bgcolor='yellow' align='center'>Nomor Urut </td>"; 
echo"<td bgcolor='yellow' align='center'>Nama Karyawan </td>"; 
echo"<td bgcolor='yellow' align='center'>Alamat </td></tr>"; 
while ($data=mysqli_fetch_row($result)) { 
	echo"<tr><td align='center'>$data[0]</td>"; 
	echo"<td>$data[1]</td>"; 
	echo"<td>$data[2]</td></tr>"; 
} 
echo"</table>"; 

mysqli_close($con); 
?> 