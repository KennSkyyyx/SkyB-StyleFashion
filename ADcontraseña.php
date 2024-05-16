<!-- INSTALAR PHPMAILER PARA RECUPERACION DE CONTRASEÑA -->
<?php
include 'conexiondb.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

$correo = $_POST['correo1'];

// Validar correo en la tabla de cajero
$validar_correo_admin = mysqli_query($conexion, "SELECT * FROM cajero WHERE Caje_Correo='$correo'");

if (mysqli_num_rows($validar_correo_admin) > 0) {
    $consulta_contraseña = mysqli_query($conexion, "SELECT Caje_Contraseña FROM cajero WHERE Caje_Correo='$correo'");
    if ($fila_contraseña = mysqli_fetch_assoc($consulta_contraseña)) {
        $contraseña = $fila_contraseña['Caje_Contraseña'];
        $mail = new PHPMailer(true);
        try {
            $mail->SMTPDebug = 0; 
            // SMTP PARA ENVIAR EL CORREO
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            // SE CREA UN CORREO ELECTRONICO DONDE SE ACTIVA LA VERIFICACION DE 2 PASOS Y SE QUITA EL ACCESO
            // SE APLICACIONES DE TERCERO PARA QUE EL CORREO QUEDE LIBRE Y PUEDA ENVIAR CORREO
            $mail->Username   = 'passrecuperacionsky1@gmail.com';
            $mail->Password   = 'gqnf gxog zlnh zqqz';
            $mail->SMTPSecure = 'tls';
            $mail->Port       = 587;

            $mail->setFrom('passrecuperacionsky1@gmail.com', 'Passwordrecovery');
            $mail->addAddress($correo);
            $mail->isHTML(true);
            // MENSAJE QUE SE MUESTRA AL ENVIAR LA CONTRASEÑA A LOS CORREOS ELECTRONICOS
            $mail->Subject = 'Recuperacion de contrasena';
            $mail->Body    = 'Hola ADMIN, espero que te encuentres bien, 
            <br>Recibimos una solicitud para saber la contraseña de tu cuenta,
            <br>Entendemos lo estresante que puede ser olvidar una contraseña, pero no te preocupes estamos aqui para ayudarte a saber cual es tu contraseña.
            <br><hr>Si necesitas ayuda adicional o si no solicitaste este cambio de contraseña, no dudes en ponerte en contacto con nuestro equipo de soporte. Estamos aquí para ayudarte a proteger tu cuenta y garantizar tu seguridad en línea.</hr>
            <h4>Contacto<br>passrecuperacionsky1@gmail.com<br>Numero telefonico: 999999999</h4>
            <h2><hr>Tu contraseña es:</hr> '.$contraseña;
            
            $mail->send();
// ALERTA PARA AVISAR AL USUARIO O CLIENTE QUE SE ENVIO LA CONTRASEÑA AL CORRE, O QUE EL CORREO NO FUE ENCONTRADO, O HUBO UN ERROR
            echo '<script>alert("Hemos enviado su contraseña al correo electronico"); window.location="index.php";</script>';
        } catch (Exception $e) {
            echo '<script>alert("Hubo un error al enviar el correo."); window.location="ADrecuperacion.php";</script>';
        }
    } else {
        echo '<script>alert("Error al obtener la contraseña del cajero."); window.location="ADrecuperacion.php";</script>';
    }
} else {
    echo '<script>alert("Correo no encontrado o no corresponde a un cajero."); window.location="ADrecuperacion.php";</script>';
}

mysqli_close($conexion);
?>
