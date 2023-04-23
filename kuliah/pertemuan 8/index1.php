<?php

//Koneksi Ke Database Dan Pilih Database
$conn = mysqli_connect('localhost', 'root', '', 'pabw_A22100134');

//Query Isi Tabel Mahasiswa
$result = mysqli_query($conn, "SELECT  *FROM mahasiswa");

//Ubah Data Ke Dalam Array
//$row = mysqli_fetch_row($result); // Array Numerik
//$row = mysqli_fetch_assoc($result); // Array Associative
//$row = mysqli_fetch_array($result); // Keduanya

$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
}

//Tampung Ke Variabel Mahasiswa
$mahasiswa = $rows;

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
  <style>
    body {
      background-image: url(img/bgindex.jpg);
      background-size: cover;
      text-align: center;
    }
  </style>
</head>

<body>
  <h3>DAFTAR MAHASISWA</h3>
  <table border="1" cellpadding="10" cellspacing="0" style="margin: 0 auto;">
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>NIM</th>
      <th>Email</th>
      <th>Prodi</th>
      <th>Gambar</th>
      <th>Aksi</th>
    </tr>

    <?php $no = 1;
    foreach ($mahasiswa as $mhs) : ?>
      <tr>
        <td><?= $no++; ?></td>
        <td><?= $mhs['nama']; ?></td>
        <td><?= $mhs['nim']; ?></td>
        <td><?= $mhs['email']; ?></td>
        <td><?= $mhs['prodi']; ?></td>
        <td>
          <img src="img/<?= $mhs['gambar']; ?>" width="70px" height="70px">
        </td>
        <td>
          <a href="">Ubah</a> | <a href="">Hapus</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>

</body>

</html>