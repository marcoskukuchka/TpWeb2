<?php

function contarItems($array, $indice, $valorBuscado){
    $contador = 0;

    foreach ($array as $items_array) {
        if ($items_array[$indice] == $valorBuscado)
            $contador = $contador + 1;
    }
    return $contador;
}



?>