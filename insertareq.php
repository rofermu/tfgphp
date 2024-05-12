<?php
// Conexión a la base de datos
//$mysqli = new mysqli("mysql://root:QRrVHkhvFwkmZooSTAKlWILTpKzSvTGg@monorail.proxy.rlwy.net:48961/railway");

$mysqli = new mysqli("monorail.proxy.rlwy.net", "root", "QRrVHkhvFwkmZooSTAKlWILTpKzSvTGg", "railway", 48961);

// Verificar la conexión
if ($mysqli->connect_errno) {
    echo "Error al conectar a la base de datos: " . $mysqli->connect_error;
}
// Realizar una consulta a la base de datos
$query = "INSERT INTO equipos (Nombre, Victorias, Derrotas, Puntos_tot, Reb_tot, Asist_tot, Id_liga) 
VALUES ('$_GET[Nombre]', 0, 0, 0.0, 0.0, 0.0, $_GET[Id_liga])";
$result = $mysqli->query($query);
