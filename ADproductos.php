<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PRODUCTOS</title>
<link rel="stylesheet" href="css/estilo6.css">
<style>
/* Fondo para la pagina */
body {
background: url('img/5.jpg');

}
.modal {
    display: none;
    position: fixed;
    z-index: 1;
    left: 38%;
    top: 0;
}
form {
    background-color: #5518A0;
    padding: 20px;
    width: 300px;
    margin: 20px auto;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
fieldset {
    border: none;
    margin: 0;
    padding: 0;
}
legend {
    font-weight: bold;
    font-size: 1.2em;
    margin-bottom: 10px;
}
label {
    display: block;
    text-align: left;
    color: #fff;
}
input[type="text"],
input[type="email"] {
    width: calc(100% - 12px);
    padding: 8px;
    border: 1px solid #ffffff00;
background-color: rgba(255, 255, 255, 0.377); 
    border-radius: 3px;
    margin-bottom: 10px;
    outline: none;
    box-sizing: border-box; 
}
input[type="submit"] {
width: 60%;
background-color: #3a07f2b6; 
color: #ffffff;
border: none; 
border-radius: 5px; 
padding: 10px; 
cursor: pointer; 
transition: background-color 1.0s;
font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif
}
input[type="submit"]:hover {
background-color: #000; 
}
.close {
    position: absolute;
    right: 10px;
    top: 25px;
    cursor: pointer;
}
</style>
</head>
<body>
<!-- TITULOS -->
<h1><CENTER>Productos</CENTER></h1>
<h2><center>Productos registrados y disponibles en la tienda</center></h2>
<!--PARA MOSTRAR LOS PRODUCTOS DE LA BASE DE DATOS SE TIEE QUE REALIZAR UNA VALIDACION 
DE DATOS DONDE SE VALIDA LOS PRODUCTOS QUE EXISTEN EN LA BASE DE DATOS PARA PODER MOESTRARLOS   -->
<?php
// Conexión de la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$database = "StyleFashionSkyB";

$conn = new mysqli($servername, $username, $password, $database);
// error de conexion
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
// Consulta para la tabla producto
$sql = "SELECT * FROM producto";
$result = $conn->query($sql);
// Decirle que muestre una tabla con los datos de la base de datos
if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>ID</th>
    <th>Nombre</th>
    <th>Cantidad en Stock</th>
    <th>Precio</th>
    <th>Categoría</th>
    <th>Código de Barras</th>
    <th>Descripción</th>
    <th>Proveedor</th>
    <th>Actualizar<ht></ht>";
 // Mostrar la tabla de la base de datos
while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row["id_Producto"] . "</td>";
    echo "<td>" . $row["Product_Nombre"] . "</td>";
    echo "<td>" . $row["Product_CantidadStock"] . "</td>";
    echo "<td>" . $row["Product_Precio"] . "</td>";
    echo "<td>" . $row["Product_Categoria"] . "</td>";
    echo "<td>" . $row["Product_CodigoBarra"] . "</td>";
    echo "<td>" . $row["Product_Descripcion"] . "</td>";
    echo "<td>" . $row["Product_Proveedor"] . "</td>";
    echo "<td><center><button style=\"background-color: #5b0885; color: #ffffff; font-size: 1rem; border-radius: 0.25rem; text-decoration: none; cursor: pointer; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif\" onclick='editarProducto(\"{$row["id_Producto"]}\",\"{$row["Product_Nombre"]}\",\"{$row["Product_CantidadStock"]}\",\"{$row["Product_Precio"]}\",\"{$row["Product_Categoria"]}\",\"{$row["Product_CodigoBarra"]}\",\"{$row["Product_Descripcion"]}\")'>Actualizar</button></center></td>";

    echo "</tr>";
}
    echo "</table>";
} else {
    // Si no hay datos no moestrar NADA
    echo "No se encontraron productos.";
}
// Cierra
$conn->close();
?>
<div id="myModal" class="modal">
    <div class="modal-content">
    <div class="close" onclick="cerrarModal()">X</div>
        <form action="ADdatos1.php" method="POST">
            <center><input type="hidden" id="id" name="id">
                <label for="nombre">Nombre:</label><br>
                <input type="text" id="nombre" name="nombre"><br>
                <label for="cantidad">Cantidad en Stock:</label><br>
                <input type="text" id="cantidad" name="cantidad"><br>
                <label for="precio">Precio:</label><br>
                <input type="text" id="precio" name="precio"><br>
                <label for="categoria">Categoría:</label><br>
                <input type="text" id="categoria" name="categoria"><br>
                <label for="codigo">Código de Barras:</label><br>
                <input type="text" id="codigo" name="codigo"><br>
                <label for="descripcion">Descripción:</label><br>
                <input type="text" id="descripcion" name="descripcion"><br>
                <label for="proveedor">Proveedor:</label><br>
                <input type="text" id="proveedor" name="proveedor"><br><br>
                <input type="submit" value="Actualizar"></center>
        </form>
    </div>
</div>

<script>
    // Función para abrir el modal de edición y pasar los datos del cliente
    function editarProducto(id, nombre, cantidad, precio, categoria, codigo, descripcion, proveedor) {
        document.getElementById('id').value = id;
        document.getElementById('nombre').value = nombre;
        document.getElementById('cantidad').value = cantidad;
        document.getElementById('precio').value = precio;
        document.getElementById('categoria').value = categoria;
        document.getElementById('codigo').value = codigo;
        document.getElementById('descripcion').value = descripcion;
        document.getElementById('proveedor').value = proveedor;
        document.getElementById('myModal').style.display = "block";
    }

    // Cuando el usuario haga clic en (x), se cierra el modal
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

<!-- boton para salir al home -->
    <a href="home.html" class="btn btn-primary">Salir</a>
    <a href="ADregproducto.php" class="btn1">Registrar Nuevo Producto</a>  
</body>
</html>