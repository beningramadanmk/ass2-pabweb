<?php 
session_start();
include 'koneksi.php';
// get id dari url
$sem = $_GET['semester'];
    // buat query untuk menampilkan informasi semester di bagian input
$queryTampil = "SELECT * FROM ipk WHERE semester = $sem";
    // jalankan query dan tampung ke variable result
$result = mysqli_query($conn, $queryTampil);
    // tampung hasil query ke dalam array asosiatif dan tampung ke variabel data
$data = mysqli_fetch_assoc($result);

    // proses update
    # STEP 1
if (isset($_POST['update'])) {
        # STEP 2
        // tampung data dari input
    $semester = $_POST['semester'];
    $ipk = $_POST['ipk'];

        // buat query update dan jalankan querynya
    $queryUpdate = "UPDATE ipk SET semester = '$semester', ipk = '$ipk' WHERE semester = $sem";
    $hasil = mysqli_query($conn, $queryUpdate);

        # STEP 4
        // beri kondisi jika berhasil
        // $hasil memberikan nilai true/false
    if ($hasil) {
        echo '
        <script>
        alert("Update berhasil!");
        window.location.href="ipk.php"
        </script>
        ';
    } else {
        echo '
        <script>
        alert("Update gagal!");
        </script>
        ';
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
      <li class="active"><a href="about.php">About</a></li>
      <a class="navbar-brand" href="ipk.php">IPK</a>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="regis.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Log In</a></li>
    </ul>
  </div>
</nav>

<div class="container">
  <h3>Edit Daftar IPK</h3>
  <form action="" method="post" enctype="multipart/form-data">
    
    <table>
        <tr>
            <td>Semester</td>
            <td>:</td>
            <td><input type="text" name="semester" value="<?= $data['semester'] ?>"></td>
        </tr>
        <tr>
            <td>IPK</td>
            <td>:</td>
            <td><input type="text" name="ipk" value=" <?= $data['ipk'] ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><button name="update">Update</button></td>
        </tr>
    </table>
    <a href="ipk.php">Kembali</a></p>
</form>
</div>

</body>
</html>