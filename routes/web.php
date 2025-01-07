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
    'training'
])->names([
    'index' => 'pages.index',
    'about' => 'pages.about',
    'training' => 'pages.training',
]);

Route::get('pages/about', action: [PageController::class, 'about'])->name('pages.about');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('pages/training', [PageController::class, 'training'])->name('pages.training');

Route::get('/test-route', function () {
    dd(route('pages.about'));
});

Route::get('/', [PageController::class, 'index'])->name('home');

Route::resource('inventories', InventoryController::class);
