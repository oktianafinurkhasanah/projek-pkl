<?php
include "koneksi.php";
$nama = $_GET['nama'];
$harga = $_GET['harga'];
$stok = $_GET['stok'];
$sql = "INSERT INTO barang (nama,harga,stok) VALUES
('$nama','$harga','$stok') ";
$query = mysqli_query($koneksi, $sql);

if ($query) {
    header("location:index.php?simpan=sukses");
 } else {
    header("location:index.php?simpan=gagal");
 }

?>
