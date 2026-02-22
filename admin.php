<?php
include 'login_cek.php';
include 'role.php';
include 'koneksi.php';

if (!is_admin()) {
    header("location:login.php?pesan=belum_login");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
</head>
<body>
    <div class="container">
        <h2>Data BMI User</h2>
        <div class="table-container mb-5">
            <?php
            $query = mysqli_query($conn, "SELECT * FROM cek_bmi") or die(mysqli_error($conn));
            $jumlah = mysqli_num_rows($query);
            if ($jumlah > 0) {
                echo '<table class="table table-hover">';
                echo '<thead>';
                echo '<tr>';
                echo '<th>ID</th>';
                echo '<th>Nama</th>';
                echo '<th>Umur</th>';
                echo '<th>Berat Badan</th>';
                echo '<th>Tinggi Badan</th>';
                echo '<th>Kondisi</th>';
                echo '<th>Aksi</th>';
                echo '</tr>';
                echo '</thead>';
                echo '<tbody>';
                
                while ($data = mysqli_fetch_assoc($query)) {
                    echo '<tr>';
                    echo '<td>' . $data['id_bmi'] . '</td>';
                    echo '<td>' . htmlspecialchars($data['nama_user']) . '</td>';
                    echo '<td>' . $data['umur'] . '</td>';
                    echo '<td>' . $data['berat_badan'] . '</td>';
                    echo '<td>' . $data['tinggi_badan'] . '</td>';
                    echo '<td>' . $data['kondisi'] . '</td>';
                    echo '<td>';
                    echo '<a href="bmi_edit.php?id=' . $data['id_bmi'] . '" class="btn btn-warning btn-sm">Edit</a> ';
                    echo '<a href="bmi_hapus.php?id=' . $data['id_bmi'] . '" class="btn btn-danger btn-sm" onclick="return confirm(\'Yakin ingin menghapus?\')">Hapus</a>';
                    echo '</td>';
                    echo '</tr>';
                }
                
                echo '</tbody>';
                echo '</table>';
            } else {
                echo '<div class="alert alert-info">Tidak ada data pengguna.</div>';
            }
            ?>
        </div>
    </div>


    <!-- Data BMR -->
     <div class="container">
        <h2>Data BMR User</h2>
        <div class="table-container mb-5">
            <?php
            $query = mysqli_query($conn, "SELECT * FROM cek_bmr") or die(mysqli_error($conn));
            $jumlah = mysqli_num_rows($query);
            if ($jumlah > 0) {
                echo '<table class="table table-hover">';
                echo '<thead>';
                echo '<tr>';
                echo '<th>ID</th>';
                echo '<th>Nama</th>';
                echo '<th>Umur</th>';
                echo '<th>Berat Badan</th>';
                echo '<th>Tinggi Badan</th>';
                echo '<th>BMR</th>';
                echo '<th>Aksi</th>';
                echo '</tr>';
                echo '</thead>';
                echo '<tbody>';
                
                while ($data = mysqli_fetch_assoc($query)) {
                    echo '<tr>';
                    echo '<td>' . $data['id_bmr'] . '</td>';
                    echo '<td>' . htmlspecialchars($data['nama_user']) . '</td>';
                    echo '<td>' . $data['umur'] . '</td>';
                    echo '<td>' . $data['berat_badan'] . '</td>';
                    echo '<td>' . $data['tinggi_badan'] . '</td>';
                    echo '<td>' . $data['bmr'] . '</td>';
                    echo '<td>';
                    echo '<a href="bmr_edit.php?id=' . $data['id_bmr'] . '" class="btn btn-warning btn-sm">Edit</a> ';
                    echo '<a href="bmr_hapus.php?id=' . $data['id_bmr'] . '" class="btn btn-danger btn-sm" onclick="return confirm(\'Yakin ingin menghapus?\')">Hapus</a>';
                    echo '</td>';
                    echo '</tr>';
                }
                
                echo '</tbody>';
                echo '</table>';
            } else {
                echo '<div class="alert alert-info">Tidak ada data pengguna.</div>';
            }
            ?>
        </div>
    </div>

    <a href="index.php" class="btn">Kembali</a>
</body>
</html>
