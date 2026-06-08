<?php

session_start();

require_once
__DIR__ .
'/../vendor/autoload.php';

use App\Controllers\AuthController;

$email =
$_POST['email'];

$password =
$_POST['password'];

$auth =
new AuthController();

if(
    $auth->login(
        $email,
        $password
    )
){

    header(
        "Location: dashboard.php"
    );

}else{

    header(
        "Location: login.php?error=1"
    );
}