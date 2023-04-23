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
  <style>
    body {
      font-family: Georgia, 'Times New Roman', Times, serif;
      background-image: url(img/bgindex.jpg);
      background-size: cover;
      text-align: center;
    }

    ul a {
      list-style: none;
      text-align: center;
    }

    .detail {
      margin: auto;
      width: 25%;
    }

    li {
      text-align: justify;
    }
  </style>
</head>

<body>
  <div class="detail">
    <ul>
      <img src="img/<?= $mhs['gambar']; ?>" height="200px"><br><br>
      <li>Nama : <?= $mhs['nama']; ?></li>
      <li>NIM : <?= $mhs['nim']; ?></li>
      <li>Email : <?= $mhs['email']; ?></li>
      <li>Prodi : <?= $mhs['prodi']; ?></li><br>
      <a href="">Ubah</a> | <a href="">Hapus</a><br>
      <a href="index3.php">Kembali</a>
    </ul>
  </div>
</body>

</html>