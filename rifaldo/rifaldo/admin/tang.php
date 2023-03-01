<?php

session_start();
$db = mysqli_connect("localhost","root","","pengaduanmasyarakat");

$result = mysqli_query($db, "SELECT * FROM pengaduan");


// var_dump($result);
?>
<!DOCTYPE html>
<html lang="en">
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<head>

    <title>admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body style="background:grey;">
    <div class="container mt-5">
    <h1 class="text-black">masyarakat</h1>
    <div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-pills card-header-pills">
      <li class="nav-item">
        <a class="nav-link text-dark" href="pengaduan.php">lihat pengaduan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="isi_laporan.php">isi laporan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="logout.php">logout</a>
      </li>
    </ul>
  </div>
</div>
<div class="container">
    <div class="card my-4 mt-3">
    <div class="d-grip gap-2 col-12 mt-2">
    <table class="table table-light table-hover table-borderless">
  <thead>
    <tr style="text-align:center;">
      <th scope="col">No</th>
      <th scope="col">id_pengaduan</th>
      <th scope="col">tgl_pengaduan</th>
      <th scope="col">nik</th>
      <th scope="col">isi_laporan</th>
      <th scope="col">foto</th>
      <th scope="col">status</th>
    </tr>
  </thead>
  <?php $i=1;?>
  <?php while($row = mysqli_fetch_assoc($result)):?>
  <tbody>
    <tr class="text-center">
      <th scope="row"><?= $i ?></th>
      <td><?=$row['id_pengaduan'];?></td>
      <td><?=$row['tgl_pengaduan'];?></td>
      <td><?=$row['nik'];?></td>
      <td><?=$row['isi_laporan'];?></td>
      <td><img src="img/<?=$row['foto']; ?>" width="100" height="100" style="border-radius: 10px;" /></td>
      <td><?=$row['status'];?>
    </td>
    <?php endwhile ?>
    <h1>Tanggapan</h1>
    <div class ="">
    </div>
    <div class="col">
    </div>
    <form action="pengaduan.php" method="POST">
            <hr class="divider">
            <div class="container">
            </div>
                
            <div class="row">
            </div>
                <div class="col mt-3">
              </div>
                <?php
                    echo $_SESSION ["username"];
                    ?>
                    <div class="mb-3">
                        Tanggal : <input type="date" name="tgl_pengaduan" class="form-control" >
                    </div>
                <div class="mb-3 mt-3">
                        Tanggapan : <textarea type="text" name="tanggapan" class="form-control"></textarea>
                </div>
                <div class="col">
                    <div class="mb-3">
                        Status : 
                        <select name="status">
                            <option class="selected" value="Proses">Proses</option>
                            <option value="Selesai">Selesai</option>
                        </select>

                </div>
                <div class="mb-3 mt-3 text-end" >
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="hadmin.php" class="btn btn-danger">Kembali</a>
            </div>
    </tbody>
    <?php $i++; ?>
    </table>
</body>
</html>