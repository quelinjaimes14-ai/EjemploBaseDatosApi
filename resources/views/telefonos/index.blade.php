
<div class="container">
    <h1 class="mb-4">telefonos</h1>

    @if(isset($telefonos) && $telefonos->count())
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>alumno_id</th>
                        <th>nombre</th>
                        <th>apellido</th>
                        <th>email</th>
                        <th>tipo</th>
                        <th>telefono</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($telefonos as $telefono)
                        <tr>
                            <td>{{ $telefono->alumno_id }}</td>
                            <td>{{ $telefono->alumno->nombre }}</td>
                            <td>{{ $telefono->alumno->apellido }}</td>
                            <td>{{ $telefono->alumno->email }}</td>
                            <td>{{ $telefono->tipo }}</td>
                            <td>{{ $telefono->numero }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <div class="alert alert-info">
            No hay telefonos registrados.
        </div>
    @endif
</div>