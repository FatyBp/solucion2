<?php

use App\Http\Controllers\AltasBajas;
use App\Http\Controllers\Inicio;
use App\Models\AltaBaja;
use Illuminate\Support\Facades\Route;

Route::get('/', [Inicio::class, 'index'])->name('inicio');
Route::get('/AltasBajas',[AltasBajas::class, 'index'])->name('altasBajas');
Route::get('/create',[AltasBajas::class, 'create'])->name('create');
Route::post('/store',[AltasBajas::class, 'store'])->name('store');
Route::get('/edit/{id}', [AltasBajas::class, 'edit'])->name('edit');
Route::put('update/{id}', [AltaBaja::class, 'update'])->name('update');
Route::get('/show/{id}',[AltaBaja::class,'show'])->name('show');
Route::delete('/destroy/{id}',[AltaBaja:: class, 'destroy'])->name('destroy');
