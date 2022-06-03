<?php
//koneksi database
include 'koneksi.php';

// menangkap data url
$kode_mk = $_GET['kode_mk'];

//menghapus
mysqli_query($koneksi, "DELETE FROM matakuliah WHERE kode_mk='$kode_mk'");
header("location:matakuliah.php");
?>