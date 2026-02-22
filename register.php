<?php
session_start();
include 'koneksi.php';

if($_SERVER['REQUEST_METHOD']==='POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $cek = mysqli_query($conn, "SELECT *FROM user WHERE username = '$username'");
    if(mysqli_num_rows($cek) > 0) {
        $_SESSION['error'] = "Username sudah dipakai";
        header("location:register.php");
        exit;
    }

    mysqli_query($conn, "INSERT INTO user (username, password) VALUES ('$username', '$password')");
    header("location:login.php?pesan=Silahkan_login");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Registrasi Pengguna Baru</h2>
<form method="post">
  Username: <input type="text" name="username" required><br>
  Password: <input type="password" name="password" required><br>
  <button type="submit">Daftar</button>
  <a href="login_user.php" class="btn">Cancel</a>
</form>

</body>
</html>