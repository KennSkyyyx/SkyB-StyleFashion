<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Recuperar contraseña</title>
<link rel="stylesheet" href="css/estilo11.css">
<style>
/* Fondo para la pagina */
body {
background: url('img/K.jpg');
background-size: cover;
}
</style>
</head>
<body>
<!-- Caja para ingresar el correo -->
<div class="login-box"> 
<div class="loader">
    <!-- LOADER PERSONALIZADO PARA EL FORMULARIO DE RECUPERACION -->
    <div class="load-inner load-one"></div>
    <div class="load-inner load-two"></div>
    <div class="load-inner load-three"></div>
    <!-- TITULO -->
    <span class="text">Recuperacion</span>
    </div>   
    <section>
    <!-- ingresar el correo electronico -->
    <p><h3>Ingrese su correo para recuperar su contraseña</h3></p>
    <form action="ADcontraseña.php" method="post">
    <!-- se hace un form action donde se mandará a recuperacion_be.php donde tendra una validadacion del correo para enviar el GMAIL -->
    <input type="text" placeholder="Correo Electronico" name="correo1">
    <!-- Se requiere ingresar el correo para saber si el correo esta registrado -->
    <br>
    <button type="submit" class="custom-button">Recuperar Contraseña</button>
    </form>
    </section>
    </div>
</body>
</html>
