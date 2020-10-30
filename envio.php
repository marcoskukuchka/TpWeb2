<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

/*Lo primero es añadir al script la clase phpmailer desde la ubicación en que esté*/
require ('PHPMailer-master\src\PHPMailer.php');
require ('PHPMailer-master\src\Exception.php');
require ('PHPMailer-master\src\SMTP.php');



$mail = new PHPMailer();

$mail->IsSMTP();                                      // set mailer to

$mail->Host = 'smtp.gmail.com';  // specify main and backup server
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->Username = "sebastiang.lopez@davinci.edu.ar";  // SMTP username
$mail->Password = "Sebastiang1103"; // SMTP password

$mail->From = "sebastiang.lopez@davinci.edu.ar";
$mail->FromName = $_REQUEST['Nombre'];        // remitente
$mail->AddAddress("sebastiang.lopez@davinci.edu.ar", "destinatario");        // destinatario

$mail->AddReplyTo("sebastiang.lopez@davinci.edu.ar", "respuesta a");    // responder a

$mail->Port       = 587;
//Definmos la seguridad como TLS
$mail->SMTPSecure = 'tls';
//Tenemos que usar gmail autenticados, así que esto a TRUE
$mail->SMTPAuth   = true;

$mail->WordWrap = 50;     // set word wrap to 50 characters
$mail->IsHTML(true);     // set email

$mail->Subject = "Asunto .....";
$mail->Body    = "This is the HTML message body <b>in bold!</b>";
$mail->AltBody = "This is the body in plain text for non-HTML mail clients";

if(!$mail->Send())
{
   echo "Message could not be sent. <p>";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}

echo "Message has been sent";
echo $_REQUEST['Nombre'];
?> 