<?php
session_start();
  include 'koneksi.php'; 

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Web Cek Gizi</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

  

</head>
<body>
  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg" style="background-color: #5b6bf5; color: white" >
      <div class="container-fluid" >
        <p class="navbar-brand ms-3" style="color: white">Cek Gizi</p>
          <div class="ms-auto d-flex">
            <a class="nav-link me-5" href="#">About</a>
            <!-- <a class="nav-link me-5" href="#">Cek BMI</a>
            <a class="nav-link me-5" href="#">Daftar Makanan</a> -->

            <button type="button" class="btn btn-light d-flex justify-content-center"><a class="nav-link" href="login.php"><i class="bi bi-person-fill me-2"></i>Login</a></button>     

          </div>
      </div>
  </nav>

  <!-- HEADER -->
  <div class="container">
    <center>
      <h1 class="mt-5" style="color: #5b6bf5" >Selamat Datang di Web Cek Kesehatan</h1>
    </center>
  </div>

  <!-- MENU -->
  <div class="container mt-5">
    <div class="d-flex justify-content-center gap-5">

    <div class="card" style="width: 10rem; border: none; background-color: #f4f6ff">
      <div class="card-body d-flex justify-content-center">
        <div class="card-title">
          <a href="bmi_form.php" class="text-decoration-none">Cek BMI</a>
        </div>
      </div>
   </div>

    <div class="card" style="width: 10rem; border: none; background-color: #f4f6ff">
      <div class="card-body d-flex justify-content-center ">
        <div class="card-title">
          <a href="bmr_form.php" class="text-decoration-none">Cek BMR</a>
        </div>
      </div>
   </div>

   <div class="card" style="width: 10rem; border: none; background-color: #f4f6ff">
      <div class="card-body d-flex justify-content-center">
        <div class="card-title">
          <a href="#" class="text-decoration-none">Daftar Makanan</a>
        </div>
      </div>
   </div>

  </div>
  </div>
 
</body>
</html>