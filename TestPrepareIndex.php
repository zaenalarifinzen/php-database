<?php

require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();

$username = "user";
$password = "rahasia";

$sql = "SELECT * FROM admin WHERE username = ? AND password = ?";
$statement = $connection->prepare($sql);
$statement->bindParam(1, $username); // parameter ke 1
$statement->bindParam(2, $password); // parameter ke 2
$statement->execute();

$succes = false;
$find_user = null;

foreach ($statement as $row) {
    //suskses
    $succes = true;
    $find_user = $row["username"];
}

if ($succes) {
    echo "Sukses Login : " . $find_user . PHP_EOL;
} else {
    echo "Gagal Login" . PHP_EOL;
}

$connection = null;