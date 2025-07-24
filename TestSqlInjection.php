<?php

require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();

$username = "admin'; #";
$password = "admin1234";
$sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";

echo $sql . PHP_EOL;

$statement = $connection->query($sql);

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