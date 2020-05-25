<?php
//al correo donde ira el mensaje
$destino = 'contactogoexp@gmail.com';

//obtenemos atributos en el archivo contacto.hmtl
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

//un pequeño mensaje
$header = "Enviado desde GOEXP";
$mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre;

mail($destino, $asunto, $mensajeCompleto, $header);
echo "<script>alert('Contacto enviado exitosamente')</script>";
echo "<script> setTimeout(\"location.href='public/index.html'\",1000)</script>";
?>