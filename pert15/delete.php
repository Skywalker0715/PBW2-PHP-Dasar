<?php
include('koneksi/conf.php');
$no = $_GET['no'];

// Delete from gaji table
$sql = "DELETE FROM gaji WHERE no=?";
$stmt = mysqli_prepare($con, $sql);
mysqli_stmt_bind_param($stmt, 'i', $no);
mysqli_stmt_execute($stmt);

// Delete from karyawan table
$sql = "DELETE FROM karyawan WHERE no=?";
$stmt = mysqli_prepare($con, $sql);
mysqli_stmt_bind_param($stmt, 'i', $no);
mysqli_stmt_execute($stmt);

echo "<script>window.location = 'view.php'</script>";

?>