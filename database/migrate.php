<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Config\Database;

$db = new Database();

$pdo = $db->connect();

$files = glob(__DIR__ . '/migrations/*.php');

sort($files);

foreach ($files as $file) {

    $sql = require $file;

    $pdo->exec($sql);

    echo "Migración ejecutada: "
        . basename($file)
        . PHP_EOL;
}