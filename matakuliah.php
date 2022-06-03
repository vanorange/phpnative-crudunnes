<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA MATAKULIAH</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>
<body>
     <!-- NAVBAR -->
     <nav class="navbar fixed-top navbar-expand-lg bg-warning">
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

    <div class="container mt-4" style="margin-top:80px !important;">
        <div class="container-fluid">
        <a href="input_matakuliah.php" class="btn btn-success mt-2 mb-1">INPUT MATAKULIAH</a>
    <table class="table table-striped mt-4">
        <thead class="table-success">
        <tr>
            <th>Kode Matakuliah</th>
            <th>Nama Matakuliah</th>
            <th>SKS</th>
            <th>aksi</th>
        </tr>
        </thead>

        <?php
        include "koneksi.php";
        $sql = mysqli_query($koneksi, "select * from matakuliah");
        while($data = mysqli_fetch_array($sql)){
        ?>
            <tr>
                <td><?php echo $data['kode_mk']; ?></td>
                <td><?php echo $data['nama_mk']; ?></td>
                <td><?php echo $data['sks']; ?></td>
                <td>
                    <a class="btn btn-warning mx-1" href="matakuliah_edit.php?id=<?php echo $data['kode_mk'];?> ">Edit</a>
                    <a class="btn btn-danger" href="matakuliah_delete.php?kode_mk=<?php echo $data['kode_mk'];?> ">Hapus</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<!-- FOOTER -->
<div class="footer bg-warning" style="position: fixed;left: 0;bottom: 0;width: 100%;;color: white; text-align:center;">
  <p class="mt-3">All rights reserved 2022</p>
</div>
  </body>
</html>