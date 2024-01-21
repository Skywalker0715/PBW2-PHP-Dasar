<?php
include('koneksi/conf.php');
$no=$_POST['no'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];

$sql="update karyawan set nama='$nama', alamat='$alamat' where no='$no'";
$result = mysqli_query($con,$sql); 
echo "<script>window.location = 'view.php'</script>";
?>

