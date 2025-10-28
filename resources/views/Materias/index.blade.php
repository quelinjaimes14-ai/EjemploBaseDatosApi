
<div class="container">
    <h1 class="mb-4">Materias</h1>

    @if(isset($clases) && $clases->count())
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>materia_id</th>
                        <th>nombre</th>
                        <th>carrera</th>
                        <th>creditos</th>
                        <th>inscritos</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($clases as $materia)
                        <tr>
                            <td>{{ $materia->id }}</td>
                            <td>{{ $materia->nombre }}</td>
                            <td>{{ $materia->carrera }}</td>
                            <td>{{ $materia->creditos }}</td>
                            <td> 
                               // @forelse ($alumno->clases as $alumno)
                              //      {{ $alumno->nombre }} ({{ $materia->carrera }} creditos)<br>
                              //  @empty
                              //      No tiene materias registrados
                              //  @endforelse</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3">No hay materias registradas.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    @else
        <div class="alert alert-info">
            No hay materias registradas.
        </div>
    @endif
</div>