<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/estilo10.css">
<title>Formulario Calificacion</title>
<style>
    body{
       background: url('img/k.jpg');

    }
h1{
    color: white;
    aling-text: center;
}
</style>
</head>
<body>
<h1 id="mensaje">
    ¡Gracias por confiar en nosotros para tus compras!<br> Nos encantaría saber tu opinión sobre los productos que adquiriste.<br> Tu feedback es invaluable para nosotros y nos ayuda a mejorar continuamente nuestros productos y servicios.
    <br>
    Por favor,<br> tómate un momento para dejar tu valoración. <br>¡Tu opinión cuenta!
</h1>

<!-- Se hace llmado de validar4.php para hace la insercion de datos -->
<form action="CLvalidacion2.php" method="post">
    <label for="nombre_usuario"></label>
    <input type="text" id="nombre_usuario"  placeholder="Ingrese su Usuario" name="nombre_usuario" required><br><br>

    <label for="nombre_producto"></label>
    <select name="id_producto" id="id_producto" required>
        <option value="">Selecciona un producto</option>
        <option value="1">Pantalon Negro Jean</option>
        <option value="2">Blusa Azul Women</option>
        <option value="3">Jogger Beige</option>
        <option value="4">Chaqueta Men</option>
        <option value="5">Vestido Black Women</option>
        <option value="6">Camisa Negra Oversize</option>
        <option value="7">Vestido Women H&M</option>
        <option value="8">Sudadera Black</option>
        <option value="9">Camisa Azul H&M</option>
        
    </select><br><br>

    <label for="puntuacion"></label>
    <input type="number" id="puntuacion" placeholder="Ingrese su Valoracion del producto" name="puntuacion" min="1" max="5" required><br><br>

    <label for="comentario"></label>
    <textarea id="comentario" name="comentario"  placeholder="Ingrese su Comentario respecto al producto" rows="3" cols="42"></textarea><br><br>

    <button type="submit" name="submit">Enviar Opinion</button>
</form>

</body>
</html>
