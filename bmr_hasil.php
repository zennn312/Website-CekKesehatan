<?php
// session_start();
include 'login_cek.php';

if ($_SESSION['job'] !== 'user') {
    header("location:index.php");
    exit;
}

$bmr = $_GET['bmr'] ?? 0;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hasil BMR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Hasil Perhitungan BMR</h2>
    <div class="alert alert-info">
        <p><strong>BMR Anda:</strong> <?= $bmr ?></p>
    </div>
    <a href="bmr_form.php" class="btn btn-primary">Hitung Lagi</a>
</div>
</body>
</html>
