<?php
session_start();
include 'koneksi.php';
include 'login_cek.php';

if ($_SESSION['job'] !== 'user') {
    header("location:index.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama_user'];
    $umur = $_POST['umur'];
    $berat = $_POST['berat_badan'];
    $tinggi = $_POST['tinggi_badan'];

    $tinggi_m = $tinggi / 100; 
    $bmi = $berat / ($tinggi_m * $tinggi_m);
    $bmi = round($bmi, 1);

    if ($bmi < 18.5) {
        $kondisi = "Kurus";
    } elseif ($bmi >= 18.5 && $bmi < 25) {
        $kondisi = "Normal";
    } elseif ($bmi >= 25 && $bmi < 30) {
        $kondisi = "Gemuk";
    } else {
        $kondisi = "Obesitas";
    }

    $query = "INSERT INTO cek_bmi (nama_user, umur, berat_badan, tinggi_badan, kondisi) 
              VALUES ('$nama', '$umur', '$berat', '$tinggi', '$kondisi')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header("Location: bmi_hasil.php?bmi=$bmi&kondisi=$kondisi");
        exit;
    } else {
        echo "Gagal menyimpan data.";
    }
}
?>
