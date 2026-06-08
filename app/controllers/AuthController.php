<?php

namespace App\Controllers;

use App\Models\User;

class AuthController
{
    public function login(
        string $email,
        string $password
    ): bool {

        $userModel = new User();

        $user = $userModel->findByEmail(
            $email
        );

        if (
            !$user ||
            !password_verify(
                $password,
                $user['password']
            )
        ) {
            return false;
        }

        $_SESSION['user_id']
            = $user['id'];

        $_SESSION['user_name']
            = $user['nombre'];

        return true;
    }
}