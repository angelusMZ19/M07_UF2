<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signin</title>
</head>
<!--estilos de la vista-->
<style>
  .text-danger{
    color: red;
  }
  a{
        color:blue;
    }
  a:hover{
      color:red;
  }
</style>
<body>
    <h1>Login</h1>
    <!-- formulario de login -->
    <form method="POST" action="{{route('admin_view')}}">
      @csrf <!--token de CSRF -->
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="text" class="form-control" name="email" >
              @error('email') <!--variable que recibe del controlador del array de errores -->
                    <span class="text-danger">{{ $message }}</span>
              @enderror
          </div>
          <div class="mb-3">
            <label for="Password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password">
            @error('password')
                    <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" name="Remember" value="true">
            <label class="form-label">Remember me</label>
          </div>
          <input type="submit" class="btn btn-primary" name="submit"></imput>
          <br>
          <br>
          <a href="{{ route('signup') }}">You don't have an account</a><!-- redireccionamiento -->
    </form>
</body>
</html>
