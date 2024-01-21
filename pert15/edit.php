<?php
include('koneksi/conf.php');
$no=$_GET['no'];
$sql = "SELECT * FROM karyawan, gaji WHERE karyawan.no='$no' AND gaji.no='$no'"; 
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
  echo "<tr><td>Gaji Pokok</td><td>:</td>
  <td><input type='text' name='gaji' value='$baris[gajipokok]'></td></tr>";
  echo "<tr><td>Tunjangan</td><td>:</td>
  <td><input type='text' name='tunjangan' value='$baris[tunjangan]'></td></tr>";
  echo "<tr><td><input type='submit' name='submit' value='Update'>";
  echo "<input type='hidden' name='no' value='$baris[no]'></td></tr>";
  echo "</table></form>";
} 
?>
