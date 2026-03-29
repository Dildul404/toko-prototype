<?php

namespace App\Controllers;

use App\Models\User;
use App\Helpers\Validator;
use App\Services\AuthService;

class AuthController
{
    public function showLogin()
    {
        return view('login');
    }

    public function showRegister()
    {
        return view('register');
    }

    public function register()
    {
        $authService = new AuthService();

        $authService->register($_POST);

        header('Location: /toko-prototype/public/login');
        exit;
    }

    public function login()
    {
        session_start();

        $authService = new AuthService();

        $success = $authService->login(
            $_POST['email'],
            $_POST['password']
        );

        if (!$success) {
            echo "Login gagal";
            return;
        }

        header('Location: /toko-prototype/public/dashboard');
        exit;
    }

    public function logout()
    {
        session_start();
        session_destroy();

        header('Location: /toko-prototype/public/login');
        exit;
    }
}