<?php 
	include 'koneksi.php';
	if (isset($_GET['semester'])) {
		$semester = $_GET['semester'];
		$sql 	= "DELETE FROM `ipk` WHERE `ipk`.`semester` = '$semester'";
		$result = mysqli_query($conn, $sql);

		if ($result) {
			echo '
            <script>
            alert("Daftar IPK berhasil dihapus!");
            window.location.href="ipk.php"
            </script>
            ';
		}else{
			echo '
            <script>
            alert("Daftar IPK gagal dihapus!");
            window.location.href="ipk.php"
            </script>
            ';
		}
	}

 ?>