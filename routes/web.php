<?php

use App\Http\Controllers\UserController;
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
    return view('cadastro-nome');
});

Route::post('save-user', [UserController::class, 'store'])->name('save');

Route::get('/lista', [UserController::class, 'showLista'])->name('lista-cadastro');
