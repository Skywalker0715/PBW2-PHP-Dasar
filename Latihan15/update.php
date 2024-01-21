<?php
include('koneksi/conf.php');
$nim = $_POST['NIM'];
$nama = $_POST['Nama'];
$alamat = $_POST['Alamat'];
$matakuliah = $_POST['Matakuliah'];
$semester = $_POST['Semester'];
$tanggal_lahir = $_POST['TanggalLahir'];

$sql = "UPDATE Mahasiswa SET Nama='$nama', Alamat='$alamat', Matakuliah='$matakuliah', Semester='$semester', TanggalLahir='$tanggal_lahir' WHERE NIM='$nim'";
$result = mysqli_query($con, $sql);

if ($result) {
    echo "<script>alert('Data berhasil diupdate');</script>";
    echo "<script>window.location = 'view.php'</script>";
} else {
    echo "<script>alert('Gagal mengupdate data');</script>";
    echo "<script>window.location = 'view.php'</script>";
}
?>
