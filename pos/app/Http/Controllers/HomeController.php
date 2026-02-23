<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index() {
        return view('home'); // Pastikan sudah ada file resources/views/home.blade.php
    }
}