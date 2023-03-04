@extends('adminlte::page')

@section('title', 'Autos')

@section('content_header')
    <h1>Autos</h1>
@stop

@section('content')
<a href="auto/create" class="btn btn-primary">Crear</a>
<table class="table table-dark table-striped mt-4">
    <thead>
        <tr>
            <th scope="col">codVehiculo</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ( $auto as $auto )
        <tr>
            <td>{{$auto->codVehiculo}}</td>
            <td>{{$auto->Descripcion}}</td>
            <td>
                <form action="{{route('auto.destroy',$auto->codVehiculo)}}" method="POST">
                <a href="/auto/{{$auto->codVehiculo}}/edit" class="btn btn-info">Editar</a>
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
