<?php
include('koneksi/conf.php');
$nim = $_GET['nim'];

// Delete from Mahasiswa table
$sql = "DELETE FROM Mahasiswa WHERE nim=?";
$stmt = mysqli_prepare($con, $sql);
mysqli_stmt_bind_param($stmt, 's', $nim);
mysqli_stmt_execute($stmt);

echo "<script>window.location = 'view.php'</script>";
?>
