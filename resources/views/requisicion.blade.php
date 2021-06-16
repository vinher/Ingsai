@extends('adminlte::page')

@section('title', 'INGSAI S.A. DE C.V.')

@section('content_header')
            <h1>
                Requisición

                <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#modal-create-category" >
                    Agregar Usuarios
                </button>

            </h1>
@stop

@section('content')




@if(session('msg'))
<div class="alert alert-success">
  {{session('msg')}}
</div>
@endif

@foreach ($view as $item)


<div class="card clearfix">
  <div class="card-header">
    <b>Puesto que Desempeña:</b> {{$item->puesto}}

  </div>
  <div class="card-body ">
    <h5 class="card-title"><b>Nombre: </b> {{$item->nombre}}</h5>
    <p class="card-text"><b>Apellidos: </b>{{$item->apellidos}}</p>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end"> 
    <a href="{{route('solicitudes')}}" class="btn btn-primary " style="width: 200px;">Verificar</a>
      
  </div>
  </div>
</div>






@endforeach
  

  <div class="modal fade" id="modal-create-category">
    <div class="modal-dialog">
        <div class="modal-content bg-default">
            <div class="modal-header">
                <h4 class="modal-title">Datos del Empleado</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                </div>
            <div class="modal-body">
              <form action = "{{route('empleados')}}" method="POST">
                @csrf
                <div class="form-group">
                  <label for="text">Nombre</label>
                  <input type="text" class="form-control" name="nombre" placeholder="Nombre" required>
                </div>
                <div class="form-group">
                  <label for="text">Apellidos</label>
                  <input type="text" class="form-control" name="apellidos" placeholder="Apellidos" required>
                </div>
                <div class="form-group">
                  <label for="text">Puesto que desempeña</label>
                  <input type="text" class="form-control" name="puesto" placeholder="Puesto que Desempeña" required>
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

@section('js')
@stop
