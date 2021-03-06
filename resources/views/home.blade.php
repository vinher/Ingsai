@extends('adminlte::page')

@section('title', 'INGSAI S.A. DE C.V.')

@section('content_header')

@stop

@section('content')
<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Historial de Retiros</h5>
        <p class="card-text">Aqui podras encontrar en que se gasto el material y en quien</p>
        <a href="{{route('viewDatos')}}" class="btn btn-primary">Verificar</a>
      </div>
    </div>
  </div>


  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Clientes</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
</div>
@stop

@section('js')
@stop
