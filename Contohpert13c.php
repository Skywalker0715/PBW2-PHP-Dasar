<html>
<head><title>Form</title></head>
<body>
<form action="" method="post">
<table border="0" width="40%" cellspacing="1" cellpadding="3" align="center"> 
<tr> 
   <td bgcolor="#FFFF66" colspan="3" align="center"> 
   <b><font face="Calisto MT" size="4">::Form Input Data Karyawan:: </font></b></td>
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
$con = mysqli_connect("localhost","root","","latbase");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
 
if($_POST) {
$nama=$_POST['nama'];
$alamat=$_POST['alamat']; 
$sql="select*from karyawan where nama='$nama'"; 
$cek = mysqli_query($con,$sql);
$result=mysqli_fetch_row($cek); 

if (empty($result)) { 
     $sqlnew="insert into karyawan(nama,alamat) values 
                         ('$nama','$alamat')";
     mysqli_query($con,$sqlnew); 
    echo "<center>Data berhasil diinput!!!<br></center>"; 
    } else if (!empty($result)) { 
    echo "<center>Data tersebut telah terdapat pada database 
               Kami!!!</center>"; 
    } 
} ?> 
