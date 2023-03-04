@extends('adminlte::page')

@section('title', 'Editar registro de reservas')

@section('content_header')
    <h1>Editar registro de reservas</h1>
@stop

@section('content')
<form action="/reserva/{{$reserva->codReserva}}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="" class="form-label">Cod Vehiculo</label>
        <input id="codVehiculo" name="codVehiculo" type="text" class="form-control" value="{{$reserva->codVehiculo}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Cod Empleado</label>
        <input id="codEmpleado" name="codEmpleado" type="text" class="form-control" value="{{$reserva->codEmpleado}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Fecha</label>
        <input id="fecha" name="fecha" type="text" class="form-control" value="{{$reserva->fecha}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Destino</label>
        <input id="destino" name="destino" type="text" class="form-control" value="{{$reserva->destino}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Kilometros</label>
        <input id="kilometros" name="kilometros" type="text" class="form-control" value="{{$reserva->kilometros}}">
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
