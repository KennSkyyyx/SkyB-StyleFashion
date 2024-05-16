<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=<, initial-scale=1.0">
<title>Facturas</title>
<link rel="stylesheet" href="css/estilo4.css">
</head>
<body>
<style>
    body{
        background: url('img/5.jpg');
       
    }
</style>
<h1>FACTURAS</h1>
<p>Facturas registradas</p>
<!-- FUNCION DE PHP -->
<?php
// Conexion, local, usuario, contraseña y nombre de base de datos
$servername = "localhost";
$username = "root";
$password = "";
$database = "StyleFashionSkyB";
$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
die("Conexión fallida: " . $conn->connect_error);
}

// Se Selecciona la tabla factura
$sql = "SELECT * FROM facturas";
$result = $conn->query($sql);
// Se inserta una tabla en la pagina
echo "<table>";
echo "<tr><th>ID de la Factura</th>
<th>Método de Pago</th>
<th>DetallesClient</th>
<th>ProductoVendido</th>
<th>Precio</th>
<th>Fecha</th></tr>";
// Se escribe lo que uno quiere moestrar en la tabla facturas
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row["id_Factura"] . "</td>";
    echo "<td>" . $row["Fac_MetodoPago"] . "</td>";
    echo "<td>" . $row["Fac_DetallesClient"] . "</td>";
    echo "<td>" . $row["Fac_ProductoVendido"] . "</td>";
    echo "<td>" . $row["Fac_Precio"] . "</td>";
    echo "<td>" . $row["Fac_Fecha"] . "</td>";
    echo "</tr>";
    }
} else {
    // si no hay facturas no se muestra NADA
    echo "<tr><td colspan='5'>Facturas no encontradas</td></tr>";
}
echo "</table>";

$conn->close();
?>

    <!-- boton de salir  -->
    <a href="home.html" class="btn btn-primary">Salir</a>
    <a href="ADregfactura.php" class="btn1">Registrar Factura</a>  
</body>
</html>
