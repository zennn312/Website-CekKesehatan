<?php
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

if($username == "admin" && $password == "admin123") {
    $_SESSION['username'] = $username;
    $_SESSION['job'] = "admin";
    header("location:admin.php");
} else {
    header("location:login_admin.php?pesan=Username/password salah");
}
?>
