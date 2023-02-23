<?php

session_start();
//variable
$tgl_pengaduan = $_POST['tgl_pengaduan'];
$isi_laporan= $_POST['isi_laporan'];
$foto = $_FILES['foto']['name'];
$status = '0';
$nik = '012';
$id_pengaduan = rand(1,100000);

//koneksi
$koneksi = new PDO("mysql:host=localhost;dbname=pengaduan_masyarakat",'root','');
$query = $koneksi->query("INSERT INTO `pengaduan` VALUES ('$id_pengaduan','$tgl_pengaduan','$nik','$isi_laporan','$foto','$status')");
 
if($query){
header ("location:pengaduan.php");
}