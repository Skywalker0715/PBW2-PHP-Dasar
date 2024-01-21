<?php
$Nilai1 = 2.5;
$Nilai2 = 0.5555;

$hasil_penjumlahan = ceil($Nilai1 + $Nilai2);
echo "Hasil Penjumlahan (dibulatkan ke atas) = ". $hasil_penjumlahan. "<br>";

$hasil_perkalian = floor($Nilai1 * $Nilai2);
echo "Hasil Perkalian (dibulatkan kebawah) = ". $hasil_perkalian. "<br>";

$hasil_pembagian = round($Nilai1 / $Nilai2, 2);
echo "Hasil Pembagian (menampilkan dua digit dibelakang koma) = ". $hasil_pembagian. "<br>";
?>