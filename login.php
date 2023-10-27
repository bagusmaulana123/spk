<?php
include 'proses/proses_login.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Halaman Login</title>
</head>
<body>
    
   <div class="container">
      <div class="row">
        <!-- <div class="text-center text-dark mt-5">
          <h6>Sistem Pendukung Keputusan Penentuan Tujuan Wisata Alam di Kalimantan Selatan</h6></div> -->
        <div class="col-md-6 offset-md-3">
            <!-- <h3 class="text-center text-dark mt-5 fw-bold">Sistem Pendukung Keputusan Penentuan Tujuan Wisata Alam di Kalimantan Selatan</h3> -->
          <div class="card my-5">
            <form action="" method="POST" class="card-body cardbody-color p-lg-5">
              <div class="form-text text-center mb-5 text-dark fw-bold"><h5>Sistem Pendukung Keputusan Penentuan Tujuan Wisata Alam di Kalimantan Selatan</h5></div>
              <div class="mb-3">
                <input type="text" class="form-control" name="username" aria-describedby="emailHelp" placeholder="User Name">
              </div>
              <div class="mb-3">
                <input type="password" class="form-control" name="password" placeholder="password">
              </div>
              <div class="text-center"><button type="submit" class="btn btn-color px-5 mb-5 w-100">Login</button></div>
              <div class="form-text text-center mb-5 text-dark">Copyright 2023</div>
            </form>
          </div>
        </div>
      </div>
   </div>
    
</body>
</html>