<?php

namespace App\Models;

use App\Database;
use PDO;

class Product
{
    public function getAll()
    {
        $db = Database::connect();

        $stmt = $db->query("SELECT * FROM products");

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}