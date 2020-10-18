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
    
    $promedio = $suma / $contador;
    $estrellas = "";
    for ($i=0; $i < $promedio ; $i++) { 
        $estrellas = $estrellas . '&#9733; ';
        
    }
    return $estrellas;
}
?>