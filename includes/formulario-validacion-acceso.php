<?php
$error = '';

if (isset($_POST['wp-submit'])) {
  // Limpieza
  $log = htmlspecialchars(trim($_POST['log'])); // trim() limpia los espacios en blanco de izquierda y derecha de un string
  $pwd = htmlspecialchars(trim($_POST['pwd']));
  //validación
  if (empty($log) || empty($pwd)) {
    $error = 'No puede haber campos vacíos';
  } else {
    // Existe el usuario en la base de datos
    // 1º Conectar con BBDD
    require_once('./helpers/conectar-base-datos.php');
    $con = conectarBBDD('localhost', 'webferrol_db', 'root', '');
    // 2º Comprobar que el usuario existe en la BBDD
    $consulta = "SELECT * FROM cp_users 
              WHERE user_login = '$log'"; // Versión demo porque falta la contraseña
    $sentencia = $con->query($consulta);

    if ($sentencia->rowCount()) { //truthy  > 0
      // Guardamos la sesión del usuario
      $fila = $sentencia->fetch();
      $_SESSION['ID'] = $fila['ID'];

      header('Location: page-private.php');
    } else { // falsy // El usuario no existe en la base de datos
      $error = "Usuario o password incorrecto";
    }
  }
}