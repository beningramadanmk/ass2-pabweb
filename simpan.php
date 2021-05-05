<?php
//Include file koneksi ke database
include "koneksi.php";

//menerima nilai dari kiriman form input-barang 
$semester=$_POST["semester"];
$ipk=$_POST["ipk"];


//Query input menginput data kedalam tabel barang
  $sql="insert into ipk (semester,ipk) values
		('$semester','$ipk')";

//Mengeksekusi/menjalankan query diatas	
  $hasil=mysqli_query($conn,$sql);

//Kondisi apakah berhasil atau tidak
  if ($hasil) {
	echo '<script>
    alert("Update berhasil!");
    window.location.href="ipk.php"
    </script>
    ';
	exit;
  }
else {
	echo '<script>
    alert("Update gagal!");
    </script>';
	exit;
}  

?>