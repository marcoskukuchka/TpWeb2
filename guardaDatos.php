<?php
$Nombre = $_post ["Nombre"];
$Apellido = $_post ["Apellido"];
$Email = $_post ["Email"];
$Telefono = $_post ["Telefono"];
$Asunto = $_post ["Asunto"];
$Mensaje = $_post ["Mensaje"];

$array = array("Nombre" => $Nombre, "Apellido" => $Apellido, "Email" => $Email, "Telefono"=> $Telefono, "Asunto" => $Asunto, "Mensaje" => $Mensaje);

if(file_exists("formulario.json")){
    $contener = file_get_contents("formulario.json");
    $datos = json_decode($contener);
    array_push($datos, $array);
    file_put_contents("formulario.json", json_encode($datos));

}else{

 $datos = array();
 array_push($datos, $array);
 $f = fopen("formulario.json", "w");
 fwrite($f, json_encode($datos));
 fclose($f);

}

?>