<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cip;
use App;
class RequisicionController extends Controller
{
    public function home(){
        return view('requisicion');
    }

    public function save(Request $request){
        $dato = new App\Models\Requisicion();
        $dato->nombre = $request->nombre;
        $dato->apellidos = $request->apellidos;
        $dato->puesto = $request->puesto;

        $dato->save();
        return back()->with('msg','Datos Guardados');

    }

    //Usuarios de la empresa trabajadores
    public function viewDates(){
        $view = App\Models\Requisicion::all();
        return view('requisicion',compact('view'));
        
      }


    //En este metodo lo ocupamos para listar los articulos
    //de la tabla almacen el cual solo ocupamos el campo articulos para 
    //Listarlos en la vista solicitudes en el formulario de requisición  
    public function solicitud(){
        $view = App\Models\Cip::all();
        return view('solicitudes',compact('view'));
        
      
    }  
    public function view(){
        $date = App\Models\Sum::all();
        return view('solicitudes',compact('date'));

    }


    public function coti(){
        return view('cotizacion');
    }
  
}
