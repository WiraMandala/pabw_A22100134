<?php

require 'functions.php';

//Ambil id Dari Url
$id = $_GET['id'];

//Mahasiswa Berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Mahasiswa</title>
</head>

<body>
  <h3>Detail Mahasiswa</h3>
  <ul>
    <img src="img/<?= $mhs['gambar']; ?>" height="100px">
    <li>Nama : <?= $mhs['nama']; ?></li>
    <li>NIM : <?= $mhs['nim']; ?></li>
    <li>Email : <?= $mhs['email']; ?></li>
    <li>Prodi : <?= $mhs['prodi']; ?></li>
    <a href="">Ubah</a> | <a href="">Hapus</a><br>
    <a href="index3.php">Kembali</a>
  </ul>
</body>

</html>