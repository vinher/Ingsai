@extends('adminlte::page')

@section('title','Historial')

@section('content_header')
  <h1>
      Historial    
  </h1>

@stop

@section('content')

<div class="container-fluid">
  <div class="row">
      <div class="col-12">
          <div class="card">
              <div class="card-header">
                  <h3 class="card-title">Historial</h3>

              </div>
          <!-- /.card-header -->
          <div class="card-body">
              <table id="categories" class="table table-bordered table-striped">
                  <thead>
                      <tr>

                          <th>Responsable</th>
                          <th>Quien Entrego</th>
                          <th>Motivo</th>
                          <th>Acciones</th>
                      </tr>
                  </thead>
                  <tbody>
                    @foreach ($var as $datos)
                          
                      <tr>
                          <td>{{$datos->nombreresponsable}}</td>
                          <td>{{$datos->quienentrega}}</td>
                          <td>{{$datos->motivo}}</td>
                          <td>
                          <a href="" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-edit-category{{$datos->id}}">Ver Detalles</a>
                                                    <!--Ventana Modal Para Ver Los Detalles De El Retiro-->
                                                    <div class="modal fade" id="modal-edit-category{{$datos->id}}">
                                                      <div class="modal-dialog">
                                                          <div class="modal-content bg-default">
                                                              <div class="modal-header">
                                                                  <h4 class="modal-title">Detalles</h4>
                                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                      <span aria-hidden="true">&times;</span></button>
                                                                  </div>
                                                              <div class="modal-body">
                                                            <form action = ""method="">
                                                              @csrf
                                                              <div class="form-group">
                                                                <label for="text">Nombre del Responsable</label>
                                                                <p class="fw-normal">{{$datos->nombreresponsable}}</p>
                                                                
                                                              </div>
                        
                                                              <div class="form-group">
                                                                <label for="text">Quien Entrego</label>
                                                                <p class="fw-normal">{{$datos->quienentrega}}</p>
                                                                
                                                              </div>
                                                              <div class="form-group">
                                                                <label for="text">Motivo</label>
                                                                <p class="fw-normal">{{$datos->motivo}}</p>
                                                              </div>
                                                              <div class="form-group">
                                                                <label for="text">Articulos</label>
                                                                <p class="fw-normal">{{$datos->articulo}}</p>
                                                              </div>
                                                              <div class="form-group">
                                                                <label for="text">Cantidad</label>
                                                                <p class="fw-normal">{{$datos->cantidad}}</p>
                                                              </div>
                                                              <div class="form-group">
                                                                <label for="text">Fecha:</label>
                                                                <p class="fw-normal">{{$datos->created_at}}</p>
                                                              </div>
                        
                        
                                                              <div class="modal-footer justify-content-between">
                                                                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cerrar</button>
                                                                  <button type="submit" class="btn btn-outline-primary">Descargar</button>
                                                              </div>
                                                              </form>
                                                          </div>
                                                        <!-- /.modal-content -->
                                                      </div>
                                                      <!-- /.modal-dialog -->
                                                  </div>
                        
                        </td>
                        </tr>
                        @endforeach
                      </tbody>
                  <tfoot>
                      <tr>
                        <th>Responsable</th>
                        <th>Quien Entrego</th>
                        <th>Motivo</th>
                        <th>Acciones</th>
                      </tr>                  
                    </tfoot>
              </table>
              
          </div>
          <!-- /.card-body -->
          </div>
          <!-- /.card -->
          
        </div>
      <!-- /.col -->
  </div>
  <button class="btn btn-success btn-sm">Exportar a PDF</button>
          <div class="container"></div>
  <!-- /.row -->
</div>
@stop

@section('js')
<script>
$(document).ready(function() {
    $('#categories').DataTable( {
        "order": [[ 3, "desc" ]]
    } );
} );
</script>
@stop



