<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class HistoryController extends Controller
{
    //
    public function saveHistory(Request $request){
        $request->validate([
          'nombreresponsable' => 'required',
          'quienentrega' => 'required',
          'motivo' =>'required' ,
          'articulo' =>'required' ,
          'cantidad' =>'required' ,
           
        ]);
  
        $dato = new App\Models\History;
        $dato->nombreresponsable = $request->nombreresponsable;
        $dato->quienentrega = $request->quienentrega;
        $dato->motivo = $request->motivo;
        $dato->articulo= $request->articulo;
        $dato->cantidad = $request->cantidad;

  
        $dato->save();
        return back()->with('mensaje','Datos Guardados');
      }

    public function viewDatos(){
        $var = App\Models\History::all();
        return view('historys',compact('var'));
    }  

}
