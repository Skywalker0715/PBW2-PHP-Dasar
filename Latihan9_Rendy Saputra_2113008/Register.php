<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <form action="">
        <h1>Buat Akun</h1> <hr>
        <table>
            <tr>
                <td><p>Nama </p></td>
                <td><p>:</p></td>
                <td><input type="text" name="firstName" placeholder="First">
                <Input type="text" name="lastName" placeholder="Last"></td>
            </tr>
            <tr>
                <td><p>Username </p></td>
                <td><p>:</p></td>
                <td><input type="text" name="userName"></td>
            </tr>
            <tr>
                <td><p>Password </p></td>
                <td><p>:</p></td>
                <td><input type="password" name="passWord" id=""></td>
            </tr>
            <tr>
                <td><p>Gender </p></td>
                <td><p>:</p></td>
                <td>
                    <input type="radio" name="gender" id="male"><label for="male">Laki-laki</label>
                    <input type="radio" name="gender" id="female"><label for="female">Perempuan</label>
                </td>
            </tr>
            <tr>
                <td><p>Tanggal Lahir </p></td>
                <td><p>:</p></td>
                <td>
                    <select>
                        <option value="januari">Januari</option>
                        <option value="februari">Februari</option>
                        <option value="Maret">Maret</option>
                        <option value="April">April</option>
                        <option value="Mei">Mei</option>
                        <option value="Juni">Juni</option>
                        <option value="Juli">Juli</option>
                        <option value="Agustus">Agustus</option>
                        <option value="September">September</option>
                        <option value="Oktober">Oktober</option>
                        <option value="November">November</option>
                        <option value="Desember">Desember</option>
                    </select>
                    <input type="number" name="tanggal" id="" placeholder="Day">
                    <input type="number" name="tahun" id="" placeholder="Year">
                </td>
            </tr>
        </table>
        <input type="submit" value="Daftar">
        <input type="reset" value="Reset">
    </form>
<body>
<html>