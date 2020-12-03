<?php

require_once("fpdf182/fpdf.php");

$id_libro = $_REQUEST['id'];
$a_multi_productos = json_decode(file_get_contents('json/detalleproductos.json'), true);
$a_producto = $a_multi_productos[$id_libro];
$precio = '$' . $a_producto['precio'];
$nombre = $a_producto['nombre'];
$banner = 'img\\productos\\'.$id_libro.'\\'.$id_libro.'_banner.jpg';
$descripcion = $a_producto['descripcion_larga'];

$pdf = new FPDF(); 
$pdf->AddPage(); 
$pdf->SetFont('Arial','',15); 
$pdf->Cell(3,140,$nombre);
$pdf->SetFont('Arial','',12); 
$pdf->Cell(1,155,$precio);
$pdf->Image('img\logoCabeza.png',3,6);
$pdf->Image($banner, 2,20);
$pdf->SetFont('Arial','',12); 
$pdf->SetXY(10,90);
$pdf->MultiCell(185,8,utf8_decode($descripcion),1);
$pdf->Output('D', 'Descripcion.pdf');

?>