<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>buku tamu</title>
</head>
<body>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = $_POST["nama"];
	$email = $_POST["email"];
	$comment = $_POST["comment"];
    if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
        echo "Error: Nama hanya boleh mengandung huruf dan spasi.<br>";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Error: Email tidak valid.<br>";
    }
    if (!preg_match("/^[a-zA-Z0-9 .,:!?]*$/", $comment)) {
        echo "Error: Komentar hanya boleh mengandung huruf, angka, spasi, tanda baca (.,:!?).<br>";
    }
    
    $namafile = "buku tamu.txt"; 
	        $namafile = "buku tamu.txt";
	        $fhandle = fopen($namafile, 'a');
            $tambah = ("$name $email $comment");
	        fwrite ($fhandle,$tambah);
	        fclose($fhandle);
        }
        echo $name;
        echo $email;
        echo $comment;
     
?>
</body>
</html>