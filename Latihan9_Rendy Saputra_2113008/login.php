<html>
<head>
  <title>Login</title>
  <script language="javascript">
    function pesan() {
      var cekusername = document.getElementById('a').value;
      var cekpassword = document.getElementById('b').value;
      if (cekusername.length == 0) {
        window.alert("Anda belum memasukkan username");
        return false;
      } else if (cekpassword.length == 0) {
        window.alert("Anda belum memasukkan password");
        return false;
      }
      return true;
    }
  </script>
</head>
<body>
  <form name="form1" method="post" action="ceklogin.php">
    <table width="350" border="1" cellpadding="2" cellspacing="0" bordercolor="#FFFFFF" bgcolor="aqua">
      <tr>
        <th colspan="2">LOGIN </th>
      </tr>
      <tr>
        <td>Username</td>
        <td><input type="text" name="username" id="a"></td>
      </tr>
      <tr>
        <td>Password</td>
        <td><input type="password" name="password" id="b"></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>
          <input type="submit" name="login" value="Login" onClick="return pesan()">
          <input type="reset" name="reset" value="Reset">
        </td>
      </tr>
    </table>
    <hr>
    <p>Silahkan <a href="Register.php"> daftar</a> jika anda belum memiliki akun</p>
  </form>
</body>
</html>

