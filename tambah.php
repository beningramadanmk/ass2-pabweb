<?php 
session_start();
include 'koneksi.php';

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
		<center>
    		<h3>FORM INPUT DATA IPK</h3>

    			<fieldset>
    				<form action="simpan.php" method="POST">
    					<table>
							<tr>
							<input type="hidden" name="tanggal" value="<?php echo date("d-m-Y"); ?>">
    						</tr>
							<tr>
    							<td>Semester</td>
    							<td>:</td>
    							<td><input type="text" name="semester" required></td>
    						</tr>
                            <tr>
    							<td>IPK</td>
    							<td>:</td>
    							<td><input type="text" name="ipk" required></td>
    						</tr>
    						<tr>
    							<td></td>
    							<td></td>
    							<td><input type="submit" value="KIRIM" name="submit"></td>
    						</tr>
    					</table>
    				</form>
    			</fieldset>
    		
    		<a href="ipk.php">Kembali</a></p>
			</center>
    	</div>

    </body>
    </html>