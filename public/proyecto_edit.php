<?php

session_start();

require_once
__DIR__.'/../vendor/autoload.php';

use App\Controllers\ProyectoController;
use App\Models\Cliente;
use App\Middleware\AuthMiddleware;

AuthMiddleware::check();

$controller =
new ProyectoController();

$proyecto =
$controller->edit(
    (int)$_GET['id']
);

$clienteModel =
new Cliente();

$clientes =
$clienteModel->getForSelect();

require_once
__DIR__ .
'/../views/proyectos/edit.php';