<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumnos</title>
</head>
<!-- estilos de la vista-->
<style>
    a{
        color:blue;
    }
    a:hover{
        color:red;
    }
</style>
<body>
    <h1>Lista de alumnos</h1>
    <table>
    <thead>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>ROL</th>
            <th>EMAIL</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($alumnos as $alumno)<!--variable alumons que recibe del controlador -->
            <tr>
                <td>{{ $alumno['id'] }}</td>
                <td>{{ $alumno['name'] }}</td>
                <td>{{ $alumno['surname'] }}</td>
                <td>{{ $alumno['rol'] }}</td>
                <td>{{ $alumno['email'] }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
<a href="{{ route('admin') }}">Admin vista</a> <!--retorna a la vista admin -->
</body>
</html>
