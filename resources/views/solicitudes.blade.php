@extends('adminlte::page')

@section('title', 'Control Integral de Plagas')

@section('content_header')

<h1>
    Control Solicitudes de Requisición
    
    <button type="button" class="btn btn-outline-primary " data-toggle="modal" data-target="#modal-create-category" >
        Generar Requisición
    </button>

</h1>

@stop
@section('content')

@if(session('msj'))
<div class="alert alert-success">
  {{session('msj')}}
</div>
@endif


<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Articulos</h3>

                </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="categories" class="table table-bordered table-striped">
                    <thead>
                        <tr>

                            <th>Nombre</th>
                            <th>Fecha de Salida</th>
                            <th>Cantidad</th>
                            <th>Articulo</th>
                            <th>Motivo</th>
                            <th>Entrego</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>

                        
                
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <button class="btn btn-sm btn-danger">Exportar PDF  </button>
                            </td>
                        </tr>

                    </tbody>



                </table>
            </div>
            <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</div>


<!--Ventana Modal Para Guardar Articulos-->
<div class="modal fade" id="modal-create-category">
    <div class="modal-dialog">
        <div class="modal-content bg-default">
            <div class="modal-header">
                <h4 class="modal-title">Requisición</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                </div>
            <div class="modal-body">
              <form action = "{{route('saveRequisicion')}}" method="POST">
                @csrf
                <div class="form-group">
                  <label for="text">Nombre del Solicitante</label>
                  <input type="text" class="form-control" name="nombre" placeholder="Introduce el Código del Producto" required>
                </div>
                <div class="form-group">
                    <label for="text">Fecha De Salida</label>
                    <input type="date" class="form-control" name="fecha" placeholder="Introduce el Código del Producto" required>
                </div>
                  
                <div class="form-group">
                  <label for="text">Cantidad</label>
                  <input type="number" class="form-control" name="cantidad" placeholder="Nombre del Producto" required>
                </div>

                <div class="form-group">
                  <label for="text">Articulo</label>
                  @foreach ($view as $item)
                  <!--Hacemos Referencia al controlador Requisicion donde el 
                            metodo solicitud me sirve para hacer el listado 
                            de los materiales que hay en almacen-->
                  <select class="form-control" name="articulo" value="{{$item->producto}}">
                    <option selected value="{{$item->producto}}" required>Opciones</option>
                        <option value="{{$item->producto}}" name="articulo">{{$item->producto}}</option>
                    </select>     
                   @endforeach
                    
                  
                </div>
                
                <div class="form-group">
                  <label for="text">Motivo</label>
                  <input type="text" class="form-control" name="motivo" placeholder="Motivo de Entrega" required>
                </div>

                <div class="form-group">
                  <label for="text">Entrego</label>
                  <input type="text" class="form-control" name="entrego" placeholder="Quien Entrega" required>
                </div>


            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-outline-primary">Guardar</button>
            </div>
            </form>
        </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

@stop