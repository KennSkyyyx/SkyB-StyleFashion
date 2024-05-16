<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registrar Factura</title>
<link rel="stylesheet" href="css/estilo5.css">
<style>
/* FOndo de la paginaa */
body {
background: url('img/k.jpg');
background-size: cover;
}
</style>
</head>
<body>
<!-- Fomulario para registrar las facturas -->
    <form action="ADvalidacion2.php" method="POST">
    <p>Registre la nueva factura</p><br></br>
<!-- Ingreso del metodo de pago -->
    <label for="metodo_pago">Método de Pago:</label>
    <input type="text" id="metodo_pago" name="metodo_pago" required>
<!-- detalles de cliente como nombre y celular -->
    <label for="detalles_cliente">Detalles del Cliente:</label>
    <input type="text" id="detalles_cliente" name="detalles_cliente" required>
<!-- caracteristica del producto vendido -->
    <label for="producto_vendido">Producto Vendido:</label>
    <input type="text" id="producto_vendido" name="producto_vendido" required>
<!-- precio del producto -->
    <label for="precio">Precio:</label>
    <input type="number" id="precio" name="precio" step="0.01" required>
<!-- ingreso de la fecha en que se hizo la factura -->
    <label for="fecha">Fecha:</label>
    <input type="date" id="fecha" name="fecha" required>
<!-- ingreso del id del cajero -->
    <label for="cajero_id">ID del Cajero:</label>
    <input type="text" id="cajero_id" name="cajero_id" required><br><br>
<!-- finalizar con el registro boton -->
    <input type="submit" value="Registrar Factura">
    </form>
</body>
</html>
