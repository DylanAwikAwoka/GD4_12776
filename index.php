<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>TiketWar</title>
</head>
<body>
    <?php 
    echo "Selamat datang di TiketWar!"; 
    ?>
    
    <?php
        $daftarKonser = [
            [
                "nama" => "Coldplay - Music of the Spheres",
                "tanggal" => "2026-03-15",
                "kategori" => "Festival",
                "harga" => 1500000
            ],
            [
                "nama" => "Dewa 19 Reunion Show",
                "tanggal" => "2026-04-02",
                "kategori" => "VIP",
                "harga" => 2500000
            ],
            [
                "nama" => "NCT Dream World Tour",
                "tanggal" => "2026-05-20",
                "kategori" => "Reguler",
                "harga" => 900000
            ],
        ];
    ?>

    <?php
        $hargaAsli = $daftarKonser[0]["harga"];
        $persenDiskon = 20;
        $hargaSetelahDiskon = $hargaAsli - ($hargaAsli * $persenDiskon / 100);
        $tiketMasihAda = $daftarKonser[0]["harga"] > 0;
    ?>

    <?php
        $sisaTiket = $daftarKonser[0]["harga"] > 0 ? 15 : 0;    

        if ($sisaTiket > 10) {
            $statusTiket = "Masih Banyak";
        } elseif ($sisaTiket > 0) {
            $statusTiket = "Sisa Dikit, Buruan!";
        } else {
            $statusTiket = "Sold Out";
        }

        $kategori = $daftarKonser[0]["kategori"];
        switch ($kategori) {
            case "Festival": $badge = "Festival Pass"; break;
            case "VIP": $badge = "VIP Access"; break;
            case "Reguler": $badge = "Reguler"; break;
            default: $badge = "Kategori tidak dikenali";
        }
    ?>

    <p>Harga Asli: Rp. <?php echo $hargaAsli; ?></p>
    <p>Setelah Diskon: Rp. <?php echo $hargaSetelahDiskon; ?></p>
    <p>Konser: <?php echo $daftarKonser[0]["nama"]; ?></p>
    <p>Harga: Rp. <?php echo $daftarKonser[0]["harga"]; ?></p> 
    <p>Sisa Tiket: <?php echo $daftarKonser[0]["sisaTiket"]; ?></p>  
    <p>Status: <?php echo $statusTiket; ?></p>
    <p>Kategori: <?php echo $badge; ?></p>

</body>
</html>