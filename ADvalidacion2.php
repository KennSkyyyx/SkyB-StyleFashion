<?php
// Conexión a la base de datos (reemplaza los valores con los de tu configuración)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "StyleFashionSkyB";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Procesamiento del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir datos del formulario
    $metodoPago = $_POST['metodo_pago'];
    $detallesCliente = $_POST['detalles_cliente'];
    $productoVendido = $_POST['producto_vendido'];
    $precio = $_POST['precio'];
    $fecha = $_POST['fecha'];
    $cajeroId = $_POST['cajero_id'];

    // Consulta SQL para insertar en la tabla de facturas
    $sql = "INSERT INTO facturas (Fac_MetodoPago, Fac_DetallesClient, Fac_ProductoVendido, Fac_Precio, Fac_Fecha, Caje_id) VALUES ('$metodoPago', '$detallesCliente', '$productoVendido', '$precio', '$fecha', '$cajeroId')";

    if ($conn->query($sql) === TRUE) {
        // Factura registrada exitosamente, mostrar alerta y redireccionar
        echo "<script>
                alert('Factura registrada exitosamente');
                window.location.href = 'ADfacturas.php';
             </script>";
        exit(); // Salir del script después de la redirección
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


// Cerrar conexión
$conn->close();
?>
