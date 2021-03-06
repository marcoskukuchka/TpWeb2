<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

/*Lo primero es añadir al script la clase phpmailer desde la ubicación en que esté*/
require ('PHPMailer-master\src\PHPMailer.php');
require ('PHPMailer-master\src\Exception.php');
require ('PHPMailer-master\src\SMTP.php');

$archivo = (isset($_FILES['archivo'])) ? $_FILES['archivo'] : null;
if ($archivo) {
   $ruta_destino_archivo = "contactos/{$archivo['name']}";
   $archivo_ok = move_uploaded_file($archivo['tmp_name'], $ruta_destino_archivo);
}


$mail = new PHPMailer();

$mail->IsSMTP();   // set mailer to
$mail->SMTPAuth = true;

$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
$mail->Host = 'smtp.gmail.com';  // specify main and backup server
$mail->SMTPAuth = true;     // activa autenticacion SMTP
$mail->Username = "elbardolibreria@gmail.com";  // usuario SMTP
$mail->Password = "tpdavincilibreria"; // contraseña SMTP

$mail->From = "elbardolibreria@gmail.com";
$mail->FromName = $_REQUEST['Nombre']." ".$_REQUEST['Apellido'];        // remitente

$mail->AddAddress("elbardolibreria@gmail.com", $_REQUEST['Area']);        // destinatario

$mail->AddReplyTo($_REQUEST['mail'], $_REQUEST['Nombre']." ".$_REQUEST['Apellido']);    // responder a

$mail->Port       = 587; //puerto de salida

$mail->SMTPSecure = 'tls'; //Definmos la seguridad como TLS

$mail->SMTPAuth   = true; //Tenemos que usar gmail autenticados, así que esto a TRUE

$mail->WordWrap = 50;     // set word wrap to 50 characters
$mail->IsHTML(true);     // set email

$mail->Subject = $_REQUEST['Asunto'];
$mail->Body    = $_REQUEST['mail']." ".$_REQUEST['Mensaje'];

$mail->addAttachment($ruta_destino_archivo);
$mail->AltBody = "This is the body in plain text for non-HTML mail clients";




if(!$mail->Send())
{
   echo "Message could not be sent. <p>";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}

/* echo "Message has been sent"; */





$contenido = file_get_contents('json/a_contactos.json'); //carga archivo json
$contenido_decodificado = json_decode($contenido, true);  //crea un array para php
$a_contactos = array('fecha' => date('d-m-Y H:i:s'), 'nombre' => $_REQUEST['Nombre'],'apellido' => $_REQUEST['Apellido'],'telefono' => $_REQUEST['telefono'], 'mail'=>$_REQUEST['mail'],'asunto'=>$_REQUEST['Asunto'],'mensaje'=>$_REQUEST['Mensaje'], 'sector' => $_REQUEST['Area']); //agrega nueva info al array
$contenido_decodificado[date('YmdHisU')] = $a_contactos; //agrega contenido
$js = json_encode($contenido_decodificado); //codifa nuevamente
file_put_contents('json/a_contactos.json', $js); //agrega el contenido



?> 