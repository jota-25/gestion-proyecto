<?php

session_start();

require_once
__DIR__ .
'/../vendor/autoload.php';
use App\Models\Cliente;
use App\Models\Proyecto;
$clienteModel = new Cliente();
$proyectoModel = new Proyecto();

$totalClientes = $clienteModel->count();
$totalProyectos = $proyectoModel->count();

use App\Middleware\AuthMiddleware;

AuthMiddleware::check();

require_once
__DIR__ .
'/../views/dashboard.php';