<?php
session_start();

if (!isset($_SESSION["admin"])) {
    header("Location: login.php");
    exit;
}

$error = $_SESSION["error"] ?? null;
unset($_SESSION["error"]);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Tiket War</title>
</head>
<body>
    <h1>Tambah Tiket War</h1>

    <?php if ($error !== null) { ?>
        <p><?php echo htmlspecialchars($error, ENT_QUOTES, "UTF-8"); ?></p>
    <?php } ?>

    <form method="post" action="prosesTambah.php" enctype="multipart/form-data">
        <p>
            <label for="nama">Nama Tiket</label><br>
            <input type="text" id="nama" name="nama" required>
        </p>
        <p>
            <label for="kategori">Kategori</label><br>
            <select id="kategori" name="kategori" required>
                <option value="Festival">Festival</option>
                <option value="VIP">VIP</option>
                <option value="Reguler">Reguler</option>
            </select>
        </p>
        <p>
            <label for="harga">Harga</label><br>
            <input type="number" id="harga" name="harga" min="1" required>
        </p>
        <p>
            <label for="bukti">Bukti Gambar</label><br>
            <input type="file" id="bukti" name="bukti" accept=".jpg,.jpeg,.png" required>
        </p>
        <button type="submit">Simpan Tiket</button>
    </form>

    <p><a href="dashboard.php">Kembali ke Dashboard</a></p>
</body>
</html>
