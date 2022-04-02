<?php
session_start();

include 'koneksi.php';

$email=$_POST['email'];
$password=$_POST['password'];

$query=mysqli_query($koneksi,"INSERT INTO users(email, password)
VALUES ('$email', '$password')") or die(mysqli_error($koneksi));
if ($query){
	$_SESSION['alert'] = "Registrasi Telah Berhasil.";
	header("Location:index.php", true, 301);
}else{
	echo"Gagal Input Data";
}
?>
