<?php
session_start();
include 'koneksi.php';
include 'login_cek.php';

if ($_SESSION['job'] !== 'admin') {
    header("location:index.php");
    exit;
}

$id_bmi = $_GET['id_bmi'];
$query = mysqli_query($conn, "SELECT * FROM cek_bmi WHERE id_bmi = $id_bmi");
$data = mysqli_fetch_assoc($query);

if (!$data) {
    echo "Data tidak ditemukan.";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data BMI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Edit Data BMI</h2>
    <form action="bmi_update.php" method="POST">
        <input type="hidden" name="id_bmi" value="<?= $data['id_bmi'] ?>">
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama_user" class="form-control" value="<?= $data['nama_user'] ?>" required>
        </div>
        <div class="mb-3">
            <label>Umur</label>
            <input type="number" name="umur" class="form-control" value="<?= $data['umur'] ?>" required>
        </div>
        <div class="mb-3">
            <label>Berat Badan (kg)</label>
            <input type="number" name="berat_badan" class="form-control" value="<?= $data['berat_badan'] ?>" required>
        </div>
        <div class="mb-3">
            <label>Tinggi Badan (cm)</label>
            <input type="number" name="tinggi_badan" class="form-control" value="<?= $data['tinggi_badan'] ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Data</button>
    </form>
</div>
</body>
</html>
