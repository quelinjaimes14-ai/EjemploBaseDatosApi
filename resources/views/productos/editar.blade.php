<form action="{{ route('productos.update', $producto->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label for="descripcion">Descripción:</label>
        <input type="text" name="descripcion" id="descripcion" value="{{ old('descripcion', $producto->descripcion) }}" required>
    </div>

    <div>
        <label for="categorias">Categorías:</label>
        <input type="text" name="categorias" id="categorias" value="{{ old('categorias', $producto->categorias) }}" required>
    </div>

    <div>
        <label for="cantidad">Cantidad:</label>
        <input type="number" name="cantidad" id="cantidad" value="{{ old('cantidad', $producto->cantidad) }}" required>
    </div>

    <div>
        <label for="precio">Precio:</label>
        <input type="number" step="0.01" name="precio" id="precio" value="{{ old('precio', $producto->precio) }}" required>
    </div>

    <button type="submit">Actualizar</button>
</form>