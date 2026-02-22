<?php
session_start();
include 'koneksi.php';
include 'login_cek.php';

if ($_SESSION['job'] !== 'admin') {
    header("location:index.php");
    exit;
}

$id_bmr = $_GET['id_bmr'];
$query = "DELETE FROM cek_bmr WHERE id_bmr = $id_bmr";

if (mysqli_query($conn, $query)) {
    header("Location:admin.php?pesan=bmr_hapus");
} else {
    echo "Gagal menghapus data.";
}
?>
