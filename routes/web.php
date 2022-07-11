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

    Route::get('/pessoas/membros', [PessoaController::class, 'membro'])->name('pessoas.membro');
    Route::get('/pessoas/visitantes', [PessoaController::class, 'visitante'])->name('pessoas.visitante');
    Route::get('/pessoas/aniversariantes', [PessoaController::class, 'aniversariante'])->name('pessoas.aniversariante');
    Route::get('/pessoas/ultimosvisitantes', [PessoaController::class, 'ultimoVisitante'])->name('pessoas.ultimovisitante');
    Route::get('/pessoas/idades', [PessoaController::class, 'teste'])->name('pessoas.idade');
    Route::get('/pessoas/criar', [PessoaController::class, 'create'])->name('pessoas.criar');
    Route::post('/pessoas/store', [PessoaController::class, 'store'])->name('pessoas.store');
    Route::get('/pessoas/{pessoa}/editar', [PessoaController::class, 'edit'])->name('pessoas.editar');
    Route::put('/pessoas/{pessoa}/update', [PessoaController::class, 'update'])->name('pessoas.update');
    Route::delete('/pessoas/{pessoa}/delete', [PessoaController::class, 'destroy'])->name('pessoas.delete');

    Route::resource('usuarios', UsuarioController::class);
});
