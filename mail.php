<html> 
 <head>
      <title>Ejemplo de email en PHP 7</title>
  </head> 
 
 <body>
 
  <?php
 
   if($_POST)
    {
     // Correo al que queremos que llegue
      $destinatario = "money@lomejordel.com";
     // Asunto
     $asunto = "Email de prueba del Tutorial PHP 7";
     // Mensaje
      $mensaje = "Hola, este email es una prueba del Tutorial PHP 7. Los datos anexos al email son: <br><br> 
           Nombre: ".$_POST['nombre']."<br>
            Ciudad: ".$_POST['ciudad']."<br>
            Año de nacimiento: ".$_POST['anoNacimiento']."<br><br>
 
            Saludos!";
      // Cabeceras
      // Para enviar un correo HTML, debe establecerse la cabecera Content-type
       $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
       $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
       // Cabeceras adicionales
        $cabeceras .= 'To: TU NOMBRE <carlosepa@gmail.com>' . "\r\n";
        $cabeceras .= 'From: Tutorial PHP 7 <carlospages@lomejordel.com>' . "\r\n";
     // Enviamos el email
 
 
 
 
      if(@mail($destinatario, $asunto, $mensaje, $cabeceras))
     {
         echo "El email se envió correctamente a ".$destinatario.".";
      }
     else{
         echo "El email no se pudo enviar.";
     }
 
    }
 
 ?>
 
    <form action="" method="post">
        <p>
         Dime cuál es tu nombre: <input type="text" name="nombre">
       </p>
      <p>
         Dime cómo se llama tu ciudad: <input type="text" name="ciudad">
       </p>
      <p>
         ¿En qué año naciste?: 
            <select name="anoNacimiento">
             <option value="null">Selecciona un año</option>
             <?php
             $anos = 1900;
           while ($anos < 2000)
              {
           ?>
            <option value="<?=$anos;?>"><?=$anos;?></option>
            <?php
             $anos++;
              }
           ?>
            </select>
       </p>
      <p>
         <input type="submit" value="Validar">
       </p>
 
      </form>
 
 </body> 
  </html>