<?php
// koneksi database
include "koneksi.php";
 
// menangkap data yang di kirim dari form
$nim   			= $_POST['nim'];
$nama_lengkap   = $_POST['nama_lengkap'];
$telepon        = $_POST['telepon'];
$email        	= $_POST['email'];
$jurusan		= $_POST['jurusan'];

mysqli_query($koneksi,"INSERT INTO mahasiswa VALUES('$nim','$nama_lengkap','$telepon','$email','$jurusan')");

header("location:mahasiswa.php");
?>