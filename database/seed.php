<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Config\Database;

$db = new Database();

$pdo = $db->connect();

$password = password_hash(
    'admin123',
    PASSWORD_BCRYPT
);

$stmt = $pdo->prepare(
"
INSERT INTO users
(nombre,email,password)
VALUES(?,?,?)
"
);

$stmt->execute([
    'Administrador',
    'admin@empresa.com',
    $password
]);

echo "Usuario administrador creado";