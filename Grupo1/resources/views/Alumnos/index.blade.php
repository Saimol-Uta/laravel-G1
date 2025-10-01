@extends('layout.app')
@section('content')

@endsection
<div class="container mt-4">
<h1>Listado de Alumnos</h1>
<a href="{{ route('alumnos.create') }}" class="btn btn-primary mb-3">Nuevo Alumno</a>


<table class="table table-bordered">
    <thead>
        <tr>
            <th>Cedula</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Direccion</th>
            <th>Telefono</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($alumnos as $alumno)
        <tr>
            <td>{{ $alumno->cedula }}</td>
            <td>{{ $alumno->nombre }}</td>
            <td>{{ $alumno->apellido }}</td>
            <td>{{ $alumno->direccion }}</td>
            <td>{{ $alumno->telefono }}</td>
        </tr> 
        @empty
        <tr>
            <td>no hay alumnos</td>
        </tr>
        @endforelse
    </tbody>
</table>
</div>