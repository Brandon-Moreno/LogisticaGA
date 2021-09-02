<?php
$destinatario = 't1pe0f.1nf0@gmail.com';
$name = $_POST['name'];
$mail = $_POST['mail'];
$phone = $_POST['phone'];
$asunto = $_POST['asunto'];
$message = $_POST['message'];
$header = "from: Enviado desde Logística GA";
$mensajeCompleto = $message . "\n Atentamente:" . $name;

@mail($destinatario, $asunto, $mensajeCompleto,$phone, $header);
echo "<script>alert('¡Tu mensaje se ha enviado exitosamente!')</script>";
echo "<script>setTimeout(\"location.href='../index.html'\", 1000)</script>";
?>
