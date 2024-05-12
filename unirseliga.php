<?php
$mysqli = new mysqli("monorail.proxy.rlwy.net", "root", "QRrVHkhvFwkmZooSTAKlWILTpKzSvTGg", "railway", 48961);

// Verificar la conexión
if ($mysqli->connect_errno) {
    echo "Error al conectar a la base de datos: " . $mysqli->connect_error;
}
// Realizar una consulta a la base de datos
$query = "SELECT Id FROM Ligas Where Codigo = $_GET[codigo]";
$result = $mysqli->query($query);

// Convertir los resultados a formato JSON
$response = array();
while ($row = $result->fetch_assoc()) {
    $response[] = $row;
}

// Devolver los resultados como JSON
header('Content-Type: application/json');
echo json_encode($response);

// Cerrar la conexión
$mysqli->close();
?>