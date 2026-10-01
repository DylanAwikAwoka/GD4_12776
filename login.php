<?php
session_start();

if (isset($_SESSION["admin"])) {
    header("Location: dashboard.php");
    exit;
}

$error = $_SESSION["error"] ?? null;
unset($_SESSION["error"]);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login Admin - TiketWar</title>
</head>
<body>
    <h1>Login Admin</h1>
    <?php if ($error !== null) { ?>
        <p><?php echo htmlspecialchars($error, ENT_QUOTES, "UTF-8"); ?></p>
    <?php } ?>
    <form method="post" action="prosesLogin.php">
        <p>
            <label for="username">Username</label><br>
            <input type="text" id="username" name="username" required>
        </p>
        <p>
            <label for="password">Password</label><br>
            <input type="password" id="password" name="password" required>
        </p>
        <button type="submit">Login</button>
    </form>
</body>
</html>