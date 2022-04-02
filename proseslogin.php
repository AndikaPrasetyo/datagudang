<?php
session_start();
include 'koneksi.php';
$email = $_POST['email'];
$password = $_POST['password'];

$query = mysqli_query($koneksi, "SELECT * FROM users WHERE email='$email' AND password='$password' ") or die(mysqli_error($koneksi)) ;

if ($data = mysqli_fetch_array($query)) {
    $_SESSION['email'] = $data['email'];
    header("Location:index.php");
} else {
    $_SESSION['alert'] = "Ada yang salah, cek kembali!";
    header("Location:login.php");
}
?>
