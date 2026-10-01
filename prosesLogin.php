<?php
session_start();

if (empty($_POST["username"]) || empty($_POST["password"])) {
    $_SESSION["error"] = "Username dan password harus diisi!";
    header("Location: login.php");
    exit;
}

$_SESSION["admin"] = [
    "username" => $_POST["username"],
    "login_at" => date("Y-m-d H:i:s"),
];

header("Location: dashboard.php");
exit;