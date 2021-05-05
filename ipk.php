<?php
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
  <h3>Daftar IPK</h3>
  <button class="btn btn-primary"><a href="tambah.php" style="color:white;">Tambah Data IPK</a></button>
  <div class='container'>
        <table class='table'>
            <div class="form-group row">
              <div class="col-sm-10" color:white>
              </div>
            </div>
            <caption>Daftar IPK</caption>
            <thead>
                <tr>
                    <th scope='col'>No</th>
                    <th scope='col'>Semester</th>
                    <th scope='col'>IPK</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                include 'koneksi.php';
                $ip = mysqli_query($conn, 'SELECT * FROM ipk');
                $no = 1;
                foreach ($ip as $row) {
                  $id = $row['semester'];
                    echo "
                        <tr>
                            <th scope='row'>$no</th>
                            <td>".$row['semester']."</td>
                            <td>".$row['ipk']."</td>
                            <td><a class='btn btn-primary' href='update.php?semester=".$row['semester']."'>Edit</a> | ";
                            ?>
                            <a class='btn btn-danger' onclick="deleteConfirm('<?php echo 'delete.php?semester='.$id ?>')" data-toggle="modal" data-target="#exampleModal">Delete</a> 
                        <?php
                           echo " </td>
                        </tr>";
                    $no++;
                }
            ?>

            </tbody>
        </table>
        <a href="about.php">Kembali</a></p>
    </div>
</div>

<script>
            function deleteConfirm(url){
                $('#btn-delete').attr('href', url);
            }
    </script>            


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
        </div>
        <div class="modal-body"> Apakah Anda Yakin Akan Menghapus? </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            <a id="btn-delete" class="btn btn-danger">Iya</a> 
        </div>

        </div>
    </div>
    </div>

</body>
</html>