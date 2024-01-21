<html>
<head>
    <title>Form</title>
</head>
<body>
    <form action="" method="post">
        <table border="0" width="40%" cellspacing="1" cellpadding="3" align="center">
            <tr>
                <td bgcolor="#FFFF66" colspan="3" align="center">
                    <b><font face="Calisto MT" size="4"> Form Input Data Mahsiswa </font></b>
                </td>
            </tr>
            <tr>
                <td width="33%"><b>NIM</b></td>
                <td width="2%"><p align="center">:</td>
                <td width="62%"><input type="text" name="nim" size="30"></td>
            </tr>
            <tr>
                <td width="33%"><b>Nama</b></td>
                <td width="2%"><p align="center">:</td>
                <td width="62%"><input type="text" name="nama" size="30"></td>
            </tr>
            <tr>
                <td width="33%"><b>Tanggal Lahir</b></td>
                <td width="2%"><p align="center">:</td>
                <td width="62%"><input type="date" name="tanggal_lahir"></td>
            </tr>
            <tr>
                <td width="33%"><b>Alamat</b></td>
                <td width="2%"><p align="center">:</td>
                <td width="62%"><input type="text" name="alamat" size="30"></td>
            </tr>
            <tr>
                <td width="33%"><b>Matakuliah</b></td>
                <td width="2%"><p align="center">:</td>
                <td width="62%"><input type="text" name="matakuliah" size="30"></td>
            </tr>
            <tr>
                <td width="33%"><b>Semester</b></td>
                <td width="2%"><p align="center">:</td>
                <td width="62%"><input type="text" name="semester" size="30"></td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <input type="submit" value="Save" name="submit">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="reset" value="Cancel" name="B2">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>

<?php
include('koneksi/conf.php');
$sql = "SELECT Mahasiswa.nim, Mahasiswa.nama, Mahasiswa.tanggallahir, Mahasiswa.alamat, Mahasiswa.matakuliah, Mahasiswa.semester FROM Mahasiswa";
$result = mysqli_query($con, $sql);
$hit = mysqli_num_rows($result);
$dataArray = mysqli_fetch_all($result);

?>

<table border="1" cellspacing="1" cellpadding="3" align="center">
    <caption><b>Data Mahasiswa</b></caption>
    <tr bgcolor="green" align="center">
        <th><b>NIM</b></th>
        <th><b>Nama Mahasiswa</b></th>
        <th><b>Tanggal Lahir</b></th>
        <th><b>Alamat</b></th>
        <th><b>Matakuliah</b></th>
        <th><b>Semester</b></th>
        <th><b>Action</b></th>
    </tr>
    <?php
    for ($i = 0; $i < $hit; $i++) {
        $bgcolor = $i % 2 == 0 ? "White" : "yellow";
        $data = $dataArray[$i];
    ?>
        <tr>
            <td align="center" bgcolor="<?php echo $bgcolor ?>"><?php echo $data[0] ?></td>
            <td bgcolor="<?php echo $bgcolor ?>"><?php echo $data[1] ?></td>
            <td bgcolor="<?php echo $bgcolor ?>"><?php echo $data[2] ?></td>
            <td bgcolor="<?php echo $bgcolor ?>"><?php echo $data[3] ?></td>
            <td bgcolor="<?php echo $bgcolor ?>"><?php echo $data[4] ?></td>
            <td bgcolor="<?php echo $bgcolor ?>"><?php echo $data[5] ?></td>
            <td bgcolor="<?php echo $bgcolor ?>" align="center">
                <a href="edit.php?no=<?php echo $data[0] ?>"><img src="image/b_edit.png" title="Edit"></a>&nbsp; &nbsp;
                <a href="delete.php?no=<?php echo $data[0] ?>" onClick="return confirm('Apakah Anda yakin menghapus data ini ?')"><img src='image/b_drop.png' title='Delete'></a>
            </td>
        </tr>
    <?php
    }
    ?>
</table>

<?php
echo "Data saat ini ada " . $hit . " record<br>";
mysqli_close($con);
?>
