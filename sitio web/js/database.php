<?php
//conexion con la base de datos y el servidor
$link = mysqli_connect("logisticaga.com.mx","logist28_soporte", "Linux080693") or die ("<h2>¡Ups se presento un problema!</h2>");
$db = mysqli_select_db("logist28_dbclients", $link) or die ("<h2>Error de Conexion</h2>");

// Obtenemos los valores del formulario
$name = $_POST['name'];
$mail = $_POST['mail'];
$phone = $_POST['phone'];
$asunto = $_POST['asunto'];
$message = $_POST['message'];

//Obtiene la longitud de un string
$req = (strlen($nombre) * strlen($phone) * strlen($mail) * strlen($asunto) * strlen($message) or die ("No se han llenado todos los campos"));

//Se Confirma la contraseña
if($asunto >= 1){
  die('Ingrese el asunto por favor <br /><br /> <a href="contactUs.html">Volver</a>');
}

//Se ingresa la información a la base de datos "dbclients"
mysqli_query("INSERT INTO clients VALUES ('$nombre','$telefono','$correo', '$asunto', '$mensaje')", $link) or die ("<h2>Error de Envío</h2>");

echo '<h2>Mensaje enviado exitosamente </h2>
      <h3>Gracias por contactárnos nuestro equipo enseguida se comunicara contigo</h3>
      <a href="index.html">Inicio</a>';
?>
