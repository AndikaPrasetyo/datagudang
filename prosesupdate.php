<?php
include 'koneksi.php';
$kodebaranglama=$_GET['kodebarang'];
$kodebarang=$_POST['kodebarang'];
$namabarang=$_POST['namabarang'];
$stokbarang=$_POST['stokbarang'];
$hargabarangsatuan=$_POST['hargabarangsatuan'];

$query=mysqli_query($koneksi, "UPDATE gudang SET kodebarang='$kodebarang', namabarang='$namabarang', stokbarang='$stokbarang',
hargabarangsatuan='$hargabarangsatuan' WHERE kodebarang='$kodebaranglama' ") or die(mysqli_error($koneksi));

echo '<script language="javascript" type="text/javascript">
alert("Data barang berhasil diupdate.");</script>';
echo "<meta http-equiv='refresh' content='2; url=index.php'>";
?>
