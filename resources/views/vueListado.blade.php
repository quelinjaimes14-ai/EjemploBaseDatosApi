<!-- resources/views/vueListado.blade.php -->
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Listado de Alumnos</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Vue 3 y Axios desde CDN -->
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.prod.js"></script>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        table { border-collapse: collapse; width: 100%; margin-top: 12px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background: #f4f4f4; }
        button { padding: 8px 12px; cursor: pointer; }
    </style>
</head>
<body>
    <div id="app">
        <h1>Listado de Alumnos</h1>
        <div>
            <button @click="fetchAlumnos">Actualizar lista</button>
        </div>

        <table v-if="alumnos.length">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Email</th>
                    <th>Edad</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="alumno in alumnos" :key="alumno.id">
                    <td>@{{ alumno.id }}</td>
                    <td>@{{ alumno.nombre }}</td>
                    <td>@{{ alumno.apellido }}</td>
                    <td>@{{ alumno.email }}</td>
                    <td>@{{ alumno.edad }}</td>
                </tr>
            </tbody>
        </table>

        <p v-else>No hay alumnos para mostrar.</p>

        <p v-if="error" style="color: red;">Error: @{{ error }}</p>
    </div>

    <script>
    const { createApp } = Vue;

    createApp({
        data() {
            return {
                alumnos: [],
                error: null,
                // Ajusta la ruta según tu API en local
                endpoint: '/api/alumnos'
            }
        },
        methods: {
            async fetchAlumnos() {
                this.error = null;
                try {
                    const response = await axios.get(this.endpoint);
                    // Asume que la respuesta es un array o que contiene { data: [...] }
                    this.alumnos = Array.isArray(response.data) ? response.data : response.data.data || [];
                } catch (err) {
                    console.error(err);
                    this.error = err.response?.data?.message || err.message || 'Error al obtener datos';
                }
            }
        },
        mounted() {
            // Opcional: cargar al iniciar. Si no desea carga automática, comentar la siguiente línea.
            this.fetchAlumnos();
        }
    }).mount('#app');
    </script>
</body>
</html>