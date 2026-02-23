<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Halaman Kategori Food & Beverage
    public function foodBeverage() {
        return view('products.food-beverage');
    }

    // Halaman Kategori Beauty & Health
    public function beautyHealth() {
        return view('products.beauty-health');
    }

    // Halaman Kategori Home Care
    public function homeCare() {
        return view('products.home-care');
    }

    // Halaman Kategori Baby & Kid
    public function babyKid() {
        return view('products.baby-kid');
    }
}