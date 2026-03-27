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

    public function find($id)
    {
        $db = Database::connect();

        $stmt = $db->prepare("SELECT * FROM products WHERE id = ?");
        $stmt->execute([$id]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

}