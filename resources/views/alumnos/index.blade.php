
<div class="container">
    <h1 class="mb-4">alumnos</h1>

    @if(isset($alumnos) && $alumnos->count())
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>alumno_id</th>
                        <th>nombre</th>
                        <th>apellido</th>
                        <th>email</th>
                        <th>carrera</th>
                        <th>matricula</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($alumnos as $alumno)
                        <tr>
                            <td>{{ $alumno->id }}</td>
                            <td>{{ $alumno->nombre }}</td>
                            <td>{{ $alumno->apellido }}</td>
                            <td>{{ $alumno->email }}</td>
                            <td>{{ $alumno->matricula->carrera }}</td>
                            <td>{{ $alumno->matricula->matricula}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <div class="alert alert-info">
            No hay Alumnos registrados.
        </div>
    @endif
</div>