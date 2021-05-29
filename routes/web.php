<?php

use App\Http\Controllers\MailController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


//controlador de los productos
Route::get('/',[ProductController::class,'index'])->name('inicio.index');
Route::get('/product/{id}',[ProductController::class,'show'])->name('product.show');
Route::get('/search/{buscar}',[ProductController::class,'search'])->name('product.search');

//controlador de vista email y enviar correos
Route::get('/contacto', [MailController::class,'indexContacto'])->name('contacto.index');
Route::post('/contacto',[MailController::class,'store'])->name('contacto.store');

//controlador de login,registros
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
