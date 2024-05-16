<?php
// Se realiza una conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "StyleFashionSkyB";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Verificar si se ha enviado el formulario de registro
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $dni = $_POST["dni"];
    $direccion = $_POST["direccion"];
    $numero = $_POST["numero"];

    // Validar si el número de teléfono ya está registrado
    $sql_validar_numero = "SELECT * FROM clientes WHERE Client_Numero = '$numero'";
    $resultado = $conn->query($sql_validar_numero);

    if ($resultado->num_rows > 0) {
        echo "Ya existe un usuario con este número de teléfono. Por favor, utilice otro número.";
    } else {
        // Realizar la inserción en la tabla clientes
        $sql_cliente = "INSERT INTO clientes (Client_Usuario, Client_Correo, Client_DNI, Client_Direccion, Client_Numero) 
                        VALUES ('$nombre', '$correo', '$dni', '$direccion', '$numero')";

        // Ejecutar la consulta
        if ($conn->query($sql_cliente) === TRUE) {
            // Redireccionar al usuario al index.php después de un registro exitoso
            echo "<script>alert('Gracias por tu registro $nombre'); window.location='TiendaWeb.php?registro_exitoso=1&nombre=$nombre';</script>";
            exit();
        } else {
            echo "<script>alert('Error al registrar el usuario en la tabla clientes: " . $conn->error . "');</script>";
        }
        
        
    }
}

// Cerrar la conexión
$conn->close();
?>
