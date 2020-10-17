<?php

$a_multi_comentarios = json_decode(file_get_contents('/json/comentarios.json'), true);
$a_multi_genero = json_decode(file_get_contents('./json/genero.json'), true);
echo '<pre>';
print_r($a_multi_comentarios);
echo '</pre>';





?>
