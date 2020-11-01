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
$mail->Password = "Sebastian1234"; // SMTP password

$mail->From = "sebastiang.lopez@davinci.edu.ar";
$mail->FromName = $_REQUEST['Nombre']." ".$_REQUEST['Apellido'];        // remitente

$mail->AddAddress("sebastiang.lopez@davinci.edu.ar", $_REQUEST['Area']);        // destinatario

$mail->AddReplyTo($_REQUEST['mail'], $_REQUEST['Nombre']." ".$_REQUEST['Apellido']);    // responder a

$mail->Port       = 587;
//Definmos la seguridad como TLS
$mail->SMTPSecure = 'tls';
//Tenemos que usar gmail autenticados, así que esto a TRUE
$mail->SMTPAuth   = true;

$mail->WordWrap = 50;     // set word wrap to 50 characters
$mail->IsHTML(true);     // set email

$mail->Subject = $_REQUEST['Asunto'];
$mail->Body    = $_REQUEST['mail']." ".$_REQUEST['Mensaje'];
$mail->AltBody = "This is the body in plain text for non-HTML mail clients";




if(!$mail->Send())
{
   echo "Message could not be sent. <p>";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}

echo "Message has been sent";


$contenido = file_get_contents('json/a_contactos.json'); //carga archivo json
$contenido_decodificado = json_decode($contenido, true);  //crea un array para php
$a_contactos = array('fecha' => date('d-m-Y H:i:s'), 'nombre' => $_REQUEST['Nombre'],'apellido' => $_REQUEST['Apellido'],'telefono' => $_REQUEST['telefono'], 'mail'=>$_REQUEST['mail'],'asunto'=>$_REQUEST['Asunto'],'mensaje'=>$_REQUEST['Mensaje'], 'sector' => $_REQUEST['Area']);
$contenido_decodificado[date('YmdHisU')] = $a_contactos; //agrega contenido
$js = json_encode($contenido_decodificado);

file_put_contents('json/a_contactos.json', $js);
?> 