<?php
include 'koneksi.php';

$nama = $_POST['Fnama'];
$jumlah = $_POST['Fjumlah'];

mysqli_query($koneksi,"INSERT INTO barang (`nama`, `jumlah`) VALUES ('$nama','$jumlah')");
header("location:index.php");
