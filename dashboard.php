<?php
session_start();

if (!isset($_SESSION["admin"])) {
    header("Location: login.php");
    exit;
}

if (!isset($_SESSION["daftarWar"])) {
    $_SESSION["daftarWar"] = [];
}

$username = $_SESSION["admin"]["username"] ?? "Admin";
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin - TiketWar</title>
</head>
<body>
    <h1>Dashboard Admin - Halo, <?php echo htmlspecialchars($username, ENT_QUOTES, "UTF-8"); ?></h1>

    <p>
        <a href="tambahTiket.php">+ Tambah Tiket War</a>
        |
        <a href="prosesLogout.php">Logout</a>
    </p>

    <?php if (!empty($_SESSION["daftarWar"])) { ?>
        <?php foreach ($_SESSION["daftarWar"] as $i => $tiket) { ?>
            <div style="border: 1px solid #ccc; padding: 12px; margin-bottom: 12px;">
                <h3><?php echo htmlspecialchars($tiket["nama"], ENT_QUOTES, "UTF-8"); ?></h3>
                <p>Kategori: <?php echo htmlspecialchars($tiket["kategori"], ENT_QUOTES, "UTF-8"); ?></p>
                <p>Harga: Rp<?php echo number_format($tiket["harga"], 0, ",", "."); ?></p>
                <img src="<?php echo htmlspecialchars($tiket["bukti"], ENT_QUOTES, "UTF-8"); ?>" width="100" alt="Bukti tiket">

                <form method="post" action="prosesHapus.php">
                    <input type="hidden" name="hapus" value="<?php echo htmlspecialchars((string)$i, ENT_QUOTES, "UTF-8"); ?>">
                    <button type="submit">Hapus</button>
                </form>
            </div>
        <?php } ?>
    <?php } else { ?>
        <p>Belum ada tiket yang ditambahkan.</p>
    <?php } ?>
</body>
</html>
