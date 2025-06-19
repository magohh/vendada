
<?php
if(isset($_POST['email'])) {
 
    // 
 
    $email_to = "mago_hdz_h@outlook.es";
 
    $email_subject = "Hola Ismyc";
 
    }

 //En esta parte el valor "name"  sirve para crear las variables que recolectaran la información de cada campo
 
    $first_name = $_POST['nombre']; // requerido

    $email_from = $_POST['email']; // requerido
 
    $message = $_POST['message']; // requerido


//Este es el cuerpo del mensaje tal y como llegará al correo
 
    $email_message = "Hola Ismyc.\n\n";
 
 
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
 
 
    $email_message .= "Nombre: ".clean_string($first_name)."\n";
 
    $email_message .= "Email: ".clean_string($email_from)."\n";
 
    $email_message .= "Mensaje: ".clean_string($message)."\n";
 
 
//Se crean los encabezados del correo
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);
 
?>
 
 
 
<!-- Mensaje de que fue enviado-->
 
Gracias! Nos pondremos en contacto contigo a la brevedad
 
<?php
 
 
?>

