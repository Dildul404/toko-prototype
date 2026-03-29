<?php

namespace App\Services;

use App\Models\User;

class AuthService
{
    public function register($data)
    {
        $userModel = new User();

        return $userModel->create($data);
    }

    public function login($email, $password)
    {
        $userModel = new User();
        $user = $userModel->findByEmail($email);

        if (!$user || !password_verify($password, $user['password'])) {
            return false;
        }

        $_SESSION['user'] = $user;

        return true;
    }
}