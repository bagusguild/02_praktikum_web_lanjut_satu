<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        echo 'Selamat Datang';
    }

    public function about() {
        echo 'NIM : 2141720079 | Nama : Bagus Dwi Putranto';
    }

    public function articles($id) {
        echo 'Halaman Artikel dengan ID '.$id;
    }
}
