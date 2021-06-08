<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class DecController extends Controller
{
    //
    public function desinfeccion(){
        return view('desinfeccion');
    }
    public function saveDesc(Request $request){
        $request->validate([
            'codigo' => 'required',
            'producto' => 'required',
            'formato' =>'required' ,
            'fecha' =>'required' ,
            'cantidadExistencia' =>'required' ,
            'precioUnitario' =>'required' ,
            'valorInventario' =>'required' ,
            'folio' =>'required' 
            
        ]);

        $dato = new App\Models\Dec;
        $dato->codigo = $request->codigo;
        $dato->producto = $request->producto;
        $dato->formato = $request->formato;
        $dato->fecha= $request->fecha;
        $dato->cantidadExistencia = $request->cantidadExistencia;
        $dato->precioUnitario = $request->precioUnitario;
        $dato->valorInventario = $request->valorInventario;
        $dato->folio = $request->folio;
        $dato->save();
        
        return back()->with('mensaje','Datos Guardados');
        
    }
    //Función para visualizar datos en la tabla
    public function viewDates(){
        $save = App\Models\Dec::all();
        return view('desinfeccion',compact('save'));
      
      }
}
