<?php

use App\Http\Controllers\Admin\UsuarioController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PessoaController;
use Illuminate\Support\Facades\Auth;

Auth::routes([
    'register' => false
]);

Route::get('/', function () {
    return view('auth.login');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('home', [HomeController::class, 'index'])->name('home');

    Route::get('/pessoas/membros', [PessoaController::class, 'membro'])->name('pessoas.membros');
    Route::get('/pessoas/visitantes', [PessoaController::class, 'visitante'])->name('pessoas.visitantes');

    Route::resource('pessoas', PessoaController::class);
    Route::resource('usuarios', UsuarioController::class);
});
