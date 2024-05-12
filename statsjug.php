<?php
$mysqli = new mysqli("monorail.proxy.rlwy.net", "root", "QRrVHkhvFwkmZooSTAKlWILTpKzSvTGg", "railway", 48961);

// Verificar la conexión
if ($mysqli->connect_errno) {
    echo "Error al conectar a la base de datos: " . $mysqli->connect_error;
}
// Realizar una consulta a la base de datos
$query = "UPDATE estadisticas_jug SET puntos_marcados=puntos_marcados + $_GET[puntos], rebotes= rebotes + $_GET[Id_liga], asistencias= asistencias + $_GET[Id_liga] WHERE id_estadistica=$_GET[estadistica]";
$result = $mysqli->query($query);
