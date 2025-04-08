<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventaris;


class InformasiAlatController extends Controller
{
    //
    public function index()
    {
        $inventaris = Inventaris::all();
        return view('pages.informasialat', compact('inventaris'));

    }
}
