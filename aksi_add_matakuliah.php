<?php
// koneksi database
include "koneksi.php";
 
// menangkap data yang di kirim dari form
$kode_mk   			= $_POST['kode_mk'];
$nama_mk   = $_POST['nama_mk'];
$sks        = $_POST['sks'];


mysqli_query($koneksi,"INSERT INTO matakuliah VALUES('$kode_mk','$nama_mk','$sks')");

header("location:matakuliah.php");
?>