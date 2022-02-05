<?php

require 'koneksi.php';

$id = $_GET['id'];
$dbarang = query("SELECT * FROM barang WHERE id = $id");
//var_dump($camaba['nama']);

if (isset($_POST['edit'])) {
  if (edit($_POST) > 0) {
    echo
    "<script>
    alert('data berhasil di edit');
    document.location.href = 'index.php';
    </script>";
  } else {
    echo
    "<script>
    alert('data gagal di edit');
    </script>";
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="tema/bootstrap/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="tema/fontawesome/css/all.min.css">

  <!-- my css -->
  <link rel="stylesheet" href="style.css" />

  <title>Setya Water</title>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
    <div class="container">
      <a class="navbar-brand" href="#">Setya Water</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Kembali</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Jumbotron -->
  <section class="jumbotron text-center">
    <div class="container">
      <h3><i class="fas fa-users"></i> Edit data Barang </h3>
      <hr>

      <form method="POST" action="">

        <input type="hidden" class="form-control" value="<?= $dbarang['id'] ?>" name="id">

        <div class="form-group">
          <label for="nama_barang">Nama : </label>
          <input type="text" class="form-control" id="nama_barang" value="<?= $dbarang['nama_barang'] ?>" placeholder="input barang" name="nama_barang" autofocus required autocomplete="off">
        </div>
        <div class="form-group">
          <label for="stok">Stok : </label>
          <input type="text" class="form-control" id="stok" value="<?= $dbarang['stok'] ?>" placeholder="input stok" name="stok" required autocomplete="off">
        </div>
        <div class="form-group">
          <label for="harga">Harga : </label>
          <input type="text" class="form-control" id="harga" value="<?= $dbarang['harga'] ?>" placeholder="input harga" name="harga" required autocomplete="off">
        </div>
        <div class="form-group">
          <label for="foto">foto : </label>
          <input type="text" class="form-control" id="foto" value="<?= $dbarang['foto'] ?>" placeholder="input foto" name="foto" required autocomplete="off">
        </div>
        <br>
        <button type="submit" class="btn btn-primary" name="edit">Simpan</button>
        <a href="index.php" class="btn btn-primary" role="button">Kembali</a>
      </form>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#fff" fill-opacity="100" d="M0,224L40,224C80,224,160,224,240,197.3C320,171,400,117,480,101.3C560,85,640,107,720,122.7C800,139,880,149,960,133.3C1040,117,1120,75,1200,64C1280,53,1360,75,1400,85.3L1440,96L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
    </svg>
  </section>
</body>

</html>