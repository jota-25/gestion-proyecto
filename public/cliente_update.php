<?php

session_start();

require_once
__DIR__.'/../vendor/autoload.php';

use App\Controllers\ClienteController;
use App\Middleware\AuthMiddleware;

AuthMiddleware::check();

$controller =
new ClienteController();

$controller->update(
    (int)$_POST['id'],
    $_POST['nombre'],
    $_POST['email'],
    $_POST['telefono']
);

header("Location: clientes.php?success=updated");
exit;