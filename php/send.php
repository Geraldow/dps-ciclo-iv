<?php
if($_SERVER['REQUEST_METHOD']===POST){
  #STEP #1: Declare variables
  $names = $_POST['names'];
  $dni = $_POST['dni'];
  $address = $_POST['address'];
  $residence = $_POST['residence'];
  $cellphoneAttorney $_POST['cellphoneAttorney'];
  $cellphoneStudent $_POST['cellphoneStudent'];
  $birthdate $_POST['birthdate'];
  $email $_POST['email'];
  $username $_POST['username'];
  $password $_POST['password'];

  #STEP #2: Indicate the recipient
  $addressee = 'gbarboza.es@gmail.com';

  #STEP #3: Indicate the subject of the message
  $subject = 'MENSAJE DE REGISTRO DE CUENTA DE LA PÁGINA WEB'

  #STEP #4: Design the body of the message
  $body = 'Nombres: '.$names. '\n';
  $body.= 'DNI: '.$dni. '\n';
  $body.= 'Dirección: '.$email. '\n';
  $body.= 'Residencia: '.$residence. '\n';
  $body.= 'Celular de apoderado: '.$cellphoneAttorney. '\n';
  $body.= 'Celular del estudiante: '.$cellphoneStudent. '\n';
  $body.= 'Fecha de nacimiento: '.$birthdate. '\n';
  $body.= 'Correo electrónico: '.$email. '\n';
  $body.= 'Nombre de usuario: '.$username. '\n';
  $body.= 'Contraseña: '.$password. '\n';

  #STEP #5: Program the sending to the server of email
  if (mail($addressee, $subject, $body)) {
      echo "Tus datos han sido enviados correctamente.";
  } else {
      echo "Tus datos no han sido enviados";
  }
}
?>