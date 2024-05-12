<?php
$mysqli = new mysqli("monorail.proxy.rlwy.net", "root", "QRrVHkhvFwkmZooSTAKlWILTpKzSvTGg", "railway", 48961);

// Verificar la conexión
if ($mysqli->connect_errno) {
    echo "Error al conectar a la base de datos: " . $mysqli->connect_error;
}
// Realizar una consulta a la base de datos
$query = "INSERT INTO ligas (Nombre, Codigo, Usuario, Contraseña) 
VALUES ('$_GET[Nombre]', $_GET[Codigo], $_GET[Usuario], $_GET[Contraseña])";
$result = $mysqli->query($query);