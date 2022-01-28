<?php 
// koneksi database
include 'koneksi.php';
 

$nama = $_POST['nama'];
$kodepos = $_POST['kodepos'];
$alamat = $_POST['alamat'];
 if (!empty($nama) || !empty($kodepos) || !empty($alamat)) {
// menginput data ke database
mysqli_query($koneksi,"insert into alamat values('','$nama','$kodepos','$alamat')");
 }
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>