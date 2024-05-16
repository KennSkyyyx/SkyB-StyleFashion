<?php
// Establecer conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$database = "StyleFashionSkyB";
$conn = new mysqli($servername, $username, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
$usuario = $_POST['usuario'];
$dni = $_POST['dni'];
$direccion = $_POST['direccion'];
$correo = $_POST['correo'];
$numero = $_POST['numero'];
$cajero_id = $_POST['cajero_id']; // Nuevo campo para el ID del cajero

// Preparar la consulta SQL para insertar un nuevo cliente con el ID del cajero
$sql = "INSERT INTO clientes (Client_Usuario, Client_Dni, Client_Direccion, Client_Correo, Client_Numero, Caje_id) VALUES ('$usuario', '$dni', '$direccion', '$correo', '$numero', '$cajero_id')";

// Ejecutar la consulta
if ($conn->query($sql) === TRUE) {
    // Mostrar una alerta de cliente registrado
    echo "<script>alert('Nuevo cliente registrado correctamente.');</script>";
    echo "<script>window.setTimeout(function(){ window.location.href = 'ADclientes.php'; }, 2);</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
