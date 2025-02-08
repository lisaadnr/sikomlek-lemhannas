<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\NavbarController;

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
    'login',
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
    'tentang',
    'tes'

])->names([
    'pages.login' => 'pages.login',
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
    'tentang' => 'pages.tentang',
    'tes' => 'pages.tes'
]);

Route::prefix('pages')->name('pages.')->group(function () {
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
    Route::get('login', [PageController::class, 'login'])->name('login');
    Route::get('tes', [PageController::class, 'tes'])->name('tes');
});

Route::get('/', function () {
    return view('pages.login');
})->name('login');

Route::get('/navbar', [NavbarController::class, 'index'])->name('navbar');

Route::resource('inventories', InventoryController::class);