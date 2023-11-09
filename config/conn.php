<?php
$remote = false;
if (!$remote) {
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "crud-dynamic";
}


$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Koneksi database gagal: " . $conn->connect_error);
}