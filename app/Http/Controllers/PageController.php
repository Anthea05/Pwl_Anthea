<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //halaman utama (/)
    public function index() {
        return 'Selamat Datang';
    }

    //halaman about (/about)
    public function about() {
        return 'Nama: Anthea Amoode, NIM: 244107020024';
    }

    //halaman artikel dengan parameter ID (/articles/{id})
    public function articles($id) {
        return 'Halaman Artikel dengan Id ' . $id;
    }
}