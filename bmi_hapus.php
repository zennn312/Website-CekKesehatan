<?php
session_start();
include 'koneksi.php';
include 'login_cek.php';

if ($_SESSION['job'] !== 'admin') {
    header("location:index.php");
    exit;
}

$id_bmi = $_GET['id_bmi'];

$query = "DELETE FROM cek_bmi WHERE id_bmi = $id_bmi";
if (mysqli_query($conn, $query)) {
    header("Location: admin.php?pesan=berhasil_hapus");
} else {
    echo "Gagal menghapus data.";
}
?>
