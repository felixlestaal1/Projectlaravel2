@extends('adminlte::page')

@section('title', 'Editar registro de vehiculos')

@section('content_header')
    <h1>Editar registro de vehiculos</h1>
@stop

@section('content')
<form action="/auto/{{$auto->codVehiculo}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Descripcion</label>
        <input id="Descripcion" name="Descripcion" type="text" class="form-control" value="{{$auto->Descripcion}}">
    </div>
    <a href="/auto" class="btn btn-secondary" >Cancelar</a>
    <button type="submit" class="=btn btn-primary" >Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
