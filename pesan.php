<!DOCTYPE html>
<html lang="id">
<head><title>Pesan Tiket - TiketWar</title></head>
<body>
    <h1>Form Pemesanan Tiket</h1>
    <form action="prosesPesan.php" method="post">
        <p>
            <label>Nama Pembeli:</label><br>
            <input type="text" name="namaPembeli" required>
        </p>
        <p>
            <label>Pilih Konser:</label><br>
            <select name="pilihKonser" required>
                <option value="Coldplay">Coldplay - Music of the Spheres</option>
                <option value="Dewa 19">Dewa 19 Reunion Show</option>
                <option value="NCT Dream">NCT Dream World Tour</option>
            </select>
        </p>
        <p>
            <label>Jumlah Tiket:</label><br>
            <input type="number" name="jumlahTiket" min="1" max="4" required>
        </p>
        <button type="submit">War Sekarang!</button>
    </form>
</body>
</html>