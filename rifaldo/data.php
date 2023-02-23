<?php

session_start();
$db = mysqli_connect("localhost","root","","pengaduan_masyarakat");

$result = mysqli_query($db, "SELECT * FROM masyarakat");


// var_dump($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title>data petugas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body style="background:grey;">
    <div class="container mt-5">
    <h1 class="text-white">Pengaduan Masyarakat</h1>
    <h4 class="text-white">Laporan Pengaduan</h4>
    <div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-pills card-header-pills">
      <li class="nav-item">
        <a class="nav-link text-dark" href="data petugas.php">data petugas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="data masyrakat.php">data masyarakat</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="tanggapan.php">tanggapan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="isi tanggapan.php">isi tanggapan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="pengaduan.php">pengaduan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="logout.php">logout</a>
      </li>
    </ul>
  </div>
</div>
 </from>
        </div>
      </div>
</div>
<div class="container">
    <div class="card my-4 mt-3">
    <div class="d-grip gap-2 col-12 mt-2">
    <table class="table table-light table-hover table-borderless">
  <thead>
    <tr style="text-align:center;">
      <th scope="col">No</th>
      <th scope="col">id_petugas</th>
      <th scope="col">nama_petugas</th>
      <th scope="col">username</th>
      <th scope="col">pssword</th>
      <th scope="col">telp</th>
      <th scope="col">level</th>
      <th scope="col">up/de</th>
    </tr>
  </thead>
  <?php $i=1;?>
  <?php while($row = mysqli_fetch_assoc($result)):?>
  <tbody>
    <tr class="text-center">
      <th scope="row"><?= $i ?></th>
      <td><?=$row['id_petugas'];?></td>
      <td><?=$row['nama_petugas'];?></td>
      <td><?=$row['username'];?></td>
      <td><?=$row['password'];?></td>
      <td><?=$row['telp'];?></td>
      <td><?=$row['level'];?></td>
      <td><a href="update.php?nik=<?=$row['nik'];?>" class="btn btn-sm btn-success ml-auto">Update</a>
      <a href="delete.php?nik=<?=$row['nik'];?>" class="btn btn-sm btn-danger ml-auto">delete</a></td>
    </tr>
    </tbody>
    <?php $i++; ?>
    <?php endwhile ?>
    </table>
    </div>
    </div>
</body>
</html>