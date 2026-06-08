<?php

session_start();

require_once
__DIR__ .
'/../vendor/autoload.php';

use App\Middleware\AuthMiddleware;

AuthMiddleware::check();

require_once
__DIR__ .
'/../reports/ClientePDF.php';