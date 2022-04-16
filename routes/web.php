<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PessoaController;

Auth::routes([
    'register' => true
]);
Route::get('/', function () {
    return view('auth.login');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('home', [HomeController::class, 'index'])->name('home');
    Route::resource('pessoas', PessoaController::class);
});