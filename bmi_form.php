<?php
// session_start();
include 'login_cek.php';

if ($_SESSION['job'] !== 'user') {
    header("location:index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hitung BMI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Form Hitung BMI</h2>
    <form action="bmi_proses.php" method="POST">
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama_user" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Umur</label>
            <input type="number" name="umur" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Berat Badan (kg)</label>
            <input type="number" step="0.1" name="berat_badan" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Tinggi Badan (cm)</label>
            <input type="number" step="0.1" name="tinggi_badan" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Hitung</button>
        <a href="index.php" class="btn">Cancel</a>
    </form>
</div>
</body>
</html>
