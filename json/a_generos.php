<?php
/* array generos */
echo '<h1>Array generos</h1>';

$a_multi_genero = array(
    1 => array(
        'id_genero' => 1,
        'nombre' => 'Operata Criolla'
    ),
    2 => array(
        'id_genero' => 2,
        'nombre' => 'Ficción'
    ),
    3 => array(
        'id_genero' => 3,
        'nombre' => 'Terror'
    ),
    4 => array(
        'id_genero' => 4,
        'nombre' => 'Novela Histórica'
    ),
    5 => array(
        'id_genero' => 5,
        'nombre' => 'Biografía'
    ),
    6 => array(
        'id_genero' => 6,
        'nombre' => 'Fantasia'
    ),
    7 => array(
        'id_genero' => 7,
        'nombre' => 'Ensayos'
    ),
    8 => array(
        'id_genero' => 8,
        'nombre' => 'Cuentos'
    ),
    9 => array(
        'id_genero' => 9,
        'nombre' => 'Policial'
    ),
);
echo '<pre>';
print_r($a_multi_genero);
echo '</pre>';

$fp = fopen('genero.json','w');
fwrite($fp,json_encode($a_multi_genero));
fclose($fp);

?>