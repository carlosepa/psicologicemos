<html> 
 <head>
      <title>Eviando solicitud</title>
  </head> 
 
 <body>
<?php
if(isset($_POST['email'])) {


$email_to = "consultas@psicologicemos.com";
$email_from = $_POST['email'];
$email_subject = "Contacto desde el sitio web";

// Aquí se deberían validar los datos ingresados por el usuario//
if(!isset($_POST['first_name']) ||
!isset($_POST['last_name']) ||
!isset($_POST['email']) ||
!isset($_POST['telephone']) ||
!isset($_POST['comments'])) {

echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
die();
}

$email_message = "Detalles del formulario de contacto:\n\n";
$email_message .= "Nombre: " . $_POST['first_name'] . "\n";
$email_message .= "Apellido: " . $_POST['last_name'] . "\n";
$email_message .= "E-mail: " . $_POST['email'] . "\n";
$email_message .= "Teléfono: " . $_POST['telephone'] . "\n";
$email_message .= "Comentarios: " . $_POST['comments'] . "\n\n";


// Ahora se envía el e-mail usando la función mail() de PHP//
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);

$email_message = "Detalles del formulario de contacto:\n\n";
$email_message .= "Nombre: " . $_POST['first_name'] . "\n";
$email_message .= "Apellido: " . $_POST['last_name'] . "\n";
$email_message .= "E-mail: " . $_POST['email'] . "\n";
$email_message .= "Teléfono: " . $_POST['telephone'] . "\n";
$email_message .= "Comentarios: " . $_POST['comments'] . "\n\n";


// Ahora se envía una copia a quien lo envia usando la función mail() de PHP//
$headers = 'From: '.$email_to."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_from, $email_subject, $email_message, $headers);

echo "¡El formulario se ha enviado con éxito!";
}
?>
<h1>¡El formulario se ha enviado con éxito!</h1>
<meta http-equiv="refresh" content="3;url=index.html">
</body> 
</html> 