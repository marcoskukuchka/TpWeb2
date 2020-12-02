<?php

$pagina = 'Carrito';
require_once("includes/head.php");

require_once("includes/aside.php");



$contenido = file_get_contents('json/id_compras.json'); //carga archivo json
$contenido_decodificado = json_decode($contenido, true);  //crea un array para php
$a_multi_compra = array( 'id_producto' => isset($_REQUEST['producto'])); //agrega nueva info al array


$contenido_decodificado[] = $a_multi_compra; //agrega contenido
$js = json_encode($contenido_decodificado); //codifica nuevamente
file_put_contents('json/id_compras.json', $js); //agrega el contenido

$a_multi_productos = json_decode(file_get_contents('json/detalleproductos.json'), true);


$a_multi_compra = json_decode(file_get_contents('json/id_compras.json'), true);

            /* echo '<pre>';  
            print_r($a_multi_compra);
            echo '</pre>'; 
 */
            /* echo '<pre>';  
            print_r($a_multi_productos);
            echo '</pre>';  */


foreach ($a_multi_productos as $a_productos) {
    foreach($a_multi_compra as $a_compra) {
        if ($a_productos["id_producto"]== $a_compra['id_producto']) {
            echo '<pre>';  
            print_r($a_productos);
            echo '</pre>'; 
        }
    }
}



?>

