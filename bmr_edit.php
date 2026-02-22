<?php
session_start();
include 'koneksi.php';
include 'login_cek.php';

if ($_SESSION['job'] !== 'admin') {
    header("location:index.php");
    exit;
}

$id_bmr = $_GET['id_bmr'];
$query = mysqli_query($conn, "SELECT * FROM cek_bmr WHERE id_bmr = $id_bmr");
$data = mysqli_fetch_assoc($query);

if (!$data) {
    echo "Data tidak ditemukan.";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit BMR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Edit Data BMR</h2>
    <form action="bmr_update.php" method="POST">
        <input type="hidden" name="id_bmr" value="<?= $data['id_bmr'] ?>">
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama_user" class="form-control" value="<?= $data['nama_user'] ?>" required>
        </div>
        <div class="mb-3">
            <label>Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-control" required>
                <option value="L" <?= $data['jenis_kelamin'] == 'L' ? 'selected' : '' ?>>Laki-laki</option>
                <option value="P" <?= $data['jenis_kelamin'] == 'P' ? 'selected' : '' ?>>Perempuan</option>
            </select>
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
