<?php
include('koneksi/conf.php');
$no=$_GET['no'];
$sql="select * from karyawan where no='$no'"; 
$query = mysqli_query($con,$sql);

while ($baris = mysqli_fetch_array($query))
{
  echo "<h2 align='center'>Data Karyawan</h2>";
  echo "<form method='post' action='update.php'>";
  echo "<table align='center' border='0' width='35%' cellspacing='1'> ";
  echo "<tr><td>Nama</td><td>:</td>
                    <td><input type='text' name='nama' value='$baris[nama]'></td></tr>";
  echo "<tr><td>Alamat</td><td>:</td>
	<td><input type='text' name='alamat' value='$baris[alamat]'></td></tr>";
  echo "<tr><td><input type='submit' name='submit' value='Update'>";
  echo "<input type='hidden' name='no' value='$baris[no]'></td></tr>";
  echo "</table></form>";
} ?>
