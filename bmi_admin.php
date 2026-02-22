<?php
session_start();
include 'koneksi.php';
include 'login_cek.php';

if ($_SESSION['job'] !== 'admin') {
    header("location:index.php");
    exit;
}

$query = mysqli_query($conn, "SELECT * FROM cek_bmi");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data BMI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h2>Data BMI Pengguna</h2>
        <table class="table table-bordered mt-4">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Umur</th>
                    <th>Berat Badan</th>
                    <th>Tinggi Badan</th>
                    <th>Kondisi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($query)) : ?>
                    <tr>
                        <td><?= htmlspecialchars($row['nama_user']) ?></td>
                        <td><?= $row['umur'] ?></td>
                        <td><?= $row['berat_badan'] ?></td>
                        <td><?= $row['tinggi_badan'] ?></td>
                        <td><?= $row['kondisi'] ?></td>
                        <td>
                            <a href="bmi_edit.php?id=<?= $row['id_bmi'] ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="bmi_hapus.php?id=<?= $row['id_bmi'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
