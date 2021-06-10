<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class PurificadorController extends Controller
{
    //
    public function home(){
        return view('purificadores');
    }
    //Función para guardar datos
    public function savePuri(Request $request){
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
  
        $dato = new App\Models\Purificador;
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
      //Función para visualizar datos en la tabla
      public function viewDates(){
        $save = App\Models\Purificador::all();
        return view('purificadores',compact('save'));
  
      }
  
      public function editDates(Request $request, $id){
        $var = App\Models\Purificador::findOrFail($id);
        $var->codigo=$request->codigo;
        $var->area=$request->area;
        $var->producto=$request->producto;
        $var->formato=$request->formato;
        $var->cantidad=$request->cantidad;
        $var->precioUnitario=$request->precioUnitario;
        $var->valorInventario=$request->valorInventario;
        $var->folio=$request->folio;
        $var->save();
  
        return back()->with('mensaje','Datos Editados');
        /*if($var->save()){
          
        }else{
          viewDates();
        }
        */         
      }
  
      public function borrar($id){
        $varEliminar = App\Models\Purificador::findorFail($id);
        $varEliminar->delete();
  
        return back()->with('mensaje','Registro Eliminado');
      }
  

}
