
<!-- formulario de registro -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
</head>
<body>
<h1 >Register</h1><!-- variable que recibe del controlador -->
    <form method="POST"  class="mx-auto mt-1" style="max-width: 350px;" action="">
      <div class="mb-3">
        <label for="inputName" class="form-label">Id</label>
        <input type="number" class="form-control" name="id">
      </div>
      <div class="mb-3">
        <label for="inputName" class="form-label">Name</label>
        <input type="text" class="form-control" name="name">
      </div>
      <div class="mb-3">
        <label for="inputSurname" class="form-label">Surname</label>
        <input type="text" class="form-control" name="surName">
      </div>
      <div class="mb-3">
        <label for="InputEmail" class="form-label">Email address</label>
        <input type="text" class="form-control" name="email">
      </div>
      <div class="mb-3">
        <label for="InputPassword" class="form-label">Password</label>
        <input type="password" class="form-control" name="password">
      </div>
      <select class="form-select" name="rol" aria-label="Default select example">
        <option selected value="">Choose your rol</option>
        <option value="teacher">teacher</option>
        <option value="student">student</option>
      </select>
      <div class="mb-3 form-check">
        <label class="form-label">Your account is Active ?</label>
        <input type="checkbox" name="active" value="true">
      </div>
      <input type="submit" class="btn btn-primary" name="submit">
      <br>
      <a href="{{ route('signin') }}">You already have an account</a> <!-- redireccionamiento -->
    </form>
</body>
</html>