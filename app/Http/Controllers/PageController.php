<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('pages.index'); // Ubah view ke resources/views/pages/index.blade.php
    }

    public function about()
    {
        return view('pages.about');
    }

    public function training()
    {
        return view('pages.training');
    }
}
