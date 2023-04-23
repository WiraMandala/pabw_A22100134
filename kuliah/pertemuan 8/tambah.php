<?php

require 'functions.php';

//Apakah Tombol Tambah Sudah Ditekan
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
            alert('Berhasil Menambahkan Data !!!');
            document.location.href = 'index3.php';
          </script>";
  } else {
    echo "Gagal Menambahkan Data !!!";
  }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data</title>
  <style>
    body {
      font-family: Georgia, 'Times New Roman', Times, serif;
      background-image: url(img/bgindex.jpg);
      background-size: cover;
    }

    input[type="text"] {
      display: block;
      margin: 0 auto;
    }

    ul {
      list-style: none;
      text-align: center;
    }
  </style>
</head>

<body>
  <form action="" method="POST">
    <ul>
      <li>
        <label>
          Nama :
          <input type="text" name="nama" autofocus required>
        </label>
      </li>
      <li>
        <label>
          NIM :
          <input type="text" name="nim" required>
        </label>
      </li>
      <li>
        <label>
          Email :
          <input type="text" name="email" required>
        </label>
      </li>
      <li>
        <label>
          Prodi :
          <input type="text" name="prodi" required>
        </label>
      </li>
      <li>
        <label>
          Gambar :
          <input type="text" name="gambar" required>
        </label><br><br>
      <li>
        <button type="submit" name="tambah">Tambah</button>
      </li>
    </ul>
  </form>
</body>

</html>