<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .box{
            height: 262px;
            width: 1110; 
        }
    </style>
</head>
<body style="background:WHITE">
    <div class="container mt-5">
    <h1 class="text-black">selamat datang</h1>
    <h4 class="text-black">admin</h4>
    <div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-pills card-header-pills">
      <li class="nav-item">
        <a class="nav-link text-dark" href="home.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="tang.php">Tanggapan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="logout.php">logout</a>
      </li>
  </div>
</div>
</div>
</body>
</html>