<?php 
include('koneksi/conf.php');
$sql="select karyawan.no, karyawan.nama, karyawan.alamat, gaji.gajipokok, gaji.tunjangan from karyawan, gaji where karyawan.no=gaji.no"; 
$result = mysqli_query($con,$sql);
$hit=mysqli_num_rows($result);
?>
<table border="1" cellspacing="1" cellpadding="3">
<caption><b>Data Karyawan</b></caption>
<tr bgcolor="green" align="center"> 
      <th><b>No</b></th> 
      <th><b>Nama Karyawan</b></th> 
      <th><b>Alamat</b></th>
      <th><b>Gaji Pokok</b></th>
	<th><b>Tunjangan</b></th>
      <th><b>Action</b></th>
</tr> 
<?php
for($i=1;$i<=$hit;$i++){ 
     if($i%2==0){ 
           $bgcolor="White"; 
     }else { 
           $bgcolor="yellow"; 
     } 
     $data=mysqli_fetch_array($result); 
     ?> 
     <tr>
     <td align="center" bgcolor="<?php echo $bgcolor?>"><?php echo $data[0] ?></td> 
     <td bgcolor="<?php echo $bgcolor?>"><?php echo $data[1] ?></td> 
     <td bgcolor="<?php echo $bgcolor?>"><?php echo $data[2] ?></td>
     <td bgcolor="<?php echo $bgcolor?>"><?php echo $data[3] ?></td>
     <td bgcolor="<?php echo $bgcolor?>"><?php echo $data[4] ?></td>
     <td bgcolor="<?php echo $bgcolor?>" align="center"> <a href=<?php echo "edit.php?no=$data[0]"?>><img src="image/b_edit.png" title="Edit"></a>&nbsp; &nbsp; <a href=<?php echo "delete.php?no=$data[0]" ?> onClick="return confirm('Apakah Anda yakin menghapus data ini ?')"><img src='image/b_drop.png' title='Delete'></a>
    </td>
     </tr> 
     <?php 
     } 
     ?> 
     </table>
     <?php 
     echo "Data saat ini ada ".$hit." record<br>";
     mysqli_close($con); 
     ?>
     