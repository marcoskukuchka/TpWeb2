<?php


// añadir el uso de Alias
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 

/*Lo primero es añadir al script la clase phpmailer desde la ubicación en que esté*/
require ('PHPMailer-master\src\PHPMailer.php');
require ('PHPMailer-master\src\Exception.php');
require ('PHPMailer-master\src\SMTP.php');


$mail = new PHPMailer();
//Definir que vamos a usar SMTP
$mail->IsSMTP();
//Esto es para activar el modo depuración. En entorno de pruebas lo mejor es 2, en producción siempre 0
// 0 = off (producción)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug  = 0;
//Ahora definimos gmail como servidor que aloja nuestro SMTP
$mail->Host       = 'smtp.gmail.com';
//El puerto será el 587 ya que usamos encriptación TLS
$mail->Port       = 587;
//Definmos la seguridad como TLS
$mail->SMTPSecure = 'tls';
//Tenemos que usar gmail autenticados, así que esto a TRUE
$mail->SMTPAuth   = true;


if(isset($_POST['Enviar']))
{
//Crear una instancia de PHPMailer

//Definimos el remitente (dirección y, opcionalmente, nombre)
$mail->SetFrom($_POST['email'], $_POST['Nombre'].$_POST['Apellido']);
//Y, ahora sí, definimos el destinatario (dirección y, opcionalmente, nombre)
$mail->AddAddress('sebastiang.lopez@davinci.edu.ar', 'El Destinatario');
//Definimos el tema del email
$mail->Subject = $_POST['Asunto'];
$mail->Body = $_POST['Mensaje'];



//Enviamos el correo
if(!$mail->Send()) {
  echo "Error: " . $mail->ErrorInfo;
} else {
  echo "Enviado!";
}





}

?>