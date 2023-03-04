@extends('adminlte::page')

@section('title', 'Registro de autos')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<form action="/auto" method= "POST">
    @csrf

    <div class="mb-3">
        <label for="" class="form-label">Descripcion</label>
        <input id="Descripcion" name="Descripcion" type="text" class="form-control" tabindex="1">
    </div>
    <a href="/auto" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="=btn btn-primary" tabindex="4">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
