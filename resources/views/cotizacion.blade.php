@extends('adminlte::page')
@section('title', 'Cotizaciones')

@section('content_header')

<h1>
    Cotizaciones
   <div class="d-grid gap-2 d-md-flex justify-content-md-end "  >
    <button type="button" class=" btn btn-outline-primary d-grid gap-2 d-md-flex justify-content-md-end" data-toggle="modal" data-target="#modal-create-category" >
        Generar Cotizacion
    </button>
</div> 
</h1>

@stop
