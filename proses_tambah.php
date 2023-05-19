<?php
include_once("koneksi.php");

$namaDepan = $_POST['nama_depan'];
$namaBelakang = $_POST['nama_belakang'];
$surel = $_POST['surel'];
$noTlp = $_POST['no_telp'];
$alamat = $_POST['alamat'];

$result = mysqli_query($conn, "INSERT INTO `customer` (`first_name`,`last_name`,`email`,`phone`,`address`) VALUES ('$namaDepan','$namaBelakang','$surel','$noTlp','$alamat')");

error_reporting(E_ALL);
ini_set('display_errors', 1);

header("Location:index.html");
?>