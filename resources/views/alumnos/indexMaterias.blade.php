
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
                        <th>materias</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($alumnos as $alumno)
                        <tr>
                            <td>{{ $alumno->id }}</td>
                            <td>{{ $alumno->nombre }}</td>
                            <td>{{ $alumno->apellido }}</td>
                            <td>{{ $alumno->email }}</td>
                            <td> 
                                @forelse ($alumno->materias as $materia)
                                    {{ $materia->nombre }} ({{ $materia->creditos }} creditos)<br>
                                @empty
                                    No tiene materias registradas
                                @endforelse</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3">No hay matriculas disponibles.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    @else
        <div class="alert alert-info">
            No hay Alumnos registrados.
        </div>
    @endif
</div>