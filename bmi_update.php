<?php
session_start();
include 'koneksi.php';
include 'login_cek.php';

if ($_SESSION['job'] !== 'admin') {
    header("location:index.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_bmi = $_POST['id_bmi'];
    $nama = $_POST['nama_user'];
    $umur = (int)$_POST['umur'];
    $berat = (float)$_POST['berat_badan'];
    $tinggi = (float)$_POST['tinggi_badan'];

    if ($umur <= 0 || $berat <= 0 || $tinggi <= 0) {
        echo "Input tidak valid.";
        exit;
    }

    $tinggi_m = $tinggi / 100;
    $bmi = $berat / ($tinggi_m * $tinggi_m);
    $bmi = round($bmi, 1);

    if ($bmi < 18.5) {
        $kondisi = "Kurus";
    } elseif ($bmi < 25) {
        $kondisi = "Normal";
    } elseif ($bmi < 30) {
        $kondisi = "Gemuk";
    } else {
        $kondisi = "Obesitas";
    }

    $query = "UPDATE cek_bmi SET nama_user='$nama', umur='$umur', berat_badan='$berat', tinggi_badan='$tinggi', kondisi='$kondisi' WHERE id_bmi=$id_bmi";

    if (mysqli_query($conn, $query)) {
        header("Location: admin.php?pesan=berhasil_update");
    } else {
        echo "Gagal update data.";
    }
}
?>
