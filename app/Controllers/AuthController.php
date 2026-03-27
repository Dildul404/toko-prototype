<?php

namespace App\Controllers;

use App\Models\User;

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
        $userModel = new User();

        $userModel->create($_POST);

        header('Location: /toko-prototype/public/login');
        exit;
    }

    public function login()
    {
        session_start();

        $userModel = new User();
        $user = $userModel->findByEmail($_POST['email']);

        if ($user && password_verify($_POST['password'], $user['password'])) {
            $_SESSION['user'] = $user;

            header('Location: /toko-prototype/public/dashboard');
            exit;
        }

        echo "Login gagal";
    }

    public function logout()
    {
        session_start();
        session_destroy();

        header('Location: /toko-prototype/public/login');
        exit;
    }
}