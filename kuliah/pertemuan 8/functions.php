<?php 

function Koneksi(){
  return mysqli_connect('localhost', 'root', '', 'pabw_A22100134');
}

function query($query){
  $conn = Koneksi();
  $result = mysqli_query($conn, $query);

  //Jika HasilnyaHanya 1 Data
  if(mysqli_num_rows($result) == 1){
    return mysqli_fetch_assoc($result);
  }

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)){
    $rows[] = $row;
  }
  return $rows;
}
?>