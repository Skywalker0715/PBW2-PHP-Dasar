<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form data Nilai Mahasiswa</title>
</head>
<body>
    <style>
        body{background-color: gray;}
    </style>
    <h1> Data Nilai Mahasiswa</h1><hr style="color:blue">
    <table>
        <form action="prosesnilai.php" method="POST">
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td> <input type="text" name="nim"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td><select name="jurusan" >
                    <option>pilih....</option>
                    <option value="Teknik Industri">Teknik Industri</option>
                    <option value="Arsitektur">Arsitektur</option>
                    <option value="Informatika">Informatika</option>
                    <option value="Sistem Informasi">Sistem Informasi</option>
                </select></td>
            </tr>
            <tr>
                <td>Masukan Nilai Tugas</td>
                <td>:</td>
                <td><input type="numbering" name="tugas"></td>
            </tr>
            <tr>
                <td>Masukan Nilai UTS</td>
                <td>:</td>
                <td><input type="numbering" name="uts"></td>
            </tr>
            <tr>
                <td>Masukan Nilai UAS</td>
                <td>:</td>
                <td><input type="numbering" name="uas"></td>
            </tr>
            <tr>
                <td><input type="Submit"  value="Procces" name="Process">
                <input type="Reset" value="Cancel" name="Cancel"></td>
            </tr>
        </form>
    </table>
</body>
</html>