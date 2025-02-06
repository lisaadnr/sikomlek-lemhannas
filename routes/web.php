<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::resource('pages', PageController::class)->only([
    'index',
    'about',
    'training',
    'dashboard',
    'formpeminjaman',
    'formpengembalian',
    'hakakses',
    'informasialat',
    'inventory',
    'pelatihan',
    'pengaturanakun',
    'pinjamalat',
    'stok',
    'tentang'

])->names([
    'index' => 'pages.index',
    'about' => 'pages.about',
    'training' => 'pages.training',
    'dashboard' => 'pages.dashboard',
    'formpeminjaman' => 'pages.formpeminjaman',
    'formpengembalian' => 'pages.formpengembalian',
    'hakakses' => 'pages.hakakses',
    'informasialat' => 'pages.informasialat',
    'inventory' => 'pages.inventory',
    'pelatihan' => 'pages.pelatihan',
    'pengaturanakun' => 'pages.pengaturanakun',
    'pinjamalat' => 'pages.pinjamalat',
    'stok' => 'pages.stok',
    'tentang' => 'pages.tentang'
]);

Route::prefix('pages')->name('pages.')->group(function () {
    Route::get('about', [PageController::class, 'about'])->name('about');
    Route::get('training', [PageController::class, 'training'])->name('training');
    Route::get('dashboard', [PageController::class, 'dashboard'])->name('dashboard');
    Route::get('formpeminjaman', [PageController::class, 'formpeminjaman'])->name('formpeminjaman');
    Route::get('formpengembalian', [PageController::class, 'formpengembalian'])->name('formpengembalian');
    Route::get('hakakses', [PageController::class, 'hakakses'])->name('hakakses');
    Route::get('informasialat', [PageController::class, 'informasialat'])->name('informasialat');
    Route::get('inventory', [PageController::class, 'inventory'])->name('inventory');
    Route::get('pelatihan', [PageController::class, 'pelatihan'])->name('pelatihan');
    Route::get('pengaturanakun', [PageController::class, 'pengaturanakun'])->name('pengaturanakun');
    Route::get('pinjamalat', [PageController::class, 'pinjamalat'])->name('pinjamalat');
    Route::get('stok', [PageController::class, 'stok'])->name('stok');
    Route::get('tentang', [PageController::class, 'tentang'])->name('tentang');
    Route::get('index', [PageController::class, 'index'])->name('index');
});


Route::resource('inventories', InventoryController::class);