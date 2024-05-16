<?php
include 'conexiondb.php';

$nombre_usuario = $_POST['nombre_usuario'];
$id_producto = $_POST['id_producto'];
$puntuacion = $_POST['puntuacion'];
$comentario = $_POST['comentario'];

$query_cliente = "SELECT Client_id FROM clientes WHERE Client_Usuario = '$nombre_usuario'";
$resultado_cliente = mysqli_query($conexion, $query_cliente);
$datos_cliente = mysqli_fetch_assoc($resultado_cliente);
$id_cliente = $datos_cliente['Client_id'];

$query_insertar = "INSERT INTO valoracion (id_Producto, id_Client, Val_Puntuacion, Val_Fecha, Val_Comentario) 
                    VALUES ('$id_producto', '$id_cliente', '$puntuacion', NOW(), '$comentario')";

if(mysqli_query($conexion, $query_insertar)) {
    echo "<script>
                alert('Valoración registrada. ¡Gracias por tu colaboración!');
                window.location.href = 'TiendaWeb.php';
             </script>";
} else {
    echo "Error al enviar la valoración: " . mysqli_error($conexion);
}

mysqli_close($conexion);
?>
