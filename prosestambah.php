<?php
include 'koneksi.php';

$kodebarang=$_POST['kodebarang'];
$namabarang=$_POST['namabarang'];
$stokbarang=$_POST['stokbarang'];
$hargabarangsatuan=$_POST['hargabarangsatuan'];

$query=mysqli_query($koneksi,"INSERT INTO gudang(kodebarang, namabarang, stokbarang, hargabarangsatuan)
VALUES ('$kodebarang', '$namabarang', '$stokbarang', '$hargabarangsatuan')") or die(mysqli_error($koneksi));
echo '<script language="javascript" type="text/javascript">
alert("Data barang berhasil ditambahkan.");</script>';
echo "<meta http-equiv='refresh' content='2; url=index.php'>";
?>
