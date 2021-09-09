<?php
include("database.php");
if(isset($_POST["enviar"])){
  if(strlen($_POST['name']) >= 1 && strlen($_POST['name']) >= 1 && strlen($_POST['mail']) >= 1 && strlen($_POST['asunto']) >= 1){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $mail = $_POST['mail'];
    $asunto = $_POST['asunto'];
    $message = $_POST['message'];
    consulta= "INSERT INTO clients(Nombre, Telefono, Correo, Asunto, Mensaje) VALUES ('$name','$phone','$mail','$asunto','$message')";
    resultado= mysqli_query($conex, $consulta);
    if($resultado){
      ?>
      <h3 class="ok">Tu mensaje fue enviado exitosamente!</h3>
      <?php
    }else{
      ?>
       <h3 class="bad">¡Algo no ha sucedido!</h3>
       <?php
    }
  }
}
 ?>
