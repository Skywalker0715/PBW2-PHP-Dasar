<?php
$r = 7;
$panjang = 10;
$lebar = 8;
$alas = 6;
$tinggi = 12;
$sisi = 5;

//menghitung Luas Lingkaran
$luas_Lingkaran = 3.14 * ($r * $r);

//menghitung Luas persegi
$luas_persegi = $sisi * $sisi;

//menghitung Luas persegi panjang
$luas_persegi_panjang = $panjang * $lebar;

//menghitung Luas segitiga
$luas_segitiga = 0.5 * $alas * $tinggi;

//output
echo "Program Menghitung Luas <br/>";
echo "Luas Lingkaran adalah " .$luas_Lingkaran. "<br/>";
echo "Luas persegi adalah " .$luas_persegi. "<br/>";
echo "Luas Persegi panjang adalah " .$luas_persegi_panjang. "<br/>";
echo "Luas Segitiga adalah " .$luas_segitiga. "<br/>";

?>