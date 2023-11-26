<!-- admin.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
</head>
<body>
    <h1>Vista Administrador</h1><!-- por auqie se pasaran los datos obtenidos de las ruta referente a signin -->
    
    <ul>
        <li><a href="{{ route('profesores') }}">Professorat</a></li><!-- enlace a la página de vista profesorat -->
        <li><a href="{{ route('centres') }}">Centres</a></li><!-- enlace a la página de vista centres -->
        <li><a href="{{ route('alumnat') }}">Alumnat</a></li><!-- enlace a la página de vista de alumnat -->
    </ul>

    <br><br><a href="{{route('signin')}}">LogOut</a><!--redireccionamiento a la pagina de signin-->
</body>
</html>
<!--  -->