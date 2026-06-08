<?php

session_start();

require_once
__DIR__.'/../vendor/autoload.php';

use App\Controllers\ClienteController;

$controller =
new ClienteController();

$controller->store(
    $_POST['nombre'],
    $_POST['email'],
    $_POST['telefono']
);

header("Location: clientes.php?success=created");
exit;