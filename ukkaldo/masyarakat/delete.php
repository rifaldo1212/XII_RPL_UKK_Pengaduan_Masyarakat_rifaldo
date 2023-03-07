<?php

session_start();

$id_pengaduan = $_GET['id_pengaduan'];

$db = new PDO("mysql:host=localhost;dbname=pengaduan_masyarakat",'root','');
$query = $db->query("DELETE FROM `pengaduan` WHERE `id_pengaduan`= '$id_pengaduan'");

if($query)
{
    header("location:pengaduan.php");
}