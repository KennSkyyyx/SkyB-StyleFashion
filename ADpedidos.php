<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=<, initial-scale=1.0">
<title>Pedidos</title>
<link rel="stylesheet" href="css/estilo8.css?=v1.0">
<!-- fondo para la pagina -->
<style>
body {
background: url('img/5.jpg');

}
</style>
</head>
<body>
<!-- titulo para la pagina -->
<h1>PEDIDOS</h1>
<p>Pedidos registrados y estados actuales</p>
</head>
<body>
<!-- PARA MOSTRAR LOS PEDIDOS DE LA BASE DE DATOS SE TIENE QUE REALIZAR UNA VALIDACION 
DE DATOS DONDE SE VALIDA TODA LA TABLA DE PEDIDOS QUE EXISTE EN LA BASE DE DATOS -->
<?php
// Conexion a la base de datossss
$servername = "localhost";
$username = "root";
$password = "";
$database = "StyleFashionSkyB";
$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
//se hace una consulta para la tabla ´pedidos
$sql = "SELECT * FROM pedidos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// mostrando la tabla con la información de los pedidos
    echo "<table>";
    echo "<tr><th>ID del Pedido</th>
    <th>id Cliente</th>
    <th>Fecha Entrega</th>
    <th>Direccion Entrega</th>
    <th>Total</th>
    <th>Estado</th>
    <th>Metodo</th>";
    
// Se muestra los datos de la tabla pedidos
while ($row = $result->fetch_assoc()) {
echo "<tr>";
echo "<td>" . $row["id_pedido"] . "</td>";
echo "<td>" . $row["id_Client"] . "</td>";
echo "<td>" . $row["Ped_FechaEntrega"] . "</td>";
echo "<td>" . $row["Ped_DireccionEntrega"] . "</td>";
echo "<td>" . $row["Ped_Total"] . "</td>";
echo "<td>" . $row["Ped_Estado"] . "</td>";
echo "<td>" . $row["Ped_Metodo"] . "</td>";
echo "</tr>";
}
echo "</table>";
} else {
    // No se muestra NADA 
    echo "Pedidos no encontrados";
}
$conn->close();
?>
   <!-- boton para salir al home -->
    <a href="home.html" class="btn btn-primary">Salir</a> 
</body>
</html>
