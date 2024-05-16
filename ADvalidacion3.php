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
    $nombreProducto = $_POST['nombre_producto'];
    $cantidadStock = $_POST['cantidad_stock'];
    $precio = $_POST['precio'];
    $categoria = $_POST['categoria'];
    $codigoBarra = $_POST['codigo_barra'];
    $descripcion = $_POST['descripcion'];
    $proveedor = $_POST['proveedor'];
    $cajeroId = $_POST['cajero_id'];

    // Consulta SQL para insertar en la tabla de productos
    $sql = "INSERT INTO producto (Product_Nombre, Product_CantidadStock, Product_Precio, Product_Categoria, Product_CodigoBarra, Product_Descripcion, Product_Proveedor, Caje_id) VALUES ('$nombreProducto', '$cantidadStock', '$precio', '$categoria', '$codigoBarra', '$descripcion', '$proveedor', '$cajeroId')";

    if ($conn->query($sql) === TRUE) {
        // Producto registrado exitosamente, mostrar alerta y redireccionar
        echo "<script>
                alert('Producto registrado exitosamente');
                window.location.href = 'ADproductos.php';
             </script>";
        exit(); // Salir del script después de la redirección
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Cerrar conexión
$conn->close();
?>
