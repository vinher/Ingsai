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
//Ruta para guardar lo retiros y actualizar la tabla de Control Integral de Plagas
Route::post('/saveHistory/{id}',[App\Http\Controllers\HistoryController::class,'saveHistory'])->name('saveHistory');

//Vista de la categoria Desinfección: Donde vamos a guardar los datos de la misma
Route::post('/guardarDesinfeccion',[App\Http\Controllers\DecController::class,'saveDesc'])->name('guardarDesinfeccion');

//Vista de la categoria Control Integral de Plagas: Donde retornamos los valores guardados
Route::get('/desinfeccion',[App\Http\Controllers\DecController::class,'viewDates'])->name('viewDates');

Route::get('/cips/{id}',[App\Http\Controllers\CipController::class,'editDates'])->name('edit');

Route::put('/edit/{id}',[App\Http\Controllers\CipController::class,'editDates'])->name('editDates');

Route::put('/editDesc/{id}',[App\Http\Controllers\DecController::class,'editDesc'])->name('editDesc');


//Purificadores


Route::get('/purificadores',[App\Http\Controllers\PurificadorController::class,'home'])->name('desinfeccion');

Route::post('/savePurificador',[App\Http\Controllers\PurificadorController::class,'savePuri'])->name('savePurificador');



//CDV

Route::get('/controlvoladores',[App\Http\Controllers\CdVoladoreController::class,'home'])->name('desinfeccion');

Route::post('/saveCdV',[App\Http\Controllers\CdVoladoreController::class,'savePuri'])->name('saveCdV');

//Herramental

Route::get('/herramental',[App\Http\Controllers\HerramentalController::class,'home'])->name('herramental');

Route::post('/saveHerramental',[App\Http\Controllers\HerramentalController::class,'saveHerramental'])->name('saveHerramental');


//EPP
Route::get('/epp',[App\Http\Controllers\EppController::class,'home'])->name('home');

Route::post('/saveEpp',[App\Http\Controllers\EppController::class,'SaveEpps'])->name('saveEpp');


Route::delete('/eliminar/{id}',[App\Http\Controllers\CipController::class,'borrar'])->name('borrar');

Route::get('/retiro/{id}',[App\Http\Controllers\CipController::class,'retiro'])->name('retiro');



//Liempieza
Route::get('/epp',[App\Http\Controllers\LimpiezaController::class,'home'])->name('epp');

Route::post('/savelimp',[App\Http\Controllers\LimpiezaController::class,'saveClean'])->name('savelimp');



Route::get('/historial',[App\Http\Controllers\HistoryController::class,'historial'])->name('historial');

Route::get('/historial',[App\Http\Controllers\HistoryController::class,'viewDatos'])->name('viewDatos');



Route::get('/epp',[App\Http\Controllers\CipController::class,'cuatro'])->name('desinfeccion');
Route::get('/limpieza',[App\Http\Controllers\CipController::class,'cinco'])->name('desinfeccion');


Route::get('/cotizacion',[App\Http\Controllers\CipController::class,'siete'])->name('desinfeccion');
Route::get('/requisicion',[App\Http\Controllers\CipController::class,'ocho'])->name('desinfeccion');