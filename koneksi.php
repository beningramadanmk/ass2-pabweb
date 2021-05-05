<?php
date_default_timezone_set('Asia/Jakarta');
$now = date("Y-m-d H:i:s");
//konfigurasi DB
$host="localhost";
$user="root";
$password="";
$db="ass2-pabweb";


$conn = mysqli_connect($host, $user, $password, $db);
//echo "berhasil terkoneksi.....    ";
if( !$conn ){
    die('Gagal terhubung dengan database: ' . mysqli_connect_error());
}
?>