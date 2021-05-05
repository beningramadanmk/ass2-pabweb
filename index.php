<?php
session_start();
include 'koneksi.php';

if(isset($_POST['login'])){
    $user = $_POST['username'];
    $password = $_POST['password'];
    header('Location: about.php');
} 
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
      <title>Daftar IPK Mahasiswa</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width">
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
          <a class="navbar-brand" href="#">About</a>
          <li><a href="#">IPK</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
          <li><a href="regis.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
          <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Log In</a></li>
      </ul>
    </div>
   
</nav>
  
<div class="container" align="center">
   <div class="font">

  <h3>Log In</h3>
  <form action="" method="POST">

        <table>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" name="password"></td>
            </tr>
            <br>
            <br>
            <tr>
                <td></td>
                <td></td>
                <td><button name="login">Login</button></td>
            </tr>
        </table>
    </form>
    <br>
    <p>Belum punya akun? registrasi <a href="regis.php">disini</a></p>
    </div>
</div>

</body>
</html>