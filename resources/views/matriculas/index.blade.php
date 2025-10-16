
<div class="container">
    <h1 class="mb-4">Matrículas</h1>

    @if(isset($matriculas) && $matriculas->count())
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
                    @foreach($matriculas as $matricula)
                        <tr>
                            <td>{{ $matricula->alumno_id }}</td>
                            <td>{{ $matricula->alumno->nombre }}</td>
                            <td>{{ $matricula->alumno->apellido }}</td>
                            <td>{{ $matricula->alumno->email }}</td>
                            <td>{{ $matricula->carrera }}</td>
                            <td>{{ $matricula->matricula }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <div class="alert alert-info">
            No hay matrículas registradas.
        </div>
    @endif
</div>