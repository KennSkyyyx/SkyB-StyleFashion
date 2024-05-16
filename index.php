<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<title>Login</title>
<link rel="stylesheet" href="css/estilos.css?=v1.0">
<style>
/* fondo para la pagina */
body {
background: url('img/k.jpg');
background-size: cover;
}
</style>
<!-- Firma -->
 <div class="title">
<p>Kenner Sky &<br> 
    Brayan Bernal</p>
</div>  
</head>
<body>  
    <div class="login">
        <!-- al momento de inciar sesion se llama a validar para que valide los datos que existen en la base de datos -->
        <form action="ADvalidacion.php" method="post" onsubmit="return validarFormulario()">
        <!-- validarFomrulario es para la alerta de si es correcto o no es correcto el usuario -->
            <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-4">
                <!-- Img usuario -->
            <img class="img-fluid" src="img/Sky2.png" height="150px" width="150px">
            </div>
            <div class="col-md-5"></div>
            </div>
            <!-- LOADER PARA EL LOGIN ANIMACION -->
            <div class="loader">
            <div class="load-inner load-one"></div>
            <div class="load-inner load-two"></div>
            <div class="load-inner load-three"></div>
            <span class="text">LOGIN</span>
            </div>
            <!-- ESPACIO PARA EL FORMULARIO DEL LOGIN -->
            <div class="form-group">
            <!-- Ingreso del usuario -->
            <p>Usuario <input type="text" placeholder="Ingrese su Usuario" name="usuario"> </p>
            </div>
            <div class="form-group">
            <!-- Ingreso de la contraseña -->
            <p>Contraseña <input type="password" placeholder="Ingrese su contraseña" name="contraseña"></p>
            </div>
            <!-- BOTONES PARA INCIAR, REGISTRASE Y RECUPERAR CONTRASEÑA -->
            <div class="button-container">
            <!-- si inciar sesion se valida los datos para saber si es correcto, si es admin se direccion al home y si es cliente se dirreciona a la tienda -->
            <button type="submit" class="btn btn-primary">Iniciar</button>
            <!-- si el cliente quiere registrase se direccion al archivo register.php donde tendra un formulario para registrase -->
            <a href="TiendaWeb.php" class="btn btn-primary">ir a Tienda</a>
            <br>
            <!-- al olvidar su contraseña tendra un formulario para recuperar contraseña -->
            <a href="ADrecuperacion.php" class="btn btn-primary">Olvido su Contraseña?</a>
            <div id="mensaje-error" style="display: none; color: red;"></div>
<!-- Funcion para validar y alerta -->
<?php        
// Si el usuario se registra exitoso se muestra un mensaje en el login diciendo bienvenido y la variable
if (isset($_GET['registro_exitoso']) && $_GET['registro_exitoso'] == 1 && isset($_GET['nombre'])) {
$nombre = $_GET['nombre'];
// Se muestra el mensaje con la variable jeje
echo "<h5>¡Bienvenido, $nombre!</h5>";
}
// cierre
?>
</form>
</div>
<script>
// se agrega un funcion donde se muestra una alarma cuando se valida los datos, si no inegresa nada se muestra el mensaje
    function validarFormulario() { 
    var usuario = document.getElementsByName("usuario")[0].value;
    // Se hace una validacion para saber que los datos no esten vacios
    var contraseña = document.getElementsByName("contraseña")[0].value;
        if (usuario.trim() === "" || contraseña.trim() === "") {
        //Se muestra el mensaje
        document.getElementById("mensaje-error").innerHTML = "Por favor ingrese usuario y contraseña.";
        document.getElementById("mensaje-error").style.display = "block";
        // Se termina el formulario
    return false;
    } else {
    return true;
    }
    }
</script>
<!-- se finaliza la funcion -->
</body>
</html>
