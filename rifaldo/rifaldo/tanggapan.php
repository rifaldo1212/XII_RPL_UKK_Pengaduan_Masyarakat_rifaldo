<?php

session_start();
$db = mysqli_connect("localhost","root","","pengaduanmasyarakat");

$result = mysqli_query($db, "SELECT * FROM masyarakat");


// var_dump($result);
?>
<!DOCTYPE html>
<html lang="en">
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<head>

    <title>masyarakat</title>
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
        <a class="nav-link text-dark" href="tanggapan.php">tanggapan</a>
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
      <th scope="col">id_tanggapan</th>
      <th scope="col">id_pengaduan</th>
      <th scope="col">tgl_pengaduan</th>
      <th scope="col">tanggapan</th>
      <th scope="col">id_petugas</th>
    </tr>
  </thead>
  <?php $i=1;?>
  <?php while($row = mysqli_fetch_assoc($result)):?>
  <tbody>
    <tr class="text-center">
      <th scope="row"><?= $i ?></th>
      <td><?=$row['id_tanggapan'];?></td>
      <td><?=$row['id_pengaduan'];?></td>
      <td><?=$row['tgl_pengaduan'];?></td>
      <td><?=$row['tanggapan'];?></td>
      <td><?=$row['id_petugas'];?></td>
      <td>
        <a href="update.php?id_tanggapan=<?=$row['id_tanggapan'];?>" class="btn btn-sm btn-success ml-auto">Update</a>
        <a href="delete.php?id_tanggapan=<?=$row['id_tanggapan'];?>" class="btn btn-sm btn-danger ml-auto">delete</a>
        <a href="detail.php?id_tanggapan=<?=$row['id_tanggapan'];?>" class="btn btn-sm btn-danger ml-auto">detail</a>
      </td>
    </tbody>
    <?php $i++; ?>
    <?php endwhile ?>
    </table>
    </div>
    </div>
</body>
</html>