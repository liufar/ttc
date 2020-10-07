<?php  

// Llamando a los campos
$nombre = $_POST['name'];
$correo = $_POST['email'];
$telefono = $_POST['celular'];
$mensaje = $_POST['message'];

// Datos para el correo
$destinatario = "talentopisco@gmail.com";
$asunto = "Mensaje desde la Web de Talento Pisco";

$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Teléfono: $telefono \n";
$carta .= "Mensaje: $mensaje";

// Enviando Mensaje
mail($destinatario, utf8_decode($asunto), utf8_decode($carta));
header('Location:mensaje-envio.html');

?>