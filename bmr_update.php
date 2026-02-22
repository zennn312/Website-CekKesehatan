<?php
session_start();
include 'koneksi.php';
include 'login_cek.php';

if ($_SESSION['job'] !== 'admin') {
    header("location:index.php");
    exit;
}

$id_bmr = $_POST['id_bmr'];
$nama = $_POST['nama_user'];
$jk = $_POST['jenis_kelamin'];
$umur = $_POST['umur'];
$berat = $_POST['berat_badan'];
$tinggi = $_POST['tinggi_badan'];

if ($jk === "L") {
    $bmr = 66 + (13.7 * $berat) + (5 * $tinggi) - (6.8 * $umur);
} else {
    $bmr = 655 + (9.6 * $berat) + (1.8 * $tinggi) - (4.7 * $umur);
}
$bmr = round($bmr, 2);

$query = "UPDATE cek_bmr 
          SET nama_user='$nama', jenis_kelamin='$jk', umur='$umur', berat_badan='$berat', tinggi_badan='$tinggi', bmr='$bmr' 
          WHERE id_bmr=$id";

if (mysqli_query($conn, $query)) {
    header("Location:admin.php?pesan=bmr_update");
} else {
    echo "Gagal update data.";
}
?>
