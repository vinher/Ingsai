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
    //Función para guardar datos
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
      return back()->with('mensaje','Datos Guardados');
    }
    //Función para visualizar datos en la tabla
    public function viewDates(){
      $save = App\Models\Cip::all();
      return view('cips',compact('save'));

    }

    public function editDates(Request $request, $id){
      $var = App\Models\Cip::findOrFail($id);
      $var->codigo=$request->codigo;
      $var->area=$request->area;
      $var->producto=$request->producto;
      $var->formato=$request->formato;
      $var->cantidad=$request->cantidad;
      $var->precioUnitario=$request->precioUnitario;
      $var->valorInventario=$request->valorInventario;
      $var->folio=$request->folio;
      $var->save();
      /*if($var->save()){
        
      }else{
        viewDates();
      }
      */         
    }

    public function borrar($id){
      $varEliminar = App\Models\Cip::findorFail($id);
      $varEliminar->delete();

      return back()->with('mensaje','Registro Eliminado');
    }

    public function retiro($id,Request $request){

    }
    public function historial(){
      return view('historial');
    }



    public function delete(){
      return view('desinfeccion');
    }
    public function uno(){
      return view('purificadores');
    }    
    public function dos(){
      return view('controlvoladores');
    }    
    public function tres(){
      return view('herramental');
    }    
    public function cuatro(){
      return view('epp');
    }    
    public function cinco(){
      return view('limpieza');
    }    

    public function siete(){
      return view('cotizacion');
    }    
    public function ocho(){
      return view('requisicion');
    }    




  }
