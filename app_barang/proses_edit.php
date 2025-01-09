<?php
include "koneksi.php";
$no = $_GET['no'];
$nama = $_GET['nama'];
$harga = $_GET['harga'];
$stok = $_GET['stok'];

$sql = "UPDATE barang SET nama = '$nama', harga = '$harga',
stok = '$stok' WHERE no = '$no' ";
$query = mysqli_query($koneksi, $sql);

if ($query){
    header("location:index.php?edit=sukses");
}else{
    header("location:index.php?edit=gagal");
}

?>