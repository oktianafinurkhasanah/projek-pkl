<?php
include "koneksi.php";
$no = $_GET['no'];
$sql = "DELETE FROM barang WHERE no = '$no'";
$query = mysqli_query($koneksi, $sql);

if ($query){
    header("location:index.php?hapus=sukses");
}else{
    header("location:index.php?hapus=gagal"); 
}

?>