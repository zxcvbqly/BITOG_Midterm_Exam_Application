<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        
        $products = [
            ['name' => 'Laptop', 'price' => 1000],
            ['name' => 'Smartphone', 'price' => 700],
            ['name' => 'Tablet', 'price' => 400],
            ['name' => 'Headphones', 'price' => 150]
        ];

        
        return view('products', compact('products'));
    }
}
