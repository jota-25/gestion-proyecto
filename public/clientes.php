<?php

session_start();

require_once
__DIR__.'/../vendor/autoload.php';

use App\Controllers\ClienteController;
use App\Middleware\AuthMiddleware;

AuthMiddleware::check();

$controller =
new ClienteController();

$clientes =
$controller->index();

require_once
__DIR__.'/../views/clientes/index.php';