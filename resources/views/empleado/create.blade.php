@extends('adminlte::page')

@section('title', 'Registro de empleados')

@section('content_header')
    <h1>Registro de empleados</h1>
@stop

@section('content')
<form action="/empleado" method= "POST">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">cod Oficina</label>
        <input id="codOficina" name="codOficina" type="text" class="form-control"tabindex="1" >
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Apellidos</label>
        <input id="apellidos" name="apellidos" type="text" class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Salario</label>
        <input id="salario" name="salario" type="text" class="form-control"tabindex="1" >
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Fecha</label>
        <input id="fecha" name="fecha" type="text" class="form-control" tabindex="1">
    </div>
    <a href="/empleado" class="btn btn-secondary" >Cancelar</a>
    <button type="submit" class="=btn btn-primary" >Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop
