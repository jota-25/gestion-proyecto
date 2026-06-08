<?php

session_start();

require_once
__DIR__.'/../vendor/autoload.php';

use App\Controllers\ClienteController;
use App\Middleware\AuthMiddleware;

AuthMiddleware::check();

$controller =
new ClienteController();

$controller->destroy(
    (int)$_GET['id']
);

header("Location: clientes.php?success=deleted");
exit;