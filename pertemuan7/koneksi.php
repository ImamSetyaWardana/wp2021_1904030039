<?php 

$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'wpsmt5';

$con = mysqli_connect($host, $user, $pass, $db);

$reslut = mysqli_query($con, 'SELECT * FROM calon_mhs');

//ambil data dari tabel calon mhs
//mysqli_fetch_row(); mengembalikan data dalam bentuk numerik
//mysqli_fetch_assoc(); mengembalikan data dalam nama field
//mysqli_fetch_array(); mengembalikan data dalam bentuk numerik dan field

//while ($camaba = mysqli_fetch_array($reslut)){
//var_dump($camaba);
//}
 ?>