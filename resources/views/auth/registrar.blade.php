<!DOCTYPE html>
<html>
<head>
    <title>Registro de Usuario</title>
</head>
<body>
    <h2>Registro</h2>

    @if(session('success'))
        <p style="color: green">{{ session('success') }}</p>
    @endif

    @if($errors->any())
        <ul style="color: red;">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="{{ route('registro.submit') }}">
        @csrf

        <label>Nombre:</label>
        <input type="text" name="nombre" required><br><br>

        <label>Email:</label>
        <input type="email" name="email" required><br><br>

        <label>Contraseña:</label>
        <input type="password" name="contrasena" required><br><br>

        <label>Confirmar Contraseña:</label>
        <input type="password" name="contrasena_confirmation" required><br><br>

        <label>Teléfono:</label>
        <input type="text" name="telefono" required><br><br>

        <label>Dirección:</label>
        <input type="text" name="direccion" required><br><br>

        <label>Fecha de nacimiento:</label>
        <input type="date" name="fecha_nacimiento" required><br><br>

        <button type="submit">Registrar</button>
    </form>

</body>
</html>
