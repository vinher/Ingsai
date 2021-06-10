<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class HerramentalController extends Controller
{

    public function home(){
        return view('herramental');
    }
    public function saveHerramental(Request $request){
        $request->validate([
          'codigo' => 'required',
          'area' => 'required',
          'producto' =>'required' ,
          'formato' =>'required' ,
          'cantidadExistencia' =>'required' ,
          'precioUnitario' =>'required' ,
          'valorInventario' =>'required' ,
          'folio' =>'required'
  
        ]);
  
        $dato = new App\Models\Herramental();
        $dato->codigo = $request->codigo;
        $dato->area = $request->area;
        $dato->producto = $request->producto;
        $dato->formato= $request->formato;
        $dato->cantidadExistencia = $request->cantidadExistencia;
        $dato->precioUnitario = $request->precioUnitario;
        $dato->valorInventario = $request->valorInventario;
        $dato->folio =  $request->folio;
  
        $dato->save();
        return back()->with('mensaje','Datos Guardados');
      }
}
