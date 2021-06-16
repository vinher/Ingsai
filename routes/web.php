<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Vista de la categoria Control Integral de Plagas: Donde vamos a guardar los datos de la misma
Route::post('/save',[App\Http\Controllers\CipController::class,'save'])->name('save');
//Vista de la categoria Control Integral de Plagas: Donde retornamos los valores guardados
Route::get('/cips',[App\Http\Controllers\CipController::class,'viewDates'])->name('viewDates');
//Ruta para editar los datos del almacén
Route::put('/edit/{id}',[App\Http\Controllers\CipController::class,'editDates'])->name('editDates');
//Ruta para eliminar los datos del almacén
Route::delete('/eliminar/{id}',[App\Http\Controllers\CipController::class,'borrar'])->name('borrar');

//Requisición
Route::get('/requisicion',[App\Http\Controllers\RequisicionController::class,'viewDates'])->name('viewDates');
//Ruta para guardar los datos del empleado
Route::post('/empleados',[App\Http\Controllers\RequisicionController::class,'save'])->name('empleados');
//
Route::get('/solicitudes',[App\Http\Controllers\RequisicionController::class,'solicitud'])->name('solicitudes');

//
Route::post('/saveRequisicion',[App\Http\Controllers\SumController::class,'saveRequisicion'])->name('saveRequisicion');




Route::get('/cotizacion',[App\Http\Controllers\RequisicionController::class,'coti'])->name('cotizacion');







//Pendiente Historial
Route::post('/saveHistory/{id}',[App\Http\Controllers\HistoryController::class,'saveHistory'])->name('saveHistory');

Route::get('/retiro/{id}',[App\Http\Controllers\CipController::class,'retiro'])->name('retiro');

Route::get('/historial',[App\Http\Controllers\HistoryController::class,'historial'])->name('historial');

Route::get('/historial',[App\Http\Controllers\HistoryController::class,'viewDatos'])->name('viewDatos');




