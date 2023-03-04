@extends('adminlte::page')

@section('title', 'Editar registro de empleados')

@section('content_header')
    <h1>Editar registro de empleados</h1>
@stop

@section('content')
<form action="/empleado/{{$empleado->codEmpleado}}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1" value="{{$empleado->nombre}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Apellidos</label>
        <input id="apellidos" name="apellidos" type="text" class="form-control" tabindex="1" value="{{$empleado->apellidos}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Salario</label>
        <input id="salario" name="salario" type="text" class="form-control"tabindex="1" value="{{$empleado->salario}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">fecha</label>
        <input id="fecha" name="fecha" type="text" class="form-control" tabindex="1" value="{{$empleado->fecha}}">
    </div>

    <a href="/empleado" class="btn btn-secondary" >Cancelar</a>
    <button type="submit" class="=btn btn-primary" >Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
