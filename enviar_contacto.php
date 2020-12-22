<!DOCTYPE html>
<html lang="es">
 
<head>
    <title>Enviando solicitud</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
 
 <body>
<?php
header("Content-Type: text/html;charset=utf-8");

if(isset($_POST['email'])) {

$email_to = "consultas@psicologicemos.com";
$email_from = $_POST['email'];
$email_subject = "Contacto desde el sitio web Psicologicemos.com";

// Aquí se deberían validar los datos ingresados por el usuario//
if(!isset($_POST['nombre']) ||
!isset($_POST['telefono']) ||
!isset($_POST['email']) ||
!isset($_POST['message'])) { 


echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
die();
}


$email_message = "Forrmulario de contacto:\n\n";
$email_message .= "Nombre y Apellido: " . $_POST['nombre'] . "\n";
$email_message .= "Teléfono: " . $_POST['telefono'] . "\n";
$email_message .= "E-mail: " . $_POST['email'] . "\n";
$email_message .= "Mensaje: " . $_POST['message'] .  "\n\n";


// Ahora se envía el e-mail usando la función mail() de PHP//
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);


$email_message = "Detalles del formulario de contacto:\n\n";
$email_message .= "Nombre y Apellido: " . $_POST['nombre'] . "\n";
$email_message .= "Teléfono: " . $_POST['telefono'] . "\n";
$email_message .= "E-mail: " . $_POST['email'] . "\n";
$email_message .= "Mensaje: " . $_POST['message'] .  "\n\n";


// Ahora se envía una copia a quien lo envia usando la función mail() de PHP//
$headers = 'From: '.$email_to."\r\n".
'Reply-To: '.$email_to."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_from, $email_subject, $email_message, $headers);

echo "¡El formulario se ha enviado con éxito!";
}
?>
<h1>¡El formulario se ha enviado con éxito!</h1>
<meta http-equiv="refresh" content="3;url=index.html">
</body> 
</html> 