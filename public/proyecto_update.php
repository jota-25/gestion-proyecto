<?php

session_start();

require_once
__DIR__.'/../vendor/autoload.php';

use App\Controllers\ProyectoController;
use App\Middleware\AuthMiddleware;

AuthMiddleware::check();

$controller =
new ProyectoController();

$controller->update(

    $_POST['id'],
    $_POST['cliente_id'],
    $_POST['nombre'],
    $_POST['descripcion'],
    $_POST['fecha_inicio'],
    $_POST['fecha_fin'],
    $_POST['estado']

);

header("Location: proyectos.php?success=updated");
exit;