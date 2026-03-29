<?php

namespace App\Services;

use App\Models\Product;

class ProductService
{
    public function getAllProducts()
    {
        return (new Product())->getAll();
    }

    public function getProductById($id)
    {
        return (new Product())->find($id);
    }
}