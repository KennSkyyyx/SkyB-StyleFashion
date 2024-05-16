<?php
// Conexión a la base de datos (reemplaza los valores con los tuyos)
$servername = "localhost";
$username = "root";
$password = "";
$database = "StyleFashionSkyB";

$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("La conexión ha fallado: " . $conn->connect_error);
}

// Verificar si se recibió un nombre del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el nombre enviado por el formulario
    $nombre = $_POST['nombre'];

    // Consulta SQL para obtener la información del cliente por nombre
    $sql = "SELECT * FROM clientes WHERE Client_Usuario = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $nombre);
    $stmt->execute();
    $resultado = $stmt->get_result();

    // Verificar si se encontraron resultados
    if ($resultado->num_rows > 0) {
        // Mostrar la información del cliente
        $cliente = $resultado->fetch_assoc();
echo '<span style="color: white;">Nombre de usuario: ' . $cliente['Client_Usuario'] . "</span><br><br>";
echo '<span style="color: white;">DNI: ' . $cliente['Client_Dni'] . "</span><br><br>";
echo '<span style="color: white;">Dirección: ' . $cliente['Client_Direccion'] . "</span><br><br>";
echo '<span style="color: white;">Correo electrónico: ' . $cliente['Client_Correo'] . "</span><br><br>";
echo '<span style="color: white;">Número de teléfono: ' . $cliente['Client_Numero'] . "</span><br><br>";

    } else {
        echo "<p style='color: white;'>Este es un apartado para ver su informacion de registro</p>";

    }
    
    // Cerrar la statement
    $stmt->close();
}

// Cerrar la conexión
$conn->close();
?>
