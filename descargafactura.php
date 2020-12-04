<?php

require_once("fpdf182/fpdf.php");

$total = $_REQUEST['total'];
$nombrecomprador = $_REQUEST['Nombre'];
$apellidocomprador = $_REQUEST['Apellido'];
$mailcomprador = $_REQUEST['mail'];


$a_multi_productos = json_decode(file_get_contents('json/detalleproductos.json'), true);
$a_multi_compra = json_decode(file_get_contents('json/id_compras.json'), true);
$a_multi_editorial = json_decode(file_get_contents('json/editorial.json'), true);
$a_multi_genero = json_decode(file_get_contents('json/genero.json'), true);
$a_multi_comentario = json_decode(file_get_contents('json/comentarios.json'), true);


$contador = 0;
$pdf = new FPDF();
$pdf->AddPage();
$pdf->Image('img\logoCabeza.png', 3, 6);
$start_x = $pdf->GetX(); //initial x (start of column position)
$current_y = $pdf->GetY();
$current_x = $pdf->GetX();
$cell_width = 10;  //define cell width
$cell_height = 20;    //define cell height

$item = 0;
foreach ($a_multi_productos as $a_producto) {
    foreach ($a_multi_compra as $a_compra) {
        if ($a_producto["id_producto"] == $a_compra['id_producto']) {
            $id_prod = $a_producto['id_producto'];
            $precio = $a_producto['precio'];
            $nombre = $a_producto['nombre'];
            $img = 'img\\productos\\' . $id_prod . '\\' . $id_prod . '_mini.jpg';


            $pdf->SetFont('Arial', '', 15);
            $pdf->Cell($cell_width, $cell_height, $nombre);
            $current_y += 4;
            $pdf->SetXY($current_x, $current_y);
            $pdf->SetFont('Arial', '', 12);
            $pdf->Cell($cell_width, $cell_height, "$" . $precio);
            $current_y += $cell_height;
            $pdf->SetXY($current_x, $current_y);

            $item = $item + 2;
            if ($item == 20) {
                $pdf->AddPage();
                $pdf->Image('img\logoCabeza.png', 3, 6);
                $start_x = $pdf->GetX(); //initial x (start of column position)
                $current_y = $pdf->GetY();
                $current_x = $pdf->GetX();
                $cell_width = 10;  //define cell width
                $cell_height = 20;
                $item = 0;
            }
        }
    }
}



$pdf->SetFont('Arial', '', 12);
$pdf->SetXY($current_x, $current_y);
$pdf->Cell($current_x, $current_y, "Su total es: $" . $total);
$current_y += 4;
$pdf->SetXY($current_x, $current_y);
$pdf->Cell($current_x, $current_y, "Gracias por elegirnos");


$adjunto = $pdf->Output('', 'S'); 


$a_multi_compra = json_decode(file_get_contents('json/id_compras.json'), true);
$compradeldia = file_get_contents('json/comprasGenerales.json'); //carga archivo json
$contenido_decodificado = json_decode($compradeldia, true);  //crea un array para php
$a_multi_compras = array('Nombre' =>$nombrecomprador, 'Apellido' =>$apellidocomprador, 'Mail' =>$mailcomprador, 'total' =>$total, $a_multi_compra); //agrega nueva info al array
$contenido_decodificado[date('YmdHisU')] = $a_multi_compras; //agrega contenido
$js = json_encode($contenido_decodificado); //codifica nuevamente
file_put_contents('json/comprasGenerales.json', $js); //agrega el contenido




foreach ($a_multi_productos as $a_producto) {
    foreach ($a_multi_compra as $a_compra) {
        $datos_usuarios= file_get_contents('json/id_compras.json');

        $json = json_decode($datos_usuarios, true);
        foreach ($json as $usuarioJson=>$val) {
            if ($a_producto["id_producto"] == $a_compra['id_producto']) {
                unset($json[$usuarioJson]);
            }
        }
        file_put_contents("json/id_compras.json", json_encode($json, JSON_FORCE_OBJECT));
    }
}




use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

/*Lo primero es añadir al script la clase phpmailer desde la ubicación en que esté*/
require ('PHPMailer-master\src\PHPMailer.php');
require ('PHPMailer-master\src\Exception.php');
require ('PHPMailer-master\src\SMTP.php');



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

$mail->AddAddress("elbardolibreria@gmail.com");        // destinatario

$mail->AddReplyTo($_REQUEST['mail'], $_REQUEST['Nombre']." ".$_REQUEST['Apellido']);    // responder a

$mail->Port       = 587; //puerto de salida

$mail->SMTPSecure = 'tls'; //Definmos la seguridad como TLS

$mail->SMTPAuth   = true; //Tenemos que usar gmail autenticados, así que esto a TRUE

$mail->WordWrap = 50;     // set word wrap to 50 characters
$mail->IsHTML(true);     // set email

$mail->Subject = "Factura de venta";
$mail->Body    = $_REQUEST['mail'];
$mail->AltBody = "This is the body in plain text for non-HTML mail clients";
$mail->AddStringAttachment($adjunto, 'Factura.pdf', 'base64', 'application/pdf');



if(!$mail->Send())
{
   echo "Message could not be sent. <p>";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}



?> 


