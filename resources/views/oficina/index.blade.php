@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<a href="oficina/create" class="btn btn-primary">Crear</a>
<table class="table table-dark table-striped mt-4">
    <thead>
        <tr>
            <th scope="col">codOficina</th>
            <th scope="col">Direccion</th>
            <th scope="col">Localidad</th>
            <th scope="col">Provincia</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ( $oficina as $oficina )
        <tr>
            <td>{{$oficina->codOficina}}</td>
            <td>{{$oficina->Direccion}}</td>
            <td>{{$oficina->Localidad}}</td>
            <td>{{$oficina->Provincia}}</td>
            <td>
                <form action="{{route('oficina.destroy',$oficina->codOficina)}}" method="POST">
                <a href="/oficina/{{$oficina->codOficina}}/edit" class="btn btn-info">Editar</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </td>
        </tr>

        @endforeach
    </tbody>
</table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
