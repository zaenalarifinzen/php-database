<?php

$host = "localhost";
$port = 3306;
$database = "belajar_php_database";
$username = "root";
$password = "1234";

try {
    $connection = new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
    echo "Sukses terkoneksi ke database MySql: $database";

    // menutup koneksi
    $connection = null;
} catch (PDOException $exception) {
    echo "Gagal terkoneksi ke database MySql: " . $exception->getMessage() . PHP_EOL;
}