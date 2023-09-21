<?php

use App\Http\Controllers\ProdutosController;

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/produtos/novo', [ProdutosController::class, 'create']);
Route::get('/produtos/novo', [ProdutosController::class, 'create'])->name('product.index');
Route::post('/produtos/novo', [ProdutosController::class, 'store'])->name('registrar_produto');
