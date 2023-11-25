<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenida</title>
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
<body><!-- Pagina principal con enlaces a diferentes vistas-->
    <h1>Bienvenido Administrador</h1>
    <a href="{{ route('centres') }}">Centres</a>
    <br>
    <a href="{{ route('professorat') }}">Professorat</a>
    <br>
    <a href="{{ route('alumnat') }}">Alumnat</a>
    <br>
    <br>
    <a id="logout" href="{{ route('signin') }}">Logout</a><!-- retorna al signin -->
</body>
</html>
