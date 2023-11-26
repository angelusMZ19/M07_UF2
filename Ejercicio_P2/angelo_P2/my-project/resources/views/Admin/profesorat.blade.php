<!-- profsorat.blade.php -->
<!-- Contenido de la vista signin -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>views profesores</title>
</head>
<body>
    <h1>PROFESORES</h1>
    <table>
        <thead>
            <tr>
                <th> ID </th>
                <th> NAME </th>
                <th> SURNAME </th>
                <th> ROL </th>
                <th> EMAIL </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($profesores as $profesorat) <!-- recorrido para obtener las llaves y valores del array -->
                <tr>
                    <td>{{ $profesorat['id'] }}</td>
                    <td>{{ $profesorat['name'] }}</td>
                    <td>{{ $profesorat['surname'] }}</td>
                    <td>{{ $profesorat['rol'] }}</td>
                    <td>{{ $profesorat['email'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table><br>
    
     <a href="{{route ('admin')}}">Back</a> <!--redireccionamiento a la vista del adminstrador-->
</body>
</html>