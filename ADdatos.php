<?php
// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibe los datos del formulario
    $client_id = $_POST['edit_client_id'];
    $client_usuario = $_POST['edit_client_usuario'];
    $client_dni = $_POST['edit_client_dni'];
    $client_direccion = $_POST['edit_client_direccion'];
    $client_correo = $_POST['edit_client_correo'];
    $client_numero = $_POST['edit_client_numero'];

    // conexión a la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "StyleFashionSkyB";
    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Prepara la consulta SQL para actualizar los datos del cliente
    $sql = "UPDATE clientes SET Client_Usuario='$client_usuario', Client_Dni='$client_dni', Client_Direccion='$client_direccion', Client_Correo='$client_correo', Client_Numero='$client_numero' WHERE Client_id='$client_id'";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Datos actualizados correctamente.'); window.location.href = 'ADclientes.php';</script>";
    } else {
        echo "<script>alert('Error al actualizar los datos: " . $conn->error . "');</script>";
    }
    
    

    $conn->close();
} else {
    // Si se accede directamente a este archivo sin enviar el formulario, muestra un mensaje de error
    echo "Acceso no autorizado.";
}
?>
