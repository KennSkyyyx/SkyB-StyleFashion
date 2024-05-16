<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulario de Registro</title>
<link rel="stylesheet" href="css/estilo2.css">
<body style= "background: url('img/k.jpg'); background-size: cover;"></body>
<div class="title">
</head>
<body>
<!-- LOEADER PARA EL FORMULARIO PERSONALIZADO -->
<div class="login-box"> 
<div class="loader">
<div class="load-inner load-one"></div>
<div class="load-inner load-two"></div>
<div class="load-inner load-three"></div>
<span class="text">Registro</span>
</div>    
        
<!-- Formulario para que el cliente se pueda registrar -->
<form action="CLvalidacion1.php" method="post">
<!-- Espacio para ingresar el nombre -->
<label for="nombre">Nombre:</label>
<input type="text" placeholder="Ingrese su nombre" id="nombre" name="nombre" required>
<!-- Espacio para ingresar el correo electronico -->
<label for="correo">Correo Electrónico:</label>
<input type="email" placeholder="Ingrese su correo" id="correo" name="correo" required> 

<!-- Espacio para ingregsar el dni -->
<label for="dni">DNI:</label>
<input type="text" placeholder="Ingrese su DNI" id="dni" name="dni" required>
<!-- Espacio para ingresar la direccion  -->
<label for="direccion">Dirección:</label>
<input type="text" placeholder="Ingrese su dirección" id="direccion" name="direccion" required>
<!-- Espacio para ingresar el numero telefonico -->
<label for="numero">Numero Telefonico:</label>
<input type="text" placeholder="Ingrese su numero" id="numero" name="numero" required><br><br>
<input type="submit" value="Registrarse"> 
<!-- al momento de presionar el botón registrarse se realizará una acción de formulario donde se enviarán los datos a registro.php para realizar la validación de registro -->
</form>
</div>
</body>
</html>
