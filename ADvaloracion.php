<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Valoraciones</title>
<link rel="stylesheet" href="css/Estilo6.css">
<style>
/* Fondo para la pagina */
body {
background: url('img/5.jpg');

}
</style>
</head>
<body>
<!-- TITULOS -->
<h1><CENTER>Valoraciones</CENTER></h1>
<h2><center>Valoraciones realizadas por los clientes</center></h2>
<h3><center>Cada producto tiene una valoracion</center></h3>
<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$database = "StyleFashionSkyB";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
// Consulta para la tabla de valoraciones
$sql = "SELECT * FROM valoracion";
$result = $conn->query($sql);
// mostrar un listado de la informacion de la tabla
if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>ID Valoración</th>
            <th>ID Cliente</th>
            <th>ID Producto</th>
            <th>Puntuación</th>
            <th>Comentario</th>
            <th>Fecha</th></tr>";
            // Mostrar cada fila de la tabla
while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row["id_Valoracion"] . "</td>";
    echo "<td>" . $row["id_Client"] . "</td>";
    echo "<td>" . $row["id_Producto"] . "</td>";
    echo "<td>" . $row["Val_Puntuacion"] . "</td>";
    echo "<td>" . $row["Val_Comentario"] . "</td>";
    echo "<td>" . $row["Val_Fecha"] . "</td>";
    echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No se encontraron valoraciones.";
}
$conn->close();
?>

<!-- Botones para salir al home y registrar nuevo producto -->
<a href="home.html" class="btn btn-primary">Salir</a>
</body>
</html>
