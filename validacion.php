<?php
  include('conection.php');
  /* Pedidos de datos del formulario login */
  $correo = $_POST['correo'];
  $contraseña = $_POST['password'];

  session_star();
  /* Globalizacion de la variable */
  $_SESSION['correo'] = $correo;

  /* Crear consulta */
  $consulta = "SELECT * FROM usuarios 
              WHERE correo = '$correo' 
              and pass = '$contraseña'";

  /* Validacion de datos*/
  $validacion = mysqli_query($conexion, $consulta);

  /* Guardado en array */
  $tuplas = mysqli_fetch_array($validacion);

  /* Validacion de usuarios segun su rol */

  /* Administrador */
  if (isset($tuplas['id_rol']) == 1) {
    header('location:admin.php');
  }
  /* Usuario */
  elseif (isset($tuplas['id_rol']) == 2) {
    header('location:usuario.php');
  }
  /* Error al ingresar */
  else {
    echo "Los datos ingresados son incorrectos";
  }

  /* Se libera la memoria donde se almacenan datos
     y se cierra  la conexion a la base de datos */
  mysqli_free_result($validacion);
  mysqli_close($conexion);
?>