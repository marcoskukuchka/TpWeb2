<?php
$pagina = 'Gracias';
require_once("includes/head.php");


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

$mail->AddAddress("sebastiang.lopez@davinci.edu.ar", $destinatario);        // destinatario

$mail->AddReplyTo($_REQUEST['mail'], $_REQUEST['Nombre']."".$_REQUEST['Apellido']);    // responder a

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




?>
<!-- fin nav -->

<!-- agregar imagen pluma y el bardo -->
<!-- agregar un parrafo  -->
<main class="fondo-portada reset">

      <section class="container">

            <!-- identidad sitio -->

            <div class="container col-lg-9 col-md-6 mb-4 justify-content-center text-center pt-5">
                  <h1 class="pt-5 titulo text-uppercase display-3">El Bardo Inmortal</h1>

                  <blockquote class="blockquote">
                        <p class="mb-0 text-white">"El hombre arruinado lee su condición en los ojos de los demás con tanta rapidez que él mismo siente su caída."</p>
                        <p class="blockquote-footer text-white ml-5 pl-5 pt-2 text-right"> <cite title="Source Title"> William Shakespeare </cite></p>
                  </blockquote>
            </div>
      </section>



      <section>
            <div class=" col-lg-6 col-md-6 mx-auto mt-5 pb-5">
                  <div class="alert alert-success" role="alert">
                        <div class="text-center">
                              <h4 class="alert-heading"><?php echo "¡Muchas Gracias " .$_REQUEST['Nombre']."!"?></h4>
                              <p>Llenaste correctamente el formulario y llego a nuestra casilla. Este fue el primer paso para resolver tus dudas...</p>
                              <hr>
                              <p>En breve nos pondremos en contacto con vos!</p>

                              <button type="button" class="btn btn-outline-dark" action = "index.php" class="text-success">
                                    Volver a inicio</button>

                              <button type="button" class="btn btn-outline-dark" action = "productos.php" class="text-success">
                                     Seguir mirando </button>
                        </div>
                  </div>
            </div>
      </section>

</main>


<!-- footer  -->
<?php
require_once("includes/footer.php");
?>

