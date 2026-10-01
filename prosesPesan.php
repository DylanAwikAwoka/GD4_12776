<?php
    $nama = $_POST["namaPembeli"];
    $konser = $_POST["pilihKonser"];
    $jumlah = $_POST["jumlahTiket"];
?>
<!DOCTYPE html>
<html>
<body>
    <h1>Pesanan Berhasil!</h1>
    <p>Nama: <?php echo $nama; ?></p>
    <p>Konser: <?php echo $konser; ?></p>
    <p>Jumlah tiket: <?php echo $jumlah; ?></p>
</body>
</html>