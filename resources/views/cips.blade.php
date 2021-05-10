@extends('adminlte::page')

@section('title', 'Almacén')

@section('content_header')
<h1>
    Almacén
    <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#modal-create-category" >
        Agregar Articulos
    </button>
</h1>

@stop
@if($errors->any())
  @foreach($errors->all() as $error)
  <p>{{$error}}</p>
  @endforeach
@endif
@error('codigo')
<div class="alert alert-danger">
  <p>Verifique el Código</p>
</div>
@enderror
@section('content')
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
                            <th>Código</th>
                            <th>Área</th>
                            <th>Producto</th>
                            <th>Formato</th>
                            <th>Cantidad En Existencia</th>
                            <th>Precio Unitario</th>
                            <th>Valor De Inventario</th>
                            <th>Folio de Factura</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach ($save as $item)

                        <tr>
                            <td>{{$item->codigo }}</td>
                            <td>{{$item->area }}</td>
                            <td>{{$item->producto }}</td>
                            <td>{{$item->formato }}</td>
                            <td>{{$item->cantidad }}</td>
                            <td>{{$item->precioUnitario }}</td>
                            <td>{{$item->valorInventario }}</td>
                            <td>{{$item->folio }}</td>
                            <td>
                              <button type="button" name="button" class="btn btn-outline-primary">Editar</button>
                            </td>

                        </tr>
                        @endforeach()
                    </tbody>
                    <tfoot>
                        <tr>
                          <th>Código</th>
                          <th>Área</th>
                          <th>Producto</th>
                          <th>Formato</th>
                          <th>Cantidad En Existencia</th>
                          <th>Precio Unitario</th>
                          <th>Valor De Inventario</th>
                          <th>Folio de Factura</th>
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
    <!-- /.row -->
</div>

<!-- modal -->
<div class="modal fade col-12" id="modal-create-category">
    <div class="modal-dialog">
        <div class="modal-content bg-default">
            <div class="modal-header">
                <h4 class="modal-title">Agregar Articulos</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                </div>
            <div class="modal-body">
              <form action = "{{route ('save')}}"method="POST">
                @csrf

                <div class="form-group">
                  <label for="text">Código</label>
                  <input type="text" class="form-control" name="codigo" placeholder="Introduce el Código del Producto" required>
                </div>
                <div class="form-group">
                  <label for="text">Área</label>
                  <select class="form-control" name="area" value="">
                    <option selected value="" required>Opciones</option>
                    <option value="Estacion de Roedores">Estacion de Roedores</option>
                    <option value="Trampas Capturas de Roedores">Trampas Capturas de Roedores</option>
                    <option value="Llave para Estación">Llave para Estación</option>
                    <option value="Aritamento Para Veneno">Aritamento Para Veneno</option>
                    <option value="Trampas Monitoreo de Insectos">Trampas Monitoreo de Insectos</option>
                    <option value="Trampas Para Especies Menores">Trampas Para Especies Menores</option>
                    <option value="Estacion Control de Plagas">Estacion Control de Plagas</option>

                  </select>
                </div>
                <div class="form-group">
                  <label for="text">Producto</label>
                  <input type="text" class="form-control" name="producto" placeholder="Nombre del Producto" required>
                </div>
                <div class="form-group">
                  <label for="text">Formato</label>
                  <select class="form-control" name="formato" value="">
                    <option selected value="" required>Opciones</option>
                    <option value="Piezas">Piezas</option>
                    <option value="Litros">Litros</option>
                    <option value="Equipo">Equipo</option>
                    <option value="Gramos">Gramos</option>
                    <option value="Kilogramos">Kilogramos</option>

                  </select>
                </div>

                <div class="form-group">
                  <label for="text">Cantidad En Existencia</label>
                  <input type="text" class="form-control" name="cantidad" placeholder="Cantidad" required>
                </div>
                <div class="form-group">
                  <label for="text">Precio Unitario</label>
                  <input type="text" class="form-control" name="precioUnitario" placeholder="Precio Unitario" required>
                </div>
                <div class="form-group">
                  <label for="text">Valor de Inventario</label>
                  <input type="text" class="form-control" name="valorInventario" placeholder="Valor de Inventario"required>
                </div>
                <div class="form-group">
                  <label for="text">Folio de Factura</label>
                  <input type="text" class="form-control" name="folio" placeholder="Folio" required>
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
<!-- /.modal -->
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
