<?php
include "koneksi.php";
$sql = "SELECT * FROM barang";
$query = mysqli_query($koneksi, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"><title>Data Barang</title>
</head>
<body>
<h1>Data Barang</h1>
<a href="tambah.php"><button>Tambah</button></a><br><br>
<table border="1">
<tr>
   <th>No</th>
   <th>Nama</th>
   <th>Harga</th>
   <th>Stok</th>
   <th>Aksi</th>
</tr>
<?php while($barang = mysqli_fetch_assoc($query)) { ?>
<tr>
<td><?= $barang['no'] ?></td>
<td><?= $barang['nama'] ?></td>
<td><?= $barang['harga'] ?></td>
<td><?= $barang['stok'] ?></td>
<td>
<a href="edit.php?no=<?= $barang['no'] ?>">Edit</a> |
<a href="hapus.php?no=<?= $barang['no'] ?>">Hapus</a>
</td>
</tr>
<?php } ?>
</table>
</body>
</html>