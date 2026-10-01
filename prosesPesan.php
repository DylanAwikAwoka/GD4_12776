<?php
    $nama = $_POST["namaPembeli"];
    $konser = $_POST["pilihKonser"];
    $jumlah = $_POST["jumlahTiket"];
    $folderTujuan = "buktiBayar/";
    $namaFile = basename($_FILES["buktiBayar"]["name"]);
    $alamatFile = $folderTujuan . $namaFile;

    if (move_uploaded_file($_FILES["buktiBayar"]["tmp_name"], $alamatFile)) {
        $pesanUpload = "Bukti pembayaran berhasil diupload.";
    } else {
        $pesanUpload = "Gagal upload bukti pembayaran.";
    }
?>

<!DOCTYPE html>
<html>
<body>
    <h1>Pesanan Berhasil!</h1>
    <p>Nama: <?php echo $nama; ?></p>
    <p>Konser: <?php echo $konser; ?></p>
    <p>Jumlah tiket: <?php echo $jumlah; ?></p>
    <p><?php echo $pesanUpload; ?></p>
</body>
</html>




