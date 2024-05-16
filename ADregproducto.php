<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registrar Producto</title>
<link rel="stylesheet" href="css/estilo7.css?=v1.0">
<style>
        body {
            background: url('img/k.jpg');
            background-size: cover;
    
        }
    </style>
</head>
<body>
<!-- Fomurlario para registrar el nuevo producto -->
<form action="ADvalidacion3.php" method="POST">
    <p>Registre el nuevo producto</p>
<!-- ingreso Nombre del producto -->
    <label for="nombre_producto">Nombre del Producto:</label>
    <input type="text" id="nombre_producto" name="nombre_producto" required>
<!-- ingreso de la Cantidad del stock -->
    <label for="cantidad_stock">Cantidad en Stock:</label>
    <input type="number" id="cantidad_stock" name="cantidad_stock" required>
<!-- ingreso del precio del producto -->
    <label for="precio">Precio:</label>
    <input type="number" id="precio" name="precio" step="0.01" required>
<!-- ingreso del precio del producto -->
    <label for="categoria">Categoría:</label>
    <input type="text" id="categoria" name="categoria" required>
<!-- ingreso del codigo de barra de barras -->
    <label for="codigo_barra">Código de Barras:</label>
    <input type="text" id="codigo_barra" name="codigo_barra" required>
<!-- nick del proveedor del producto -->
    <label for="proveedor">Proveedor:</label>
    <input type="text" id="proveedor" name="proveedor" required>
<!-- ingreso del id del  cajero -->
    <label for="cajero_id">ID del Cajero:</label>
    <input type="text" id="cajero_id" name="cajero_id" required>
    <label for="descripcion">Descripción:</label><br>
    <textarea id="descripcion" name="descripcion" rows="2" cols="37" required></textarea><br><br>
<!-- finalizacion del registro -->
    <input type="submit" value="Registrar Producto">
</form>
</body>
</html>
