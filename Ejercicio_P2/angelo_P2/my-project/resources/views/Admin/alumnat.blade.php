<!-- alumant.blade.php -->
<!-- Contenido de la vista signin -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view alumnos</title>
</head>
<body>
    <h1>ALUMNOS</h1>
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
                @foreach ($alumnos as $alumno)
                    <tr>
                        <td>{{ $alumno['id'] }}</td>
                        <td>{{ $alumno['name'] }}</td>
                        <td>{{ $alumno['surname'] }}</td>
                        <td>{{ $alumno['rol'] }}</td>
                        <td>{{ $alumno['email'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table><br>
<a href="{{ route('admin') }}">Back</a> <!--redireccionamiento a la vista del administrador-->
</body>
</html>