<?php

namespace App\Controllers;

use App\Models\Product;

class ProductController
{
    public function index()
    {
        $productModel = new Product();

        $products = $productModel->getAll();

        return view('products', ['products' => $products]);
    }
}