<?php

use App\Http\Controllers\chgController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use Illuminate\Support\Facades\Route;

Route::get('/', [homeController::class, 'home'])->name('home');
Route::get('/principal', [PrincipalController::class, 'principal'])->name('principal');
Route::get('/sobreNos', [SobreNosController::class, 'sobreNos'])->name('sobreNos');
Route::get('/contato', [ContatoController::class, 'contato'])->name('contato');
Route::get('/cgh',[chgController::class,'chg'])->name('cgh');
