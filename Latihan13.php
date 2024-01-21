<html>
<head><title>Form</title></head>
<body>
<form action="" method="post">
<table border="0" width="40%" cellspacing="1" cellpadding="3" align="center"> 
<tr> 
   <td bgcolor="#FFFF66" colspan="3" align="center"> 
   <b><font face="Calisto MT" size="4"> Form Input Data Karyawan  </font></b></td>
</tr> 
<tr> 
   <td width="33%"><b>Nama</b></td> 
   <td width="2%"><p align="center">:</td> 
   <td width="62%"><input type="text" name="nama" size="30"></td> 
</tr> 
<tr> 
   <td width="33%"><b>Alamat</b></td> 
   <td width="2%"><p align="center">:</td> 
   <td width="62%"><input type="text" name="alamat" size="30"></td> 
</tr> 
<tr>
   <td colspan="3" align="center"> 
   <input type="submit" value="Save" name="submit"> 
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
   <input type="reset" value="Cancel" name="B2"></td>
</tr> 
</table> 
</form> 
</body> 
</html>

<?php
include "process.php";

if ($_POST) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];

    $sql = "SELECT * FROM karyawan WHERE nama='$nama'";
    $cek = mysqli_query($con, $sql);
    $result = mysqli_fetch_row($cek);

    if (empty($result)) { 
        $sqlnew = "INSERT INTO karyawan (nama, alamat) VALUES ('$nama', '$alamat')";
        mysqli_query($con, $sqlnew);
        echo "<center>Data berhasil diinput!!!<br></center>"; 
    } else if (!empty($result)) { 
        echo "<center>Data tersebut telah terdapat pada database kami!!!</center>"; 
    }
}

$sql = "SELECT * FROM karyawan";
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
<caption><b>Data Karyawan</b></caption>
<tr bgcolor="green" align="center"> 
    <th><b>No</b></th> 
    <th><b>Nama Karyawan</b></th> 
    <th><b>Alamat</b></th>
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
    <td align="center" bgcolor="<?php echo $bgcolor ?>"><?php echo $data['no'] ?></td> 
    <td bgcolor="<?php echo $bgcolor ?>"><?php echo $data['nama'] ?></td> 
    <td bgcolor="<?php echo $bgcolor ?>"><?php echo $data['alamat'] ?></td>
</tr> 
<?php 
} 
?> 
</table>
<?php 
echo "Data saat ini ada ".$hit." record<br> ";
mysqli_close($con); 
?>