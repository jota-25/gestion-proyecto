<?php

session_start();

require_once
__DIR__.'/../vendor/autoload.php';

use App\Controllers\ProyectoController;
use App\Middleware\AuthMiddleware;

AuthMiddleware::check();

$controller =
new ProyectoController();

$controller->destroy(
    (int)$_GET['id']
);

header("Location: proyectos.php?success=deleted");

exit;