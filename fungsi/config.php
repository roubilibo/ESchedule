<?php

$host = "localhost";
$user = "root";
$pass = "";
$db   = "penjadwalanpkl";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    echo "Koneksi Gagal";
}

include 'fungsi-keahlian.php';
include 'fungsi-kampus.php';
