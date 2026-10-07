<?php
session_start();

if (!isset($_SESSION["admin"])) {
    header("Location: login.php");
    exit;
}

if (!isset($_SESSION["daftarWar"])) {
    $_SESSION["daftarWar"] = [];
}

if (
    empty($_POST["nama"]) ||
    empty($_POST["kategori"]) ||
    empty($_POST["harga"]) ||
    !isset($_FILES["bukti"]) ||
    $_FILES["bukti"]["error"] !== UPLOAD_ERR_OK
) {
    $_SESSION["error"] = "Semua data tiket harus diisi dengan benar!";
    header("Location: tambahTiket.php");
    exit;
}

$namaFileAsli = basename($_FILES["bukti"]["name"]);
$namaFileBaru = time() . "_" . $namaFileAsli;
$tujuanFile = "bukti_bayar/" . $namaFileBaru;

if (!move_uploaded_file($_FILES["bukti"]["tmp_name"], $tujuanFile)) {
    $_SESSION["error"] = "Upload bukti gagal. Silakan coba lagi.";
    header("Location: tambahTiket.php");
    exit;
}

$_SESSION["daftarWar"][] = [
    "nama" => trim($_POST["nama"]),
    "kategori" => $_POST["kategori"],
    "harga" => (int) $_POST["harga"],
    "bukti" => $tujuanFile,
];

header("Location: dashboard.php");
exit;
