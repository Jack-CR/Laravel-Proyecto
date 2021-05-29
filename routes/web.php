<?php

use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
})->name('inicio.index');

/* route::get('/Contacto',function(){
    return view('contacto');
})->name('contacto'); */

//controlador de vista email y enviar correos
Route::get('/contacto', [MailController::class,'indexContacto'])->name('contacto.index');
Route::post('/contacto',[MailController::class,'store'])->name('contacto.store');

//controlador de login,registros
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
