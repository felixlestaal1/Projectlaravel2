@extends('adminlte::page')

@section('title', 'Registro de oficinas')

@section('content_header')
    <h1>Registro de oficinas</h1>
@stop

@section('content')
<form action="/oficina" method= "POST">
    @csrf

    <div class="mb-3">
        <label for="" class="form-label">Direccion</label>
        <input id="Direccion" name="Direccion" type="text" class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Localidad</label>
        <input id="Localidad" name="Localidad" type="text" class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Provincia</label>
        <input id="Provincia" name="Provincia" type="text" class="form-control"tabindex="1" >
    </div>
    <a href="/oficina" class="btn btn-secondary" >Cancelar</a>
    <button type="submit" class="=btn btn-primary" >Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
