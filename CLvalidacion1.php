<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "StyleFashionSkyB";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Manejo de la solicitud de formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre_cliente = $_POST['nombre'];
    $id_producto = $_POST['producto']; // Tomar el ID del producto seleccionado directamente
    $fecha = $_POST['fecha'];
    $direccion = $_POST['direccion'];
    $total = $_POST['total'];
    $metodo_pago = $_POST['metodo_pago'];

    // Verificar si el cliente existe
    $sql_cliente = "SELECT Client_id FROM clientes WHERE Client_Usuario = '$nombre_cliente'";
    $result_cliente = $conn->query($sql_cliente);

    if ($result_cliente->num_rows > 0) {
        $row_cliente = $result_cliente->fetch_assoc();
        $id_cliente = $row_cliente["Client_id"];

        // Insertar el pedido
        $sql_pedido = "INSERT INTO pedidos (id_Client, id_Producto, Ped_FechaEntrega, Ped_DireccionEntrega, Ped_Total, Ped_Metodo) VALUES ('$id_cliente', '$id_producto', '$fecha', '$direccion', '$total', '$metodo_pago')";
        
        if ($conn->query($sql_pedido) === TRUE) {
            echo '<script>alert("Pedido registrado exitosamente."); setTimeout(function(){ window.location.href = "TiendaWeb.php"; }, 1000);</script>';
        } else {
            echo '<script>alert("Error al registrar el pedido: ' . $conn->error . '"); setTimeout(function(){ window.location.href = "TiendaWeb.php"; }, 1000);</script>';
        }
    } else {
        echo '<script>alert("Cliente no encontrado."); setTimeout(function(){ window.location.href = "TiendaWeb.php"; }, 1000);</script>';
    }
}

$conn->close();
?>
