<?php

session_start();

require_once
__DIR__.'/../vendor/autoload.php';

use App\Models\Cliente;
use App\Middleware\AuthMiddleware;

AuthMiddleware::check();

$model = new Cliente();

$clientes =
$model->getForSelect();

require_once
__DIR__ .
'/../views/proyectos/create.php';