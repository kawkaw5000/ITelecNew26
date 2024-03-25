<?php
$dsn = "mysql:host=localhost;dbname=practice";
$dbusername = "root";
$dbpassword = "";

try {
    $pdo = new PDO($dsn, $dbusername, $dbpassword);

    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    echo "Connection fail: " . $e -> getMessage();
}
