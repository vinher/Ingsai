<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/cips/{id}',[App\Http\Controllers\CipController::class,'editDates'])->name('edit');

Route::put('/edit/{id}',[App\Http\Controllers\CipController::class,'editDates'])->name('editDates');