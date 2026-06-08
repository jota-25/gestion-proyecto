<?php

session_start();

require_once
__DIR__ . '/../vendor/autoload.php';

use App\Controllers\ProyectoController;
use App\Middleware\AuthMiddleware;

AuthMiddleware::check();

$controller =
new ProyectoController();

$proyectos =
$controller->index();

require_once
__DIR__ .
'/../views/proyectos/index.php';