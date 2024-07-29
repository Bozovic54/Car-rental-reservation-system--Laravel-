<?php

use App\Http\Controllers\RezervacijaController;
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

Route::get('/',[RezervacijaController::class,'homepage'])->name('homepage');
Route::get('/auto/{id}',[RezervacijaController::class,'autoDetaljno'])->name('auto.detaljno');
Route::post('/auto/{id}',[RezervacijaController::class,'unosRezervacije'])->name('auto.rezervacija');
Route::get('/rezervacije',[RezervacijaController::class,'spisakRezervacija'])->name('spisak');
Route::get('/rezervacija/{id}',[RezervacijaController::class,'rezervacijaDetaljno'])->name('rezervacija.detaljno');
Route::post('/rezervacija/{id}',[RezervacijaController::class,'promenaStatusa'])->name('promena.statusa');