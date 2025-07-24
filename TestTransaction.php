<?php

require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();

$connection->beginTransaction();

$connection->exec("INSERT INTO comments(email, comment) VALUES('udin@gmail.com', 'up')");
$connection->exec("INSERT INTO comments(email, comment) VALUES('ipin@gmail.com', 'Thanks')");
$connection->exec("INSERT INTO comments(email, comment) VALUES('luna@gmail.com', 'what?')");
$connection->exec("INSERT INTO comments(email, comment) VALUES('vanessa@gmail.com', 'Okay')");
$connection->exec("INSERT INTO comments(emails, comment) VALUES('guntur@gmail.com', 'oh no')");

$connection->commit();

$connection = null;