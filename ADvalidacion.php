<?php
// Se realiza una conexión a la base de datos
include('db.php');

//Me gustaria declararle mi amor pero solo puedo declarar variables hptavida ome
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
session_start();
$_SESSION['usuario'] = $usuario;
// Se llena el tipo de local, usuario, contraseña, y nombre de la base de datos
$conexion = mysqli_connect("localhost", "root", "", "StyleFashionSkyB");

    // Consultar en la tabla admins
    $consulta_admins = "SELECT * FROM cajero WHERE Caje_Usuario='$usuario' AND Caje_Contraseña='$contraseña'";
    $resultado_admins = mysqli_query($conexion, $consulta_admins);
    $filas_admins = mysqli_num_rows($resultado_admins);

// Verificar si es un admin
if ($filas_admins) {
    // Si es un admin, se redirecciona a home.php
    header("location: Home.html");
    exit();
}

// Si no es un admin, mostrar mensaje de error
include("index.php");
echo '<br><span class="bad" style="color: white; font-size: 12px;">ADMIN NO REGISTRADO</span>';

mysqli_free_result($resultado_admins);
mysqli_close($conexion);
?>
