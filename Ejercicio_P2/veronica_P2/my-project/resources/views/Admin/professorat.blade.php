<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profesores</title>
</head>
<!--estilos de las vistas -->
<style>
    a{
        color:blue;
    }
    a:hover{
        color:red;
    }
</style>
<body>
<h1>Lista de profesores</h1>
    <table>
    <thead>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>ROL</th>
            <th>EMAIL</th>
        </tr>
    </thead>
    <tbody><!--variable profesores que recibe del controlador-->
        @foreach ($profesores as $profesor)
            <tr>
                <td>{{ $profesor['id'] }}</td>
                <td>{{ $profesor['name'] }}</td>
                <td>{{ $profesor['surname'] }}</td>
                <td>{{ $profesor['rol'] }}</td>
                <td>{{ $profesor['email'] }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
<a href="{{ route('admin') }}">Admin vista</a><!--enlace para retornar a la vistaAdmin -->
</body>
</html>
