<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function food() {
        return view('products.food');
    }

    public function beauty() {
        return view('products.beauty');
    }

    public function homecare() {
        return view('products.homecare');
    }

    public function baby() {
        return view('products.baby');
    }
}
