<?php
include 'koneksi.php';
$kodebarang=$_GET['kodebarang'];

$query=mysqli_query($koneksi, "DELETE FROM gudang WHERE kodebarang='$kodebarang' ")
or die(mysqli_error($koneksi));
echo '<script language="javascript" type="text/javascript">
alert("Data barang berhasil di hapus.");</script>';
echo "<meta http-equiv='refresh' content='2; url=index.php'>";
?>
