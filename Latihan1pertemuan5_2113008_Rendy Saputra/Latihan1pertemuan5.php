<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
</head>
<body>
    <h1><u>Paket Makanan</u></h1>
    <p>Paket 1 : Nasi +Ayam Paha + Es Teh seharga Rp 30.000</p><br>
    <p>Paket 2 : Nasi +Ayam Dada + Es Milo seharga Rp 25.000</p><br>
    <p>Paket 3 : Nasi + Ayam Sayap + Kopi seharga Rp 22.500</p><br>
    <hr>
    
    <?php
     $choice = "Paket 1";
     switch($choice) {
        case "Paket 1":
            echo "Anda memilih paket 1 (Nasi +Ayam Paha + Es The seharga Rp 30.000), Terima Kasih ";
            break;
        case "Paket 2":
            echo "Anda memilih paket 2 (Nasi +Ayam Dada + Es Milo seharga Rp 25.000), Terima Kasih";
            break;
        case "Paket 3":
            echo "Anda Memilih paket 3 (Nasi + Ayam Sayap + Kopi seharga Rp 22.500), Terima Kasih";
            break;
        default:
        echo "Menu yang Anda pilih tidak tersedia";
     }

    ?>
</body>
</html>