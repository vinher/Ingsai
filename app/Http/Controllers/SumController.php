<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class SumController extends Controller
{
    //

    public function saveRequisicion(Request $request){
        $dat = new App\Models\Sum();
        $dat ->nombre = $request->nombre;
        $dat ->fecha = $request->fecha;
        $dat ->cantidad = $request->cantidad;
        $dat ->articulo = $request->articulo;
        $dat ->motivo = $request->motivo;
        $dat ->entrego = $request->entrego;

        $dat->save();
        return back()->with('msj','Datos Guardados');
    }

    public function viewDates(){
        $datos = App\Models\Sum::all();
        return view('requisicion',compact('datos'));
        
      }


}
