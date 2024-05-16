<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<link rel="stylesheet" href="css/estilo3.css?=v1.0">
<!-- Fondo para la pagina -->
<style>
    body {
background: url('img/k.jpg');
background-size: cover;
}
</style>
</head>
<body>
    <!-- Fomrulario para el nuevo registro del new client -->
    <form action="ADvalidacion1.php" method="POST">
        <p>Registrar nuevo cliente</p>
        <!-- Ingreso del usuario -->
        <label for="cajero_id">ID Cajero:</label>
        <input type="number" id="cajero_id" name="cajero_id" required>
        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario" required>
        <!-- ingreso del dni -->
        <label for="dni">DNI:</label>
        <input type="text" id="dni" name="dni" required>
        <!-- Ingreso de la direccion del cliente -->
        <label for="direccion">Dirección:</label>
        <input type="text" id="direccion" name="direccion" required>
        <!-- Ingreso del correo electronico del client -->
        <label for="correo">Correo:</label>
        <input type="email" id="correo" name="correo" required>
        <!-- ingreso del numero del client -->
        <label for="numero">Número:</label>
        <input type="text" id="numero" name="numero" required><br><br>   
        <!-- finalizar registro boton -->
        <input type="submit" value="Registrar Cliente">
    </form>
</body>
</html>