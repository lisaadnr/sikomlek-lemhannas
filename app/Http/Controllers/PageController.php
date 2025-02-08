<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('pages.login'); 
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

    public function tes()
    {
        return view('pages.tes');
    }


}
