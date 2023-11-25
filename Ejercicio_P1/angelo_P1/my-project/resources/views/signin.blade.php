<!-- signin.blade.php -->
<!-- Contenido de la vista signin -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulari de inicio de sesion</title>
</head>
<body>
    <h1>{{ $dato }}</h1><!-- por auqie se pasaran los datos obtenidos de las ruta referente a signin -->
    <form method="POST" action="">
        
        <div>
            <label>email</label><br>
            <input type="text" name="email"><br>

            <label>password</label><br>
            <input type="password" name="password">
        </div>
        <div>
            <label>Remember me</label><br>
            <input type="checkbox" name="active">
        </div>
        <input type="submit" name="enviar" value="Iniciar Sesion">
        
     </form> 
     <br>   
     <a href="{{ url('/signup') }}">Ir a Signup</a> <!--redireccionamiento al signup -->
</body>
</html>
