<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=z, initial-scale=1.0">
  <title>Login</title>
</head>
<body>
  <div class="contenedor">
    <header>
      <h1>Logueate</h1>
    </header>
    <div class="formulario">
      <form action="validacion.php" method="post">
        <h2>Login</h2>

        <label for="">Correo</label>
        <input type="text" name="correo">

        <label for="">Contraseña</label>
        <input type="password" name="password">

        <button>Ingresar</button>
      </form>
    </div>
  </div>
</body>
</html>