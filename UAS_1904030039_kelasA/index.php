<?php

require 'koneksi.php';
$dbarang = query("SELECT * FROM barang");

if (isset($_POST['cari'])) {
  $dbarang = cari($_POST['keyword']);
}

if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
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

<body id="home">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Setya Water</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#data">Stok Barang</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#komen">Komentar</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Jumbotron -->
  <section class="jumbotron text-center">
    <img src="image/logo.jpeg" alt="Setya Water" width="250" class="rounded-circle img-thumbnail">
    <h1 class="display-4">SETYA WATER</h1>
    <p class="lead">Perum surya mustika suka asih Jln. Surya 6 blok c12 Rt 02/06 kel.suka asih kec.pasar kemis</p>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#fff" fill-opacity="100" d="M0,224L40,224C80,224,160,224,240,197.3C320,171,400,117,480,101.3C560,85,640,107,720,122.7C800,139,880,149,960,133.3C1040,117,1120,75,1200,64C1280,53,1360,75,1400,85.3L1440,96L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
    </svg>
  </section>

  <!-- about -->
  <section id="about">
    <div class="container">
      <div class="row text-center mb-4">
        <div class="col">
          <h2>About</h2>
        </div>
      </div>
      <div class="row justify-content-center fs-5 text-justify">
        <div class="col-6">
          <p>Distribusi minuman merupakan fokus utama kami.

            Sejak tahun 2003, Setya water telah membangun kepercayaan dengan para supplier dan customer. Keberhasilan Setya water dimulai dengan kerja keras dan dedikasi untuk menciptakan perusahaan yang menawarkan bantuan distribusi kepada para pelanggan, dengan tetap memberikan pelayanan terbaik.

            Kami telah bermitra dengan berbagai produsen minuman terbaik untuk menawarkan produk yang berkualitas tinggi kepada para pelanggan. Berkantor pusat di Tangerang, Setya water telah memperluas jangkauan dan beroperasi di Bandar Lampung.</p>
        </div>
        <div class="col-6">
          <p>Sudah beroperasi lebih dari 15 tahun, Setya water telah dipercaya oleh ratusan pelanggan di Indonesia. Kami telah dipercaya untuk mendistribusikan berbagai produk dari banyak perusahaan terkemuka. Beberapa diantaranya adalah PT Dolphin Food & Beverages, PT Gumindo Bogamanis, dan PT Makmur Artha Sejahtera. Dengan menawarkan barang yang berkualitas dengan harga yang bersaing di pasar, Setya water berdedikasi untuk selalu memberikan pelayanan yang terbaik kepada para pelanggan. Selain itu, Setya water juga dipercaya sebagai penyuplai produk-produk makanan dan minuman di berbagai minimarket terkemuka. Beberapa diantaranya adalah Alfamart, Indomaret, dan Indogrosir. Tidak hanya itu, Setya water juga melayani sektor ritel untuk perdagangan tradisional.</p>
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#e2edff" fill-opacity="1" d="M0,256L30,250.7C60,245,120,235,180,218.7C240,203,300,181,360,149.3C420,117,480,75,540,90.7C600,107,660,181,720,213.3C780,245,840,235,900,218.7C960,203,1020,181,1080,154.7C1140,128,1200,96,1260,90.7C1320,85,1380,107,1410,117.3L1440,128L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path>
    </svg>
  </section>

  <!-- data -->
  <section id="data">
    <div class="container">
      <div class="row text-center mb-3">
        <div class="col">
          <h2>Data Barang</h2>
        </div>
      </div>
      <form action="" method="POST">
        <input type="text" id="keyword" size="50" name="keyword" placeholder="masukkan keyword" autocomplete="off">
        <button type="submit" class="btn btn-primary" name="cari"> Cari </button>
        <a href="index.php" class="btn btn-danger" role="button">Kembali</a>
        <a href="tambah.php" class="btn btn-warning" role="button">Tambah</a>
      </form>

      <br>
      <hr>

      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">Stok</th>
            <th scope="col">Harga</th>
            <th scope="col">Foto</th>
            <th scope="col">Opsi</th>
          </tr>
        </thead>
        <?php if (empty($dbarang)) : ?>
          <tr>
            <td colspan="4" class="alert alert-danger text-center" role="alert">
              <p><b>Mahasiswa tidak ditemukan</b></p>
            </td>
          </tr>
        <?php endif; ?>
        <tbody>
          <?php $no = 1; ?>
          <?php foreach ($dbarang as $brg) : ?>
            <tr>
              <th scope="row"><?php echo $no ?></th>
              <td><?php echo $brg['nama_barang']; ?></td>
              <td><?php echo $brg['stok']; ?></td>
              <td><?php echo $brg['harga']; ?></td>
              <td><img src="image/<?php echo $brg['foto']; ?>" width="100px"></td>
              <td>
                <li">
                  <a href="edit.php?id=<?= $brg['id'];  ?>" class="btn btn-warning" role="button">Edit</a> |
                  <a href="hapus.php?id=<?= $brg['id'];  ?>" onclick="return confirm('apakah anda ingin menghapus data ini');" class="btn btn-danger" role="button">Hapus</a>
                  </li>
              </td>
            </tr>
            <?php $no++ ?>
          <?php endforeach ?>
        </tbody>
      </table>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#fff" fill-opacity="1" d="M0,96L48,85.3C96,75,192,53,288,53.3C384,53,480,75,576,117.3C672,160,768,224,864,213.3C960,203,1056,117,1152,96C1248,75,1344,117,1392,138.7L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>
  </section>

  <!-- komentar pelanggan -->
  <section id="komen">
    <div class="container">
      <div class="row text-center mb-3">
        <div class="col">
          <h2>Kritik Dan Saran</h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-6">
          <form method="POST" action="">
            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input type="text" class="form-control" id="email" placeholder="name@example.com" name="email">
            </div>
            <div class="mb-3">
              <label for="komen" class="form-label">Tulis komentar</label>
              <textarea class="form-control" id="komen" rows="3" placeholder="Tulis Komentar" name="komentar"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" name="tambah">Simpan</button>
          </form>
        </div>
      </div>
    </div>
  </section>
  <br>
  <!-- preview komen -->
  <div class="prev-comments">
    <?php

    $sql = "SELECT * FROM komen";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {

    ?>
        <div class="single-item">
          <table border="1" width="650px" align="center" cellpadding="5">
            <tr>
              <td>
                <h6><?php echo $row['email']; ?></h6>
                <p>"<?php echo $row['komentar']; ?>"</p>
              </td>
            </tr>
          </table>
        </div>
    <?php

      }
    }

    ?>
  </div>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#0d6efd" fill-opacity="1" d="M0,192L26.7,202.7C53.3,213,107,235,160,218.7C213.3,203,267,149,320,144C373.3,139,427,181,480,192C533.3,203,587,181,640,176C693.3,171,747,181,800,186.7C853.3,192,907,192,960,181.3C1013.3,171,1067,149,1120,154.7C1173.3,160,1227,192,1280,181.3C1333.3,171,1387,117,1413,90.7L1440,64L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"></path>
  </svg>
  <!-- footer -->
  <footer class="bg-primary text-white text-center pb-5">
    <p>Created with <i class="bi bi-heart-fill text-danger"></i> by <a href="https://www.instagram.com/imamsetya_312/" class="text-white fw-bold">Imam Setya Wardana</a></p>
  </footer>
</body>

</html>