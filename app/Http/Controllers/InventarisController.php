<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventaris;

class InventarisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inventaris = Inventaris::all();
        return view('pages.stok', compact('inventaris'));

    }

    public function jumlahBarang(){
        $totalBarang = Inventaris::sum('jumlah');
        return view('pages.dashboard', compact('totalBarang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'namaBarang' => 'required|string|max:255',
            'merek' => 'nullable|string|max:255',
            'tipe' => 'nullable|string|max:255',
            'jumlah' => 'required|integer|min:1',
            'tahunPengadaan' => 'required|integer|min:1900|max:' . date('Y'),
            'penyedia' => 'nullable|string|max:255',
            'nomorKontrak' => 'nullable|string|max:255',
            'keterangan' => 'nullable|string',
            'lokasi' => 'required|string|max:255',
            'tersedia' => 'required|integer|min:0',
            'terpinjam' => 'required|integer|min:0',
            'rusak' => 'required|integer|min:0',
        ]);

        Inventaris::create($request->all());

        return redirect()->route('pages.stok')->with('success', 'Inventaris berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $item = Inventaris::findOrFail($id);
        return view('inventaris.show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'namaBarang' => 'required|string|max:255',
            'merek' => 'nullable|string|max:255',
            'tipe' => 'nullable|string|max:255',
            'jumlah' => 'required|integer|min:1',
            'tahunPengadaan' => 'required|integer|min:1900|max:' . date('Y'),
            'penyedia' => 'nullable|string|max:255',
            'nomorKontrak' => 'nullable|string|max:255',
            'keterangan' => 'nullable|string',
            'lokasi' => 'required|string|max:255',
            'tersedia' => 'required|integer|min:0',
            'terpinjam' => 'required|integer|min:0',
            'rusak' => 'required|integer|min:0',
        ]);

        $item = Inventaris::findOrFail($id);
        $item->update($request->all());

        return redirect()->route('inventaris.index')->with('success', 'Inventaris berhasil diperbarui!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Inventaris::findOrFail($id);
        $item->delete();

        return redirect()->route('inventaris.index')->with('success', 'Inventaris berhasil dihapus!');

    }
}
