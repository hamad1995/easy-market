<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('welcome', [
            'products' => $products
        ]);
    }
    public function show(){
        $porduct = Product::find('id');

    }
}
