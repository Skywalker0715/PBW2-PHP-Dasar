<?php
include('koneksi/conf.php');
$nim = $_GET['nim']; // Updated 'NIM' to 'nim'
$sql = "SELECT * FROM Mahasiswa WHERE nim='$nim'";
$query = mysqli_query($con, $sql);

while ($baris = mysqli_fetch_array($query)) {
    echo "<h2 align='center'>Data Mahasiswa</h2>";
    echo "<form method='post' action='update.php'>";
    echo "<table align='center' border='0' width='35%' cellspacing='1'> ";
    echo "<tr><td>NIM</td><td>:</td><td><input type='text' name='nim' value='$baris[NIM]'></td></tr>";
    echo "<tr><td>Nama</td><td>:</td><td><input type='text' name='nama' value='$baris[Nama]'></td></tr>";
    echo "<tr><td>Alamat</td><td>:</td><td><input type='text' name='alamat' value='$baris[Alamat]'></td></tr>";
    echo "<tr><td>Matakuliah</td><td>:</td><td><input type='text' name='matakuliah' value='$baris[Matakuliah]'></td></tr>";
    echo "<tr><td>Semester</td><td>:</td><td><input type='text' name='semester' value='$baris[Semester]'></td></tr>";
    echo "<tr><td>Tanggal Lahir</td><td>:</td><td><input type='text' name='tanggal_lahir' value='$baris[Tanggal_Lahir]'></td></tr>";
    echo "<tr><td><input type='submit' name='submit' value='Update'>";
    echo "<input type='hidden' name='nim' value='$baris[NIM]'></td></tr>";
    echo "</table></form>";
}
?>
