<?php

require 'koneksi.php';

if (isset($_POST['tambah'])) {
  if (tambahd($_POST) > 0) {
    echo
    "<script>
    alert('data berhasil ditambah');
    document.location.href = 'index.php';
    </script>";
  } else {
    echo
    "<script>
    alert('data gagal ditambah');
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

  <!-- Bootstrap icon -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">

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

  <!-- konten -->
  <section class="konten">
    <div class="container">
      <h3><i class="fas fa-users"></i> Input data Barang </h3>
      <hr>

      <form method="POST" action="">
        <div class="form-group">
          <label for="nama">Nama Barang : </label>
          <input type="text" class="form-control" id="nama" placeholder="nama barang" name="nama_barang" autofocus required autocomplete="off">
        </div>
        <div class="form-group">
          <label for="Stok">Stok : </label>
          <input type="text" class="form-control" id="Stok" placeholder="stokk" name="stok" required autocomplete="off">
        </div>
        <div class="form-group">
          <label for="Harga">Harga : </label>
          <input type="text" class="form-control" id="Harga" placeholder="harga" name="harga" required autocomplete="off">
        </div>
        <div class="form-group">
          <label for="Foto">Foto : </label>
          <input type="text" class="form-control" id="Foto" placeholder="Foto anda" name="foto" required autocomplete="off">
        </div>
        <br>
        <button type="submit" class="btn btn-primary" name="tambah">Simpan</button>
      </form>


    </div>
    </div>
  </section>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#0d6efd" fill-opacity="1" d="M0,192L26.7,202.7C53.3,213,107,235,160,218.7C213.3,203,267,149,320,144C373.3,139,427,181,480,192C533.3,203,587,181,640,176C693.3,171,747,181,800,186.7C853.3,192,907,192,960,181.3C1013.3,171,1067,149,1120,154.7C1173.3,160,1227,192,1280,181.3C1333.3,171,1387,117,1413,90.7L1440,64L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"></path>
  </svg>
  <!-- footer -->
  <footer class="bg-primary text-white text-center pb-5">
    <p>Created with <i class="bi bi-heart-fill text-danger"></i> by <a href="https://www.instagram.com/imamsetya_312/" class="text-white fw-bold">Imam Setya Wardana</a></p>
  </footer>
</body>

</html>