<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centros</title>
</head>
<style>
    a{
        color:blue;
    }
    a:hover{
        color:red;
    }
</style>
<body>
    <h1>Lista de centros</h1>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>ADDRESS</th>
            <th>CP</th>
            <th>CITY</th>
            
        </tr>
    </thead>
    <tbody><!--variable centros que recibe del controlador -->
        @foreach ($centros as $centro)
            <tr>
                <td>{{ $centro['id'] }}</td>
                <td>{{ $centro['Name'] }}</td>
                <td>{{ $centro['Address'] }}</td>
                <td>{{ $centro['CP'] }}</td>
                <td>{{ $centro['City'] }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
    <a href="{{ route('admin') }}">Admin vista</a><!--retorna a la vista admin -->
</body>
</html>
