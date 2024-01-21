<html>
<head>
<title>Proses Input</title>
</head>
<body>
<?php
$username=$_POST["username"];
$password=$_POST["password"];

if($username == "admin" && $password == "admin1507"){
   echo "Selamat Datang di Website kami !";
}
else {
    echo "Maaf, username dan password Anda salah !";
}
?>
</body>
</html>
