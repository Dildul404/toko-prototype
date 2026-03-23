<?php

namespace App;

use PDO;

class Database
{
    public static function connect()
    {
        $config = require __DIR__ . '/../config/database.php';

        return new PDO(
            "mysql:host={$config['host']};dbname={$config['dbname']}",
            $config['username'],
            $config['password']
        );
    }
}