<?php

require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();

$connection->beginTransaction();

$connection->exec("INSERT INTO comments(email, comment) VALUES('budi@gmail.com', 'up')");
$connection->exec("INSERT INTO comments(email, comment) VALUES('budianduk@gmail.com', 'Thanks')");
$connection->exec("INSERT INTO comments(email, comment) VALUES('budilsemana@gmail.com', 'what?')");
$connection->exec("INSERT INTO comments(email, comment) VALUES('budibudi@gmail.com', 'Okay')");
$connection->exec("INSERT INTO comments(email, comment) VALUES('budisetiadi@gmail.com', 'oh no')");

$connection->commit();

$connection = null;