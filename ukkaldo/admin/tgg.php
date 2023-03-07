<?php

session_start();


$idpeng = $_GET['id_pengaduan'];
$tgl = $_POST['tgl_pengaduan'];
$tggpn = $_POST['tanggapan'];
$idpet = $_SESSION['id_petugas'];

// echo $idpeng;
// die();
$id = rand(1,10000);
$db = new PDO("mysql:host=localhost;dbname=pengaduan_masyarakat","root","");
$data =$db->query("SELECT * FROM `pengaduan` WHERE id_pengaduan='$idpeng'")->fetch();
$query = $db->query("INSERT INTO `tanggapan`(`id_tanggapan`, `id_pengaduan`, `tgl_pengaduan`, `tanggapan`, `id_petugas`) VALUES ($id,'$idpeng','$tgl','$tggpn','$idpet')");

if($data['status'] == '0'){
    $status = $db->query("UPDATE `pengaduan` SET `status`= 'proses' WHERE id_pengaduan = '$idpeng'");
     header ("location:home.php");
}elseif($data['status'] == 'proses'){
    $status = $db->query("UPDATE `pengaduan` SET `status`= 'selesai' WHERE id_pengaduan = '$idpeng'");
     header ("location:home.php");
}