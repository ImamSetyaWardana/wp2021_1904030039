<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 4</title>
</head>

<body>
    <h1>Membuat Array</h1>
    <?php
    $nilai = array(2, 4, 6, 8, 10.60);
    var_dump($nilai);
    echo "<br>";
    echo ($nilai[4]);
    echo "<br>";
    $elektronik = ["handphone", "laptop", "komputer", "televisi"];
    var_dump($elektronik);
    echo "<br>";
    echo "$elektronik[1]";
    echo "<br>";

    // mengganti isi value
    echo "<br>";
    $elektronik[0] = "kulkas";
    var_dump($elektronik);
    echo "<br>";

    // menambahkan value
    echo "<br>";
    $elektronik[] = "headset";
    var_dump($elektronik);
    echo "<br>";

    // menghapus salah satu value
    echo "<br>";
    unset($elektronik[0]);
    var_dump($elektronik);
    echo "<br>";

    //menghitung total array
    echo "<br>";
    var_dump(count($elektronik));
    ?>
    <hr>
    <h1> Map Dengan Array</h1>
    <?php

    $eko = array(
        "ID" => "Agus",
        "Nama" => "Agus Rianto",
        "Umur" => 28
    );
    var_dump($eko);
    echo "<br>";
    $amelia = [
        "ID" => "lia",
        "Nama" => "amelia Putri",
        "Umur" => 22,
        "Alamat" => [
            "Kota" => "Tangerang",
            "Provinsi" => "Banten"
        ]
    ];
    var_dump($amelia);
    echo "<br>";
    echo ("Nama ID :" . $amelia["ID"]);
    echo "<br>";
    echo ("Nama Lengkap :" . $amelia["Nama"]);
    echo "<br>";
    echo ("Umur :" . $amelia["Umur"]);

    ?>
    <hr>
    <h1> Operator Aritmatika</h1>
    <?php
    $tambah = 40 + 10;
    $kurang = 20 - 5;
    $kali = 25 * 60;
    $bagi = 100 / 25;
    $modular = 250 % 6;
    $pangkat = 5 ** 5;

    echo "Tambah : " . $tambah . "<br>";
    echo "Kurang : " . $kurang . "<br>";
    echo "Kali : " . $kali . "<br>";
    echo "Bagi : " . $bagi . "<br>";
    echo "Modular : " . $modular . "<br>";
    echo "Pangkat : " . $pangkat . "<br>";


    ?>
    <hr>
    <h1> Increment </h1>
    <?php
    $f = 23;
    $f++;
    $f--;

    echo ($f);


    ?>
    <hr>
    <h1> Menampilkan Isi Array Dengan Perulangan </h1>
    <?php
    $makanan = ["Bakso", "Nasi Goreng", "Donat", "Ayam Goreng", "Nasi Padang"];

    for ($i = 0; $i < count($makanan); $i++) {
        echo $makanan[$i] . "<br>";
    }
    echo "<br>";
    $minuman = ["Kopi", "Es Kelapa Muda", "Es Teh", "Susu"];

    foreach ($minuman as $minuman) {
        echo $minuman . "<br>";
    }
    ?>
    <hr>
    <h1> Array Asosiatif </h1>
    <?php
    // membuat array asosiatif
    $biodata = [
        "Nama" => "Imam Setya Wardana",
        "Umur" => "21 Tahun",
        "Alamat" => "Smk Iqro Kab Tangerang",
        "TTL" => "tangerang, 31-12-2000",
    ];

    //mencetak isi array asosiatif
    echo "<h2>Biodata</h2>";
    echo "<p>Nama: " . $biodata["Nama"] . "</br>";
    echo "<p>Umur: " . $biodata["Umur"] . "</br>";
    echo "<p>Alamat: " . $biodata["Alamat"] . "</br>";
    echo "<p>TTL: " . $biodata["TTL"] . "</br>";
    ?>
    <hr>
    <h1> Array Multi Dimensi </h1>
    <?php
    // membuat array 2 dimensi yang berisi array asosiatif
    $sahabat = [
        [
            "Nama" => "Rio rizaldi",
            "Umur" => "22 Tahun"
        ],
        [
            "Nama" => "putri",
            "Umur" => "20 Tahun"
        ],
        [
            "Nama" => "Farhan fajar",
            "Umur" => "23 Tahun"
        ],
        [
            "Nama" => "Vina",
            "Umur" => "25 Tahun"
        ],

    ];
    echo "<br>";

    // menampilkan array
    foreach ($sahabat as $sahabat) {
        echo "<h2>" . $sahabat["Nama"] . "</h2>";
        echo "<p>" . $sahabat["Umur"] . "</p>";
        echo "<hr>";
    }

    ?>
</body>

</html>