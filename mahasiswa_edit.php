<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT MAHASISWA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>
<body>

    <?php
    include 'koneksi.php';
    $id = $_GET['id'];
    $sqr = mysqli_query($koneksi, "SELECT * FROM mahasiswa where nim = '$id'");
    while ($data = mysqli_fetch_array($sqr)) {
    ?>
 <!-- NAVBAR -->
 <nav class="navbar navbar-expand-lg bg-warning">
      <div class="container-fluid">
        <a class="navbar-brand" href="dashboard.php">
        <img src="logo2.png" style=" width:30px; height: 32px;" class="img-thumbnail" alt="...">
        <b class="text-primary" style="text-align:center;">UNNES</b>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="mahasiswa.php">Data Mahasiswa</a>
            <a class="nav-link active" aria-current="page" href="matakuliah.php">Data Matakuliah</a>    
          </div>
        </div>
        <form class="d-flex">
        <a class="btn btn-outline-success" href="logout.php">logout</a>
      </form>
      </div>
    </nav>

    <!-- CONTENT -->    

<div class="container mt-3">
    <h3><i class="fas fa-edit mt-4"></i>EDIT DATA MAHASISWA</h3>
    <div class="row">
        <div class="col-lg-8">
        <form method="post" action="aksi_edit_mahasiswa.php">
        <table>

        <div class="for-group">
                <label for="nim">Nim</label>
                <input type="text" name="nim" class="form-control"
                value="<?php echo $data['nim']; ?>">
        </div>
        <div class="for-group">
                <label for="nama_lengkap">Nama Lengkap</label>
                <input type="text" name="nama_lengkap" class="form-control"
                value="<?php echo $data['nama_lengkap']; ?>">
        </div>
        <div class="for-group">
                <label for="telepon">Telepon</label>
                <input type="text" name="telepon" class="form-control"
                value="<?php echo $data['telepon']; ?>">
        </div>
         <div class="for-group">
                <label for="email">Email</label>
                <input type="text" name="email" class="form-control"
                value="<?php echo $data['email']; ?>">
        </div>
        <div class="for-group">
                <label for="jurusan">Jurusan</label>
                <select class="form-select" name="jurusan" aria-label="Default select example"  >
                                <option value="value=<?php echo $data['jurusan']; ?>">Pilih Jurusan</option>
                                <option value="Sistem Informasi">Sistem Informasi</option>
                                <option value="Teknik Informatika">Teknik Informatika</option>
                                <option value="Komunikasi">Komunikasi</option>
                </select>
        </div>
        
        <button type="submit" class="btn btn-success btn-sm mt-3"> Simpan</button>
        <a href="mahasiswa.php" type="submit" class="btn btn-secondary btn-sm mt-3 ms-2">Kembali ke halaman utama</a>   
    </table>
    </form>
</div>
</div>
</div>
    <?php
    }
    ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<!-- FOOTER -->
<div class="footer bg-warning" style="position: fixed;left: 0;bottom: 0;width: 100%;;color: white; text-align:center;">
  <p class="mt-3">All rights reserved 2022</p>
</div>
</body>
</html>