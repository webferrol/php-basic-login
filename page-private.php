<?php
session_start();

if (isset($_GET['cerrar']) && $_GET['cerrar'] === "true") {
  // cerrar sesión
  session_destroy();
  header('Location: index.php');
}

if (!isset($_SESSION['ID'])) {
  header('Location: index.php');
}

// Conectar a la base de datos
require_once('./helpers/conectar-base-datos.php');
$con = conectarBBDD('localhost', 'webferrol_db', 'root', '');
// Realizar Consulta
$consulta = "SELECT * FROM cp_users WHERE ID = ".$_SESSION['ID'];
$statement = $con->query($consulta);
//Crear el sentencia y hacer un fetch de datos
$usuario = $statement->fetch();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Páginga privada</title>
</head>
<body>
  <h1>Página privada</h1>
  Hi <?php echo $usuario['user_nicename'];?> <br>
  <a href="./page-private.php?cerrar=true">Cerrar sesión</a>
</body>
</html>