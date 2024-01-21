<?php
include('koneksi/conf.php');
$no=$_POST['no'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$gaji=$_POST['gaji'];
$tunj=$_POST['tunjangan'];


$sql="update karyawan set nama='$nama', alamat='$alamat' where no='$no'";
$result = mysqli_query($con,$sql); 
$sqla="update gaji set gajipokok='$gaji', tunjangan='$tunj' where no='$no'";
$result = mysqli_query($con,$sqla); 
echo "<script>window.location = 'view.php'</script>";
?>

