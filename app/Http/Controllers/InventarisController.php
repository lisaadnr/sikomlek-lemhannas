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
        $barangTersedia = Inventaris::sum('tersedia');
        $barangTerpinjam = Inventaris::sum('terpinjam');
        $barangRusak = Inventaris::sum('rusak');
        return view('pages.dashboard', compact('totalBarang', 'barangTersedia', 'barangTerpinjam', 'barangRusak'));
    }


    public function inventory(){
        $inventaris = Inventaris::select('nama_barang', 'jumlah')->get();

        $namaBarang = $inventaris->pluck('nama_barang');
        $jumlahBarang = $inventaris->pluck('jumlah');
        $jumlahPC = Inventaris::where('nama_barang', 'LIKE', '%PC%')->sum('jumlah');
        $jumlahPrinter = Inventaris::where('nama_barang', 'LIKE', '%PRINTER%')->sum('jumlah');
        $jumlahLaptop = Inventaris::where('nama_barang', 'LIKE', '%LAPTOP%')->sum('jumlah');
        $jumlahMouse = Inventaris::where('nama_barang', 'LIKE', '%MOUSE%')->sum('jumlah');
        $jumlahMonitor = Inventaris::where('nama_barang', 'LIKE', '%MONITOR%')->sum('jumlah');
        $jumlahKeyboard = Inventaris::where('nama_barang', 'LIKE', '%KEYBOARD%')->sum('jumlah');
        $jumlahScanner = Inventaris::where('nama_barang', 'LIKE', '%SCANNER%')->sum('jumlah');
        $jumlahWebcam = Inventaris::where('nama_barang', 'LIKE', '%WEBCAM%')->sum('jumlah');
        $jumlahSpeaker = Inventaris::where('nama_barang', 'LIKE', '%SPEAKER%')->sum('jumlah');
        $jumlahMicrophone = Inventaris::where('nama_barang', 'LIKE', '%MICROPHONE%')->sum('jumlah');
        $jumlahProjector = Inventaris::where('nama_barang', 'LIKE', '%PROJECTOR%')->sum('jumlah');
        $jumlahRouter = Inventaris::where('nama_barang', 'LIKE', '%ROUTER%')->sum('jumlah');
        $jumlahSwitch = Inventaris::where('nama_barang', 'LIKE', '%SWITCH%')->sum('jumlah');
        $jumlahFirewall = Inventaris::where('nama_barang', 'LIKE', '%FIREWALL%')->sum('jumlah');
        $jumlahNAS = Inventaris::where('nama_barang', 'LIKE', '%NAS%')->sum('jumlah');
        $jumlahUPS = Inventaris::where('nama_barang', 'LIKE', '%UPS%')->sum('jumlah');
        $jumlahServer = Inventaris::where('nama_barang', 'LIKE', '%SERVER%')->sum('jumlah');
        return view('pages.inventory', compact('namaBarang', 'jumlahBarang', 'jumlahPC', 'jumlahPrinter', 'jumlahLaptop',
                    'jumlahMouse', 'jumlahMonitor', 'jumlahKeyboard', 'jumlahScanner', 'jumlahWebcam',
                    'jumlahSpeaker', 'jumlahMicrophone', 'jumlahProjector', 'jumlahRouter',
                    'jumlahSwitch', 'jumlahFirewall', 'jumlahNAS', 'jumlahUPS',
                    'jumlahServer'));
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
