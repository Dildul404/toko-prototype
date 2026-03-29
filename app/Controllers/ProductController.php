<?php

namespace App\Controllers;

use App\Models\Product;
use App\Services\ProductService;

class ProductController
{
    public function index()
    {
        $products = (new ProductService())->getAllProducts();

        return view('products', ['products' => $products]);
    }

    public function show($id)
    {
        $productModel = new \App\Models\Product();

        $product = $productModel->find($id);

        if (!$product) {
            echo "Produk tidak ditemukan";
            return;
        }

        return view('product-detail', ['product' => $product]);
    }

}