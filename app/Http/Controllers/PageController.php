<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
    }
    public function about() {
        return 'INGGA CHINTIA SARI (2241760018)';
    }
    public function articles($id) {
        return 'Halaman Artikel dengan ID ' . $id;
    }
}
