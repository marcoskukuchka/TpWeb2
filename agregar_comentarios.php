
<?php

$idlibro = $_REQUEST[$id_banner];

$contenido = file_get_contents('json/comentarios.json'); //carga archivo json
$contenido_decodificado = json_decode($contenido, true);  //crea un array para php
$a_multi_comentarios = array( 'id_producto' => $idlibro, 'mail'=>$_REQUEST['mail'],'comentario'=>$_REQUEST['comentario'], 'valoracion' => $_REQUEST['valoracion']); //agrega nueva info al array
$contenido_decodificado[date('YmdHisU')] = $a_multi_comentarios; //agrega contenido
$js = json_encode($contenido_decodificado); //codifica nuevamente
file_put_contents('json/comentarios.json', $js); //agrega el contenido

?>