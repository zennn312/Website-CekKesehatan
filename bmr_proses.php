<?php
session_start();
include 'koneksi.php';
include 'login_cek.php';

if ($_SESSION['job'] !== 'user') {
    header("location:index.php");
    exit;
}

$nama = $_POST['nama_user'];
$jk = $_POST['jenis_kelamin'];
$umur = $_POST['umur'];
$berat = $_POST['berat_badan'];
$tinggi = $_POST['tinggi_badan'];
$id_bmr = $_SESSION['id_bmr'];


if ($jk === "L") {
    $bmr = 66 + (13.7 * $berat) + (5 * $tinggi) - (6.8 * $umur);
} else {
    $bmr = 655 + (9.6 * $berat) + (1.8 * $tinggi) - (4.7 * $umur);
}

$bmr = round($bmr, 2);

$query = "INSERT INTO cek_bmr (nama_user, jenis_kelamin, umur, berat_badan, tinggi_badan, bmr) 
          VALUES ('$nama', '$jk', '$umur', '$berat', '$tinggi', '$bmr')";

if (mysqli_query($conn, $query)) {
    header("Location: bmr_hasil.php?pesan=bmr_berhasil&bmr=$bmr&kondisi=$kondisi");
} else {
    echo "Gagal menyimpan data.";
}
?>
