<?php
/* array editoriales */
echo '<h1>Array editoriales</h1>';

$a_multi_editorial = array(
    1 => array(
        'id_editorial' => 1,
        'nombre' => 'Planeta'
    ),
    2 => array(
        'id_editorial' => 2,
        'nombre' => 'De Bolsillo'
    ),
    3 => array(
        'id_editorial' => 3,
        'nombre' => 'Salamandra'
    ),
    4 => array(
        'id_editorial' => 4,
        'nombre' => 'Alfaguara'
    ),
    5 => array(
        'id_editorial' => 5,
        'nombre' => 'Anagrama'
    ),
);
echo '<pre>';
print_r($a_multi_editorial);
echo '</pre>';

$fp = fopen('editorial.json','w');
fwrite($fp,json_encode($a_multi_editorial));
fclose($fp);
