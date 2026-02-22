<?php
// session_start();
include 'login_cek.php';

if ($_SESSION['job'] !== 'user') {
    header("location:index.php");
    exit;
}

$bmi = $_GET['bmi'] ?? 0;
$kondisi = $_GET['kondisi'] ?? 'Tidak diketahui';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hasil BMI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Hasil Perhitungan BMI</h2>
    <div class="alert alert-info">
        <p><strong>BMI Anda:</strong> <?= $bmi ?></p>
        <p><strong>Kondisi:</strong> <?= $kondisi ?></p>
    </div>
    <a href="bmi_form.php" class="btn btn-primary">Hitung Lagi</a>
</div>
</body>
</html>
