<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Vista de la categoria Control Integral de Plagas: Donde vamos a guardar los datos de la misma
Route::post('/save',[App\Http\Controllers\CipController::class,'save'])->name('save');
//Vista de la categoria Control Integral de Plagas: Donde retornamos los valores guardados
Route::get('/cips',[App\Http\Controllers\CipController::class,'viewDates'])->name('viewDates');
//Vista de la categoria Control Integral de Plagas: Donde vamos a guardar los datos de la misma
Route::post('/saveHistory',[App\Http\Controllers\CipController::class,'saveHistory'])->name('saveHistory');


Route::get('/cips/{id}',[App\Http\Controllers\CipController::class,'editDates'])->name('edit');

Route::put('/edit/{id}',[App\Http\Controllers\CipController::class,'editDates'])->name('editDates');

Route::delete('/eliminar/{id}',[App\Http\Controllers\CipController::class,'borrar'])->name('borrar');

Route::get('/retiro/{id}',[App\Http\Controllers\CipController::class,'retiro'])->name('retiro');

Route::get('/historial',[App\Http\Controllers\CipController::class,'historial'])->name('historial');


Route::get('/desinfeccion',[App\Http\Controllers\CipController::class,'delete'])->name('desinfeccion');
Route::get('/purificadores',[App\Http\Controllers\CipController::class,'uno'])->name('desinfeccion');
Route::get('/controlvoladores',[App\Http\Controllers\CipController::class,'dos'])->name('desinfeccion');
Route::get('/herramental',[App\Http\Controllers\CipController::class,'tres'])->name('desinfeccion');
Route::get('/epp',[App\Http\Controllers\CipController::class,'cuatro'])->name('desinfeccion');
Route::get('/limpieza',[App\Http\Controllers\CipController::class,'cinco'])->name('desinfeccion');


Route::get('/cotizacion',[App\Http\Controllers\CipController::class,'siete'])->name('desinfeccion');
Route::get('/requisicion',[App\Http\Controllers\CipController::class,'ocho'])->name('desinfeccion');