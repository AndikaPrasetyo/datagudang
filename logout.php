<?php

session_start();

unset($_SESSION['email']);
$_SESSION['alert'] = "Anda telah keluar.";
header("Location:login.php");
?>
