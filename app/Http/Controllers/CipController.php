<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class CipController extends Controller
{
    //
    public function control(){
      return view("cips");
    }

    public function save(Request $request){
      $request->validate([
        'codigo' => 'required | unique:cips',
        'area' => 'required',
        'producto' =>'required' ,
        'formato' =>'required' ,
        'cantidad' =>'required' ,
        'precioUnitario' =>'required' ,
        'valorInventario' =>'required' ,
        'folio' =>'required'

      ]);

      $dato = new App\Models\Cip;
      $dato->codigo = $request->codigo;
      $dato->area = $request->area;
      $dato->producto = $request->producto;
      $dato->formato= $request->formato;
      $dato->cantidad = $request->cantidad;
      $dato->precioUnitario = $request->precioUnitario;
      $dato->valorInventario = $request->valorInventario;
      $dato->folio =  $request->folio;

      $dato->save();
      return back();
    }
    public function viewDates(){
      $save = App\Models\Cip::all();
      return view('cips',compact('save'));

    }
}
