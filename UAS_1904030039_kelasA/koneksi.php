<?php
$conn = mysqli_connect('localhost', 'root', '', 'imamsetyawardanauas_1904030039');

// pemanggilan tabel
function query($query)
{
  global $conn;

  // mengambil seluruh data pada tabel
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  // pemanggilan elemen data dengan rapih
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function hapus($id)
{
  global $conn;
  mysqli_query($conn, "DELETE FROM barang WHERE id =$id") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function edit($data)
{
  global $conn;

  $id = $data['id'];
  $nama = htmlspecialchars($data['nama_barang']);
  $stok = htmlspecialchars($data['stok']);
  $harga = htmlspecialchars($data['harga']);
  $foto_ = htmlspecialchars($data['foto']);

  $query = "UPDATE barang SET 
  nama_barang = '$nama',
  stok = '$stok',
  harga = '$harga',
  foto = '$foto_'
  WHERE id = $id; ";

  mysqli_query($conn, $query);

  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

function cari($keyword)
{
  global $conn;

  $query = "SELECT * FROM barang WHERE nama_barang LIKE '%$keyword%'";
  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function tambah($data)
{
  global $conn;

  $email = htmlspecialchars($data['email']);
  $komen = htmlspecialchars($data['komentar']);

  $query = "INSERT INTO komen
VALUES
(null,'$email','$komen');";
  mysqli_query($conn, $query);

  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

function tambahd($data)
{
  global $conn;

  $nama = htmlspecialchars($data['nama_barang']);
  $stok_barang = htmlspecialchars($data['stok']);
  $harga_barang = htmlspecialchars($data['harga']);
  $foto_barang = htmlspecialchars($data['foto']);

  $query = "INSERT INTO barang
VALUES
(null,'$nama','$foto_barang','$stok_barang','$harga_barang');";
  mysqli_query($conn, $query);

  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}
