<?php
$host = "database";
$db = "docker";
$user = "docker";
$password = "docker";
$charset = "utf8mb4";

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
try {
    $pdo = new PDO($dsn, $user, $password);
    echo "Successfully connected to the database. 👍";
} catch(Exception $exception) {
    echo "Could not connect to database ({$exception->getMessage()}) 😔";
}