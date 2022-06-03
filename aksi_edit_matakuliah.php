<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form

$kode_mk   	= $_POST['kode_mk'];
$nama_mk    = $_POST['nama_mk'];
$sks        = $_POST['sks'];

// update data ke database
mysqli_query($koneksi,"UPDATE matakuliah SET kode_mk='$kode_mk', nama_mk='$nama_mk', sks='$sks' where kode_mk='$kode_mk'");
 
 
// mengalihkan halaman kembali ke index.php
header("location:matakuliah.php");
?>