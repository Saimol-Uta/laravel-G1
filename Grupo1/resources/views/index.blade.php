@section('content')
    <div class="container">
        <h1>Lista de Alumnos</h1>
        <a href="{{ route('alumnos.create') }}" class="btn btn-primary mb-3">Agregar Alumno</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Cédula</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Dirección</th>
                    <th>Teléfono</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($alumnos as $alumno)
                <tr>
                    <td>{{ $alumno->id }}</td>
                    <td>{{ $alumno->cedula }}</td>
                    <td>{{ $alumno->nombre }}</td>
                    <td>{{ $alumno->apellido }}</td>
                    <td>{{ $alumno->direccion }}</td>
                    <td>{{ $alumno->telefono }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>