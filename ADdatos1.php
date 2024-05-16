<?php
// Verificar si se ha enviado el formulario de actualización
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conexión a la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "StyleFashionSkyB";

    $conn = new mysqli($servername, $username, $password, $database);
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Recuperar los datos del formulario
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $cantidad = $_POST['cantidad'];
    $precio = $_POST['precio'];
    $categoria = $_POST['categoria'];
    $codigo = $_POST['codigo'];
    $descripcion = $_POST['descripcion'];
    $proveedor = $_POST['proveedor'];

    // Consulta SQL para actualizar los datos
    $sql = "UPDATE producto SET 
            Product_Nombre = '$nombre',
            Product_CantidadStock = '$cantidad',
            Product_Precio = '$precio',
            Product_Categoria = '$categoria',
            Product_CodigoBarra = '$codigo',
            Product_Descripcion = '$descripcion',
            Product_Proveedor = '$proveedor'
            WHERE id_Producto = '$id'";

    // Ejecutar la consulta
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Datos actualizados correctamente.'); window.location.href = 'ADproductos.php';</script>";
    } else {
        echo "<script>alert('Error al actualizar los datos: " . $conn->error . "');</script>";
    }

    // Cerrar la conexión
    $conn->close();
}
?>
