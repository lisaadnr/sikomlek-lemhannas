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

    public function dashboard()
    {
        return view('pages.dashboard');
    }

    public function formpeminjaman()
    {
        return view('pages.formpeminjaman');
    }

    public function formpengembalian()
    {
        return view('pages.formpengembalian');
    }

    public function hakakses()
    {
        return view('pages.hakakses');
    }

    public function informasialat()
    {
        return view('pages.informasialat');
    }

    public function inventory()
    {
        return view('pages.inventory');
    }

    public function pelatihan()
    {
        return view('pages.pelatihan');
    }

    public function pengaturanakun()
    {
        return view('pages.pengaturanakun');
    }

    public function pinjamalat()
    {
        return view('pages.pinjamalat');
    }

    public function stok()
    {
        return view('pages.stok');
    }

    public function tentang()
    {
        return view('pages.tentang');
    }

}
