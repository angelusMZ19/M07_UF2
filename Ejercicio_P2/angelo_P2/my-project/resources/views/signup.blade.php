<!-- signup.blade.php -->


<!-- Contenido de la vista signup 
tener en cuenta que si pongo dobles signos de exclamacion al ejecutar me saltra el texto con las llaves y las !! son para que no se salte las etiquetas de html y me realice los saltos de pagina</h3> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Inscripcion</title>

</head>
<body>
    <h1>{{ $dato }}</h1><!-- por auqie se pasaran los datos obtenidos de las ruta referente a signup -->
    <!-- el action seria tipo {{route('usuario')}}que redireque al que se llama  ->name('usuari') -->
    <form method="POST" action="">
    @csrf
        <div>
            <label>Id</label><br>
            <input type="text" name="id">
        </div>

        <div>
            <label for="rol">Rol</label><br>
            <select name="rol" id="rol">
                <option value="alumnat">alumnat</option>
                <option value="profesorat">professorat</option>
            </select>
        </div>

        <div>
            <label>Name</label><br>
            <input type="name" name="name">
        </div>

        <div>
            <label>Surname</label><br>
            <input type="text" name="surname">
        </div>

        <div>
            <label>Password</label><br>
            <input type="password" name="password">
        </div>

        <div>
            <label>E-mail</label><br>
            <input type="text" name="email">
        </div>

        <div>
            <label>active</label><br>
            <input type="checkbox" name="active">
        </div>

        <input type="submit" value="Submit"><br>
        
        
    </form>
    <br>
    <a href="{{route ('signin')}}">Ir a Signin</a><!-- redireccionamiento al signup funciona cuando no se le pasan parametro ahora mejorado con el metodo name() -->
      
</body>
</html>
