<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventaris;
use App\Models\Peminjaman;


class PeminjamanController extends Controller
{
    public function create()
    {
        $inventaris = Inventaris::where('tersedia', '>', 0)->get();
        return view('pages.formpeminjaman', compact('inventaris'));
    }

    public function viewPengembalian(){
        $peminjaman = Peminjaman::where('status', 'dipinjam')->get();
        return view('pages.formpengembalian', compact('peminjaman'));
    }

    public function pengembalian(Request $request){
        $request->validate([
            'peminjaman_id' => 'required|exists:peminjamen,id',
            'jumlah_unit' => 'required|integer|min:1',
        ]);

        $peminjaman = Peminjaman::findOrFail($request->peminjaman_id);
        $inventaris = $peminjaman->inventaris;

        if ($request->jumlah_unit > $peminjaman->jumlah_unit) {
            return back()->withErrors(['Jumlah unit melebihi yang dipinjam.']);
        }

        // Update stok
        $inventaris->tersedia += $request->jumlah_unit;
        $inventaris->terpinjam -= $request->jumlah_unit;
        $inventaris->save();

        // Update peminjaman
        $peminjaman->jumlah_unit -= $request->jumlah_unit;
        if ($peminjaman->jumlah_unit == 0) {
            $peminjaman->status = 'dikembalikan';
            $peminjaman->tanggal_kembali = now();
        }
        $peminjaman->save();

        return back()->with('success', 'Pengembalian berhasil diproses.');
    }

    public function store(Request $request) {
        $request->validate([
            'nama_peminjam' => 'required|string',
            'nip' => 'nullable|string',
            'unit_kerja' => 'nullable|string',
            'inventaris_id' => 'required|exists:inventaris,id',
            'jumlah_unit' => 'required|integer|min:1',
            'tanggal_pinjam' => 'required|date',
            'tanggal_kembali' => 'nullable|date|after_or_equal:tanggal_pinjam',
        ]);

        Peminjaman::create([
            'nama_peminjam' => $request->nama_peminjam,
            'nip' => $request->nip,
            'unit_kerja' => $request->unit_kerja,
            'inventaris_id' => $request->inventaris_id,
            'jumlah_unit' => $request->jumlah_unit,
            'tanggal_pinjam' => $request->tanggal_pinjam,
            'tanggal_kembali' => $request->tanggal_kembali,
            'status' => 'dipinjam'
        ]);

        $inventaris = Inventaris::findOrFail($request->inventaris_id);

        if ($request->jumlah_unit > $inventaris->tersedia) {
            return back()->withErrors(['jumlah_unit' => 'Jumlah unit melebihi stok yang tersedia.']);
        }

        $inventaris->tersedia -= $request->jumlah_unit;
        $inventaris->terpinjam += $request->jumlah_unit;
        $inventaris->save();

        return back()->with('success', 'Berhasil meminjam barang');
    }

}
