<?php
session_start();
include 'koneksi.php';

    # STEP 1
    // jika tombol kirim di klik
if (isset($_POST['register'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $passwordConfirm = $_POST['password-confirm'];
    header('Location: index.php');

    // konfirmasi password jika tidak sesuai
    if ($password != $passwordConfirm) {
    echo '
        <script>
            alert("Password konfirmasi tidak sesuai");
            window.location.href="regis.php"
        </script>
    ';
    return false;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Daftar IPK Mahasiswa</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
    <a class="navbar-brand" href="#">PABWEB</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">About</a></li>
      <a class="navbar-brand" href="#">IPK</a>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="regis.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Log In</a></li>
    </ul>
  </div>
</nav>
  
<div class="container" align = "center">
  <h3>Registrasi</h3>
  <form action="" method="POST">
        <table>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="username" placeholder="Username" required></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" name="password" placeholder="Password" required></td>
            </tr>
            <tr>
                <td>Password konfirmasi</td>
                <td>:</td>
                <td><input type="password" name="password-confirm" placeholder="Konfirmasi Password" required></td>
            </tr>
            <br>
            <tr>
                <td></td>
                <td></td>
                <td><button type="submit" name="register">Register</button></td>
            </tr>
        </table>
    </form>
    <br>
    <p>Sudah punya akun? login <a href="index.php">disini</a></p>
</div>

</body>
</html>