<?php

function contarItems($array, $indice, $valorBuscado){
    $contador = 0;

    foreach ($array as $items_array) {
        if ($items_array[$indice] == $valorBuscado)
            $contador = $contador + 1;
    }
    return $contador;
}


function muestraEstrellas($array, $indice, $producto_buscado){

    $suma = 0;
    $contador = 0;
    foreach ($array as $item_array) {
        if ($item_array[$indice] == $producto_buscado){
            $suma = $suma + $item_array['valoracion'];
            $contador++;
        }
    }
    
    
    $promedio = round($suma / $contador);
    $estrellas = "";
    for ($i=0; $i < $promedio ; $i++) { 
        $estrellas = $estrellas . '&#9733; ';
        
    }
        
    switch ($promedio) {
        case 4:
            $estrellas = $estrellas . '&#9734; ';
            break;
        case 3:
            $estrellas = $estrellas . '&#9734; ' . '&#9734; ';
            break;
        case 2:
            $estrellas = $estrellas . '&#9734; ' . '&#9734; ' . '&#9734; ';
            break;
        case 1:
            $estrellas = $estrellas . '&#9734; ' . '&#9734; ' . '&#9734; ' . '&#9734; ';
            break;

        default:
            # code...
            break;
    }    
   
    return $estrellas;
}

function valoracionComentario($valor_buscado){
    $estrellas = "";
    for ($i=0; $i < $valor_buscado ; $i++) { 
        $estrellas = $estrellas . '&#9733; ';
        
    }
    switch ($valor_buscado) {
        case 4:
            $estrellas = $estrellas . '&#9734; ';
            break;
        case 3:
            $estrellas = $estrellas . '&#9734; ' . '&#9734; ';
            break;
        case 2:
            $estrellas = $estrellas . '&#9734; ' . '&#9734; ' . '&#9734; ';
            break;
        case 1:
            $estrellas = $estrellas . '&#9734; ' . '&#9734; ' . '&#9734; ' . '&#9734; ';
            break;

        default:
            # code...
            break;
    }    
    return $estrellas;
}


/* cortar descripciones */

function cortar_palabras($texto, $limite, $break=' ', $pad='...'){
	if(strlen($texto) <= $limite)
		return $texto;
	$quiebre = strpos($texto, $break, $limite);
	if( $quiebre != false){
		if($quiebre < (strlen($texto) - 1)){
			$texto = substr($texto, 0, $quiebre).$pad;
		}
	}
	return $texto;
}