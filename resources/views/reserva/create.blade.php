@extends('adminlte::page')

@section('title', 'Registro de reservas')

@section('content_header')
    <h1>Registro de reservas</h1>
@stop

@section('content')
<form action="/reserva" method= "POST">
    @csrf

    <div class="mb-3">
        <label for="" class="form-label">cod Vehiculo</label>
        <input id="codVehiculo" name="codVehiculo" type="text" class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">cod Empleado</label>
        <input id="codEmpleado" name="codEmpleado" type="text" class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Fecha</label>
        <input id="fecha" name="fecha" type="text" class="form-control"tabindex="1" >
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Destino</label>
        <input id="destino" name="destino" type="text" class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">kilometros</label>
        <input id="kilometros" name="kilometros" type="text" class="form-control"tabindex="1" >
    </div>
    <a href="/reserva" class="btn btn-secondary" >Cancelar</a>
    <button type="submit" class="=btn btn-primary" >Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
