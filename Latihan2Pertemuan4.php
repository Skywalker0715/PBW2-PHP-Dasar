<?php
$ganjil ="";
$genap = "";

for ($i = 1; $i <= 100; $i++) {
    // Jika angka adalah genap, tambahkan ke string genap
    if ($i % 2 == 0) {
        $genap .= $i . " ";
    }
    // Jika angka adalah ganjil, tambahkan ke string ganjil
    else {
        $ganjil .= $i . " ";
    }
}

// Tampilkan string bilangan ganjil dan genap
echo "Bilangan ganjil : " . $ganjil . "<br>";
echo "Bilangan genap : " . $genap . "<br>";
?>