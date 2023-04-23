<?php

function Koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'pabw_A22100134');
}

function query($query)
{
  $conn = Koneksi();
  $result = mysqli_query($conn, $query);

  //Jika HasilnyaHanya 1 Data
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function tambah($data)
{
  $conn = Koneksi();

  $nama = htmlspecialchars($data['nama']);
  $nim = htmlspecialchars($data['nim']);
  $email = htmlspecialchars($data['email']);
  $prodi = htmlspecialchars($data['prodi']);
  $gambar = htmlspecialchars($data['gambar']);

  $query = "INSERT INTO
              mahasiswa
            VALUES
            (null, '$nama', '$nim', '$email', '$prodi', '$gambar');
            ";

  mysqli_query($conn, $query);
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}
