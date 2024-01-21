<html>
<head><title>Form</title></head>
<body>
<form action="" method="post">
<table border="0" width="40%" cellspacing="1" cellpadding="3" align="center"> 
<tr> 
   <td bgcolor="#FFFF66" colspan="7" align="center"> 
   <b><font face="Calisto MT" size="4"> Form Input Data Mahasiswa  </font></b></td>
</tr> 
<tr> 
   <td width="33%"><b>NIM</b></td> 
   <td width="2%"><p align="center">:</td> 
   <td width="62%"><input type="number" name="nim" size="30"></td> 
</tr> 
<tr> 
   <td width="33%"><b>Nama</b></td> 
   <td width="2%"><p align="center">:</td> 
   <td width="62%"><input type="text" name="nama" size="30"></td> 
</tr> 
<tr> 
   <td width="33%"><b>Tanggal Lahir</b></td> 
   <td width="2%"><p align="center">:</td> 
   <td width="62%"><input type="date" name="tanggal_lahir" size="30"></td> 
</tr> 
<tr> 
   <td width="33%"><b>Alamat</b></td> 
   <td width="2%"><p align="center">:</td> 
   <td width="62%"><input type="text" name="alamat" size="30"></td> 
</tr> 
<tr> 
   <td width="33%"><b>Mata Kuliah</b></td> 
   <td width="2%"><p align="center">:</td> 
   <td width="62%"><input type="text" name="mata_kuliah" size="30"></td> 
</tr> 
<tr> 
   <td width="33%"><b>Semester</b></td> 
   <td width="2%"><p align="center">:</td> 
   <td width="62%"><input type="text" name="semester" size="30"></td> 
</tr> 
<tr>
   <td colspan="7" align="center"> 
   <input type="submit" value="Save" name="submit"> 
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
   <input type="reset" value="Cancel" name="B2"></td>
</tr> 
</table> 
</form> 
</body> 
</html>

<?php
include "koneksi/conf.php";

if ($_POST) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $alamat = $_POST['alamat'];
    $mata_kuliah = $_POST['mata_kuliah'];
    $semester = $_POST['semester'];

    $sql = "SELECT * FROM Mahasiswa WHERE nim='$nim'";
    $cek = mysqli_query($con, $sql);
    $result = mysqli_fetch_row($cek);

    if (empty($result)) { 
        $sqlnew = "INSERT INTO Mahasiswa (nim, nama, tanggal_lahir, alamat, mata_kuliah, semester) VALUES ('$nim', '$nama', '$tanggal_lahir', '$alamat', '$mata_kuliah', '$semester')";
        mysqli_query($con, $sqlnew);
        echo "<center>Data berhasil diinput!!!<br></center>"; 
    } else if (!empty($result)) { 
        echo "<center>Data tersebut telah terdapat pada database kami!!!</center>"; 
    }
}

$sql = "SELECT * FROM Mahasiswa";
$result = mysqli_query($con, $sql);
$hit = mysqli_num_rows($result);

// Mengambil data dan membalik urutan
$dataArray = array();
while ($data = mysqli_fetch_assoc($result)) {
    $dataArray[] = $data;
}
$dataArray = array_reverse($dataArray);

?>

<table border="1" cellspacing="1" cellpadding="3" align="center">
<caption><b>Data Mahasiswa</b></caption>
<tr bgcolor="green" align="center"> 
    <th><b>NIM</b></th> 
    <th><b>Nama Mahasiswa</b></th> 
    <th><b>Alamat</b></th>
    <th><b>Tanggal Lahir</b></th>
    <th><b>Mata Kuliah</b></th>
    <th><b>Semester</b></th>
    <th><b>Action</b></th>
</tr> 
<?php
for ($i = 1; $i <= $hit; $i++) {
    if ($i % 2 == 0) { 
        $bgcolor = "White";
    } else { 
        $bgcolor = "yellow";
    }
    $data = $dataArray[$i - 1];
?> 
<tr>
    <td align="center" bgcolor="<?php echo $bgcolor ?>"><?php echo $data['nim'] ?></td> 
    <td bgcolor="<?php echo $bgcolor ?>"><?php echo $data['nama'] ?></td> 
    <td bgcolor="<?php echo $bgcolor ?>"><?php echo $data['alamat'] ?></td>
    <td bgcolor="<?php echo $bgcolor ?>"><?php echo $data['tanggal_lahir'] ?></td>
    <td bgcolor="<?php echo $bgcolor ?>"><?php echo $data['mata_kuliah'] ?></td>
    <td bgcolor="<?php echo $bgcolor ?>"><?php echo $data['semester'] ?></td>
    <td bgcolor="<?php echo $bgcolor ?>" align="center"> 
        <a href=<?php echo "edit.php?nim=".$data['nim'] ?>><img src="image/b_edit.png" title="Edit"></a> 
        &nbsp; &nbsp; 
        <a href=<?php echo "delete.php?nim=".$data['nim'] ?> onClick="return confirm('Apakah Anda yakin menghapus data ini ?')"><img src='image/b_drop.png' title='Delete'></a>
    </td>
</tr> 
<?php 
} 
?> 
</table>
<?php 
echo "Data saat ini ada ".$hit." record<br> ";
mysqli_close($con); 
?>

<?php
include('koneksi/conf.php.');
$sql = "SELECT Mahasiswa.nim, Mahasiswa.nama, Mahasiswa.alamat, Mahasiswa.tanggal_lahir, Mahasiswa.mata_kuliah, Mahasiswa.semester 
FROM Mahasiswa";
$result = mysqli_query($con, $sql);
if (!$result) {
    die('Query error: ' . mysqli_error($con));
}
$hit = mysqli_num_rows($result);
?>