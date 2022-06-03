<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form

$nim   			= $_POST['nim'];
$nama_lengkap   = $_POST['nama_lengkap'];
$telepon        = $_POST['telepon'];
$email        	= $_POST['email'];
$jurusan		= $_POST['jurusan'];

// update data ke database
mysqli_query($koneksi,"UPDATE mahasiswa SET nim='$nim', nama_lengkap='$nama_lengkap', telepon='$telepon', email='$email', jurusan='$jurusan' where nim='$nim'");
 
 
// mengalihkan halaman kembali ke index.php
header("location:mahasiswa.php");
?>