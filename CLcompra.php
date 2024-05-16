<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Slider</title>
<link rel="stylesheet" href="css/estilo9.css">
<style>
        /* fondo para la pagina */
        body {
        background: url('img/9.jpg');
        background-size: cover;
        }
        </style>
</head>
<body>
    <h2>Solicitar Pedido</h2>
<div class="slider-frame">
    <ul>
        <li><img src="Imgs/blusa.jpg" alt=""></li>
        <li><img src="Imgs/camisa.jpg" alt=""></li>
        <li><img src="Imgs/chaqueta.jpg" alt=""></li>
        <li><img src="Imgs/sudadera.jpg" alt=""></li>
    </ul>
</div>
<div id="formulario-container" style="display: none;"></div>    
<center><form action="CLvalidacion1.php" method="POST">
    <label1 for="nombre"></label1>
    <input type="textt" id="nombre" name="nombre" placeholder="Ingrese su Usuario" required><br><br>
    
    <label for="producto"></label>
    <select name="producto" required><br><br>
    <option value="">Seleccione un producto</option>
    <option value="1">Pantalon Negro Jean</option>
    <option value="2">Blusa Azul Women</option>
    <option value="3">Jogger Beige</option>
    <option value="4">Chaqueta Men</option>
    <option value="5">Vestido Black Women</option>
    <option value="6">Camisa Negra Oversize</option>
    <option value="7">Vestido Women H&M</option>
    <option value="8">Sudadera Black</option>
    <option value="9">Camisa Azul H&M</option>
</select>
<br><br>        
<label for="fecha">Fecha en la que desea recibir el pedido:</label><br>
<br>
<input type="date" id="fecha" name="fecha" required><br><br>
    
    <label for="direccion"></label>
    <input type="texttt" id="direccion" name="direccion" placeholder="Ingrese su Direccion" required><br><br>
    
    <label4 for="total"></label4>
    <input type="number" id="total" name="total"placeholder="Ingrese el total del producto" required><br><br>
    
    <label for="metodo_pago"></label>
    <select id="metodo_pago" name="metodo_pago" required>
<option value="" disabled selected>Selecciona un método de pago</option>
<option value="Efectivo">Efectivo</option>
<option value="Débito">Débito</option>
</select>
<br>
<br>

<button type="submit" name="submit">Solicitar</button></center>
<br>
<br>
<br>
<br>
<br>
</form>
</form>
</body>
</html>