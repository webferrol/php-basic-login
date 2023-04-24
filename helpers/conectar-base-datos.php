<?php

/**
 * Permite la conexión de una base de datos
 * 
 * @param { string } Nombre del servidor de la BBDD
 * @param { string } Nombre de la BBDD
 * @param { string } Nombre de usuario de la BBDD
 * @param { string } Contraseña del usuario de la BBDD
 * @return { mixed } Retorna un Objeto de conexión de la BBDD o null si no logra la conexión
 */
function conectarBBDD(string $host, string $dbname, string $username, string $password): mixed
{
  try {
    $con = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
  } catch (PDOException $err) {
    die($err->getMessage() . '. Consulta con el administrador');
  }
  return $con;
}
