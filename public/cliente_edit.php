<?php

session_start();

require_once
__DIR__.'/../vendor/autoload.php';

use App\Controllers\ClienteController;
use App\Middleware\AuthMiddleware;

AuthMiddleware::check();

$controller =
new ClienteController();

$cliente =
$controller->edit(
    (int)$_GET['id']
);

require_once
__DIR__.'/../views/clientes/edit.php';