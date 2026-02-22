<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Login User</title>
</head>
<body>
    <?php if (isset($_GET['pesan'])): ?>
        <p><?= $_GET['pesan'] ?></p>
    <?php endif; ?>
    
    <form action="login_user_proses.php" method="POST">
        Username: <input type="text" name="username" required><br>
        Password: <input type="password" name="password" required><br>
        <button type="submit">Login</button>
        <a href="index.php" class="btn">Cancel</a>
    </form>
    <p>Belum punya akun? <a href="register.php">Daftar di sini</a></p>
</body>
</html>
