<?php

namespace App\Controllers;

class DashboardController
{
    public function index()
    {
        session_start();

        if (!isset($_SESSION['user'])) {
            header('Location: /toko-prototype/public/login');
            exit;
        }

        return view('dashboard');
    }
}