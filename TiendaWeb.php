<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Web</title>
    <link rel="stylesheet" href="css/tienda.css">
    <style>
body {
background: url('img/y.jpg');
background-size: cover;
}
</style>
</head>
<body>
    <header>
        <div class="container">
        <h1>Style Fashion Sky B</h1>
        <nav>
        <ul>
        <div id="solicitudPedido">
        <a href="CLcompra.php">
        <img src="img/car.png" alt="Logo" class="logo">
        </a>
        </div>
        <div id="calificacion">
        <a href="CLvaloracion.php">
        <img src="img/estrella.png" alt="Logo" class="logo">
        </a>
        </div>
        <div id="perfil">
        <a href="#" onclick="mostrarFormulario()">
        <img src="img/us.png" alt="Logo" class="logo">
        </a>
        </div>
        <div id="registro">
        <a href="CLregclient.php">
        <img src="img/reg.png" alt="Logo" class="logo">
        </a>
        </div>
        <div id="cerrarSesion">
        <a href="Salir.php">
        <img src="img/salir.png" alt="Logo" class="logo">
        </a>
        </div>
        </ul>
        </nav>
        </div>
    </header>
    <section class="hero">
        <div class="container">
            <div class="grid-container">
                <div class="grid-item"><img src="imgs/camisa.jpg" alt=""></div>
                <div class="grid-item"><img src="imgs/camisa1.jpg" alt=""></div>
                <div class="grid-item"><img src="imgs/blusa.jpg" alt=""></div>
                <div class="grid-item"><img src="imgs/chaqueta.jpg" alt=""></div>
                <div class="grid-item"><img src="imgs/pantalon.jpg" alt=""></div>
                <div class="grid-item"><img src="imgs/sudadera.jpg" alt=""></div>
                <div class="grid-item"><img src="imgs/sudadera1.jpg" alt=""></div>
                <div class="grid-item"><img src="imgs/vestido.jpg" alt=""></div>
                <div class="grid-item"><img src="imgs/vestido2.jpg" alt=""></div>
            </div>
        </div>
    </section>
<footer>
    <div class="container">
    <div class="footer-links">
        <p>Info additional</p>
        <ul>
        <a href="http://senasofiaplus.edu.co/sofia-public/" target="_blank">Infor</a>
        </ul>
    </div>
    <div class="additional-info">
        <ul>
        Dirección: Calle 30-15, Ciudad Bogotà<br>
        Teléfono: <br>3224197138<br>
        315 7450804<br>
        Email: passrecuperacionsky1@gmail.com<br>
        </ul>
    </div>
    <div class="social-media">
        <p>Instagram</p>
        <a href="https://www.instagram.com/kenn_skyyx/" target="_blank"><img src="img/ig.png" alt="Instagram"></a>
        <a href="https://www.instagram.com/stiven.__3?igsh=MWp0MGc1a284eWcxOQ==" target="_blank"><img src="img/ig.png" alt="Instagram"></a>
        </div>
    </div>
</footer>
</head>
<body>
<div id="modal" class="modal">
  <div class="modal-contenido">
    <span class="cerrar" onclick="cerrarModal()">&times;</span>
    <label for="nombre"></label>
    <input type="text" id="nombre" placeholder="Ingrese su Usuario Registrado" name="nombre" required>
    <button onclick="mostrarFormulario()">Ver Perfil</button>
    <div id="infoCliente"></div>
   </div>
</div>
<script>
function mostrarFormulario() {
  var modal = document.getElementById("modal");
  var nombre = document.getElementById("nombre").value;


  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function() {
    if (xhr.readyState == 4 && xhr.status == 200) {
      document.getElementById("infoCliente").innerHTML = xhr.responseText;
    }
  };
  xhr.open("POST", "CLperfilclient.php", true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.send("nombre=" + nombre);

  modal.style.display = "block";
}


function cerrarModal() {
  var modal = document.getElementById("modal");
  modal.style.display = "none";
}
</script>
</body>
</html>
