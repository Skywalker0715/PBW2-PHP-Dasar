<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hasil Nilai Mahasiswa</title>
</head>
<body>
    <style>
      h1{background-color: gray;color: black;}
      body{background-color: white;color: blue;}
      
    </style>
    <h1>Hasil Nilai Mahasiswa Fakultas Sains dan teknologi</h1><hr><br>
    <hr style="color:blue">

    <?php
    if ($_POST) {
      $nim    = $_POST["nim"];
      $nama   = $_POST["nama"];
      $jurusan= $_POST["jurusan"];
      $tugas  = $_POST["tugas"];
      $uts    = $_POST["uts"];
      $uas    = $_POST["uas"];

    // Menghitung nilai akhir
		$nilai_akhir = ($tugas * 0.1) + ($uts * 0.35) + ($uas * 0.4);

		// Menentukan grade berdasarkan nilai akhir
		if ($nilai_akhir >= 80) {
		    $grade = "A";
		} elseif ($nilai_akhir >= 70) {
		    $grade = "B";
		} elseif ($nilai_akhir >= 60) {
		    $grade = "C";
		} elseif ($nilai_akhir >= 50) {
		    $grade = "D";
		} elseif ($nilai_akhir <=44) {
		    $grade = "E";
		}
        else{
            $grade = "tidak lengkap";
        }

	  // Menampilkan nilai akhir dan grade
      echo "NIM: " . $nim . "<br>";
      echo "Nama: " . $nama . "<br>";
      echo "Jurusan: " . $jurusan . "<br>";
      echo "Nilai UTS: " . $uts . "<br>";
      echo "Nilai Tugas: " . $tugas . "<br>";
      echo "Nilai UAS: " . $uas . "<br>";
      echo "Nilai Akhir: " . $nilai_akhir;       
    }
    ?>
    <br>
    <hr>
    <input type="reset" value="kembali" name="kembali">
    
</body>
</html>