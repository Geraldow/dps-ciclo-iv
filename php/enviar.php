<?php
if($_SERVER['REQUEST_METHOD']===POST){
    #PASO #1: Declarar variables
    $nombre = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];

    #PASO #2: Indicar al destanario
    $destinatario = '71992956@certus.edu.pe';
    
    #PASO #3: Indicar el asunto del mensaje
    $asunto = 'MENSAJE DE LOCALHOST DE LA PÁGINA WEB'

    #PASO #4: Diseñar el cuerpo del mensaje
    $cuerpo = 'Nombres: '.$nombre. '\n';
    $cuerpo .= 'Apellidos: '.$apellidos. '\n';
    $cuerpo .= 'Correo electrónico: '.$email. '\n';
    $cuerpo .= 'Celular: '.$celular. '\n';

    #PASO #5: Programar el envío al servidor de correo
    if (mail($destinatario, $asunto, $cuerpo)) {
        echo "Tus datos han sido enviados correctamente.";
    } else {
        echo "Tus datos no han sido enviados";
    }
}
?>