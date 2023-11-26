<!-- centres.blade.php -->
<!-- Contenido de la vista signin -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view centros</title>
</head>
<body>
    <h1>CENTROS</h1>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Addresss</th>
                    <th>CP</th>
                    <th>City</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($centres as $center)
                    <tr>
                        <!-- recorrido para obtener las llaves y valores del array -->
                        <td>{{ $center['id'] }}</td>
                        <td>{{ $center['name'] }}</td>
                        <td>{{ $center['address'] }}</td>
                        <td>{{ $center['CP'] }}</td>
                        <td>{{ $center['City'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table><br>
     <a href="{{route ('admin')}}">Back</a> <!--redireccionamiento a la vista del adminsitrador-->
</body>
</html>