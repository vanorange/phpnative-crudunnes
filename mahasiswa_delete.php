<?php
//koneksi database
include 'koneksi.php';

// menangkap data url
$nim = $_GET['nim'];

//menghapus
mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE nim='$nim'");
header("location:mahasiswa.php");
?>