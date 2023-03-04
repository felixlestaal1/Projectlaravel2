@extends('adminlte::page')

@section('title', 'Reservas')

@section('Reservas')
    <h1>Dashboard</h1>
@stop

@section('content')
<a href="reserva/create" class="btn btn-primary">Crear</a>
<table class="table table-dark table-striped mt-4">
    <thead>
        <tr>
            <th scope="col">codReserva</th>
            <th scope="col">codVehiculo</th>
            <th scope="col">codEmpleado</th>
            <th scope="col">fecha</th>
            <th scope="col">destino	</th>
            <th scope="col">Kilometros</th>
            <th scope="col">Acciones</th>

        </tr>
    </thead>
    <tbody>
        @foreach ( $reserva as $reserva )
        <tr>
            <td>{{$reserva->codReserva}}</td>
            <td>{{$reserva->codVehiculo}}</td>
            <td>{{$reserva->codEmpleado}}</td>
            <td>{{$reserva->fecha}}</td>
            <td>{{$reserva->destino	}}</td>
            <td>{{$reserva->kilometros}}</td>
            <td>
                <form action="{{route('reserva.destroy',$reserva->codReserva)}}" method="POST">
                <a href="/reserva/{{$reserva->codReserva}}/edit" class="btn btn-info">Editar</a>
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
