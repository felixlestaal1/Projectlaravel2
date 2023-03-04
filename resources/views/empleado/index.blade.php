@extends('adminlte::page')

@section('title', 'Empleados')

@section('content_header')
    <h1>Empleados</h1>
@stop

@section('content')
<a href="empleado/create" class="btn btn-primary">Crear</a>
<table class="table table-dark table-striped mt-4">
    <thead>
        <tr>
            <th scope="col">codEmpleado	</th>
            <th scope="col">codOficina</th>
            <th scope="col">nombre</th>
            <th scope="col">apellidos</th>
            <th scope="col">salario</th>
            <th scope="col">fecha</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ( $empleado as $empleado )
        <tr>
            <td>{{$empleado->codEmpleado}}</td>
            <td>{{$empleado->codOficina}}</td>
            <td>{{$empleado->nombre}}</td>
            <td>{{$empleado->apellidos}}</td>
            <td>{{$empleado->salario}}</td>
            <td>{{$empleado->fecha}}</td>
            <td>
                <form action="{{route('empleado.destroy',$empleado->codEmpleado)}}" method="POST">
                <a href="/empleado/{{$empleado->codEmpleado}}/edit" class="btn btn-info">Editar</a>
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
