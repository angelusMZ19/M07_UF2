<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signin</title>
</head>
<body>
    <h1>{{$titulo}}</h1><!--variable que recibe del controlador -->
    <!-- formulario de login -->
    <form method="POST" action="">
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="text" class="form-control" name="email" >
          </div>
          <div class="mb-3">
            <label for="Password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password">
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" name="Remember" value="true">
            <label class="form-label">Remember me</label>
          </div>
          <input type="submit" class="btn btn-primary" name="submit"></imput>
          <br>
          <br>
          <a href="{{ url('veronica/signup') }}">You don't have an account</a><!-- redireccionamiento -->
    </form>
</body>
</html>
