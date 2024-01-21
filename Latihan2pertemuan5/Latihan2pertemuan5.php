<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Nilai akhir Mahasiswa</h3><hr>
    <p>Nilai Tugas = 80 </p>
    <p>Nilai Kuis = 78 </p>
    <p>Nilai UTS = 87</p>
    <p>Nilai UAS = 85</p>

    <h3>Ketentuan</h3><hr>
    <p>Tugas = 10% </p>
    <p>Kuis  = 15% </p>
    <p>UTS   = 35%</p>
    <p>UAS   = 40%</p>


<?php
$Tugas = 80;
$Kuis = 78;
$UTS = 87;
$UAS = 85;

$nilai_akhir = ($Tugas * 0.1) + ($Kuis * 0.15) + ($UTS * 0.35) + ($UAS * 0.4);

if ($nilai_akhir>=80 && $nilai_akhir<=100) {
    echo "Anda Mendapat Nilai Akhir semester adalah A";
}
else if ($nilai_akhir>=68 && $nilai_akhir<=79) {
    echo "Anda Mendapat Nilai Akhir semester adalah B";
}
else if ($nilai_akhir>=56 && $nilai_akhir<=67) {
    echo "Anda Mendapat Nilai Akhir semester adalah C";
}
else if ($nilai_akhir>=44 && $nilai_akhir<=55) {
    echo "Anda Mendapat Nilai Akhir semester adalah D";
}
else if ($nilai_akhir<=44){
    echo "Anda Mendapat Nilai Akhir semester adalah E";
}
else {
    echo "Tidak lengkap Maka Anda mendapatkan Nilai akhir semester adalah F";
}
?>
</body>
</html>