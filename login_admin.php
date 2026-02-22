<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Admin</title>
</head>
<body>
    <?php if (isset($_GET['pesan'])): ?>
        <p><?= $_GET['pesan'] ?></p>
    <?php endif; ?>

    <form action="login_admin_proses.php" method="POST">
        Username: <input type="text" name="username" required><br>
        Password: <input type="password" name="password" required><br>
        <button type="submit">Login</button>
        <a href="index.php" class="btn">Cancel</a>
    </form>
</body>
</html>
