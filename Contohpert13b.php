<?php 
$con = mysqli_connect("localhost","root","","latbase");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
$sql="select * from karyawan"; 
$result = mysqli_query($con,$sql);
$hit=mysqli_num_rows($result);
?>
<table border="1" cellspacing="1" cellpadding="3">
<caption><b>Data Karyawan</b></caption>
<tr bgcolor="green" align="center"> 
	<th><b>No</b></th> 
	<th><b>Nama Karyawan</b></th> 
	<th><b>Alamat</b></th>
</tr> 
<?php
for($i=1;$i<=$hit;$i++)
{ 
	if($i%2==0){ 
		$bgcolor="White"; 
	}else { 
		$bgcolor="yellow"; 
	} 

    $data=mysqli_fetch_row($result);
?> 
<tr>
<td align="center" bgcolor="<?php echo 
       $bgcolor?>"><?php echo $data[0] ?></td> 
<td bgcolor="<?php echo $bgcolor?>">
       <?php echo $data[1] ?></td> 
<td bgcolor="<?php echo $bgcolor?>">
        <?php echo $data[2] ?></td>
</tr> 
<?php 
} 
?> 
</table>
<?php 
echo "Data saat ini ada ".$hit." record<br>";
mysqli_close($con); 
?>