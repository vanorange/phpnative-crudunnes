<?php

    include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style type="text/css">
    
    body{
        
        background-image: url("bg.jpg");

        /* Center and scale the image nicely */
        /* background-repeat: no-repeat; */
        background-size: cover;
        position: relative;
    }
    .container{
        margin-top:200px;
    }
    </style>
</head>
<body>
    <?php 
    if(isset($_GET['pesan'])){
        if($_GET['pesan'] == "gagal"){
            echo "Login gagal! username dan password salah!";
        }else if($_GET['pesan'] == "logout"){
            echo "Anda telah berhasil logout";
        }else if($_GET['pesan'] == "belum_login"){
            echo "Anda harus login untuk mengakses halaman admin";
        }
    }
    ?>
    <div class="container d-flex justify-content-center">
        <div class="row ">
            <div class="card opacity-80" style="width: 18rem; " >
                <form method="post" action="cek_login.php">
                
                    <div class="form-group mt-3" style="text-align:center;">
                        <img src="logo.png" style=" width:30px; height: 35px;" class="img-thumbnail" alt="...">
                    </div>
                    <div class="form-group" style="text-align:center;">
                        <label class="form-label mt-1 mb-3 text-primary">Universitas Negri Semarang</label>
                    </div>
                    <div class="form-group">
                        <label class="form-label"">Username</label>
                        <input type="text" name="username" class="form-control mb-3" placeholder="Masukkan username">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control " placeholder="Masukkan password">
                    </div> 
                    <div class="form-group ">
                        <input type="submit" style="aling:center; width:100%;" class="btn btn-primary btn-sm mt-3 mb-3" value="LOGIN">
                    </div>
            
                </form>
            </div>
        </div>
    </div>
    
    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>