<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Clientes</title>
<link rel="stylesheet" href="css/estilo1.css?=v1.0">
</head>
<style>
    body{
        background: url('img/5.jpg');
    }
    /* Estilo para el modal */
</style>
<body>
<h1>CLIENTES</h1>
<!-- Funcion de php para hacer validacion en la tabla clientes y registro -->
<?php
// conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$database = "StyleFashionSkyB";
$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
// seleccionar la tabla cliente
$sql = "SELECT * FROM clientes";
$result = $conn->query($sql);
echo "<table>";
echo "<tr>
<th>ID del Cliente</th>
<th>Usuario</th>
<th>DNI</th>
<th>Dirección</th>
<th>Correo</th>
<th>Numero</th>
<th><center>Actualizar Datos</center></th></tr>";
// mostrar la información de la tabla cliente
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
    echo "<tr>";
        echo "<td>" . $row["Client_id"] . "</td>";
    echo "<td>" . $row["Client_Usuario"] . "</td>";
        echo "<td>" . $row["Client_Dni"] . "</td>";
    echo "<td>" . $row["Client_Direccion"] . "</td>";
        echo "<td>" . $row["Client_Correo"] . "</td>";
    echo "<td>" . $row["Client_Numero"] . "</td>";
        echo "<td><center><button style=\"background-color: #5b0885; color: #ffffff; font-size: 1rem; border-radius: 0.25rem; text-decoration: none; cursor: pointer; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif\" onclick='editarCliente(\"{$row["Client_id"]}\", \"{$row["Client_Usuario"]}\", \"{$row["Client_Dni"]}\", \"{$row["Client_Direccion"]}\", \"{$row["Client_Correo"]}\", \"{$row["Client_Numero"]}\")'>Actualizar</button></center></td>";
    echo "</tr>";
    }
}
echo "</table>";
$conn->close();
?>
<!-- formulario para actualizar los datos -->
<div id="myModal" class="modal">
    <div class="modal-content">
    <div class="close" onclick="cerrarModal()">X</div>
        <form action="ADdatos.php" method="POST">
            <center><input type="hidden" id="edit_client_id" name="edit_client_id">
            <label for="edit_client_usuario">Usuario:</label><br>
            <input type="text" id="edit_client_usuario" name="edit_client_usuario"><br>
            <label for="edit_client_dni">DNI:</label><br>
            <input type="text" id="edit_client_dni" name="edit_client_dni"><br>
            <label for="edit_client_direccion">Dirección:</label><br>
            <input type="text" id="edit_client_direccion" name="edit_client_direccion"><br>
            <label for="edit_client_correo">Correo:</label><br>
            <input type="text" id="edit_client_correo" name="edit_client_correo"><br>
            <label for="edit_client_numero">Número:</label><br>
            <input type="text" id="edit_client_numero" name="edit_client_numero"><br><br>
            <input type="submit" value="Actualizar"></center>
        </form>
    </div>
</div>
<!-- funcion para abrir el formulario -->
<script>
    function editarCliente(id, usuario, dni, direccion, correo, numero) {
        document.getElementById('edit_client_id').value = id;
        document.getElementById('edit_client_usuario').value = usuario;
        document.getElementById('edit_client_dni').value = dni;
        document.getElementById('edit_client_direccion').value = direccion;
        document.getElementById('edit_client_correo').value = correo;
        document.getElementById('edit_client_numero').value = numero;
        document.getElementById('myModal').style.display = "block";
    }
// cierre del formulario
    document.getElementsByClassName('close')[0].onclick = function() {
    document.getElementById('myModal').style.display = "none";
    }
</script>
<script>
    function abrirModal() {
        document.getElementById('myModal').style.display = "block";
    }
    function cerrarModal() {
        document.getElementById('myModal').style.display = "none";
    }
</script>
<!-- BOTON PARA QUE EL ADMIN PUEDA SALIR AL HOME -->
<a href="home.html" class="btn btn-primary">Salir</a> 
<a href="ADregclient.php." class="reg">Registrar nuevo cliente</a> 

</body>
</html>
