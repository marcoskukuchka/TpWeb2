<div class="col-lg-3 col-md-4 col-sm-12">

    <div class="container-fluid">
        <img class="img-fluid mx-auto pt-5 " src="img/elbardoinmortal.png" alt="logo libreria">
        <h2 class="pt-3 text-center text-uppercase">El Bardo Inmortal</h1>

    </div>
<?php

$ESTE_ARCHIVO  = 'ejemplo.php';

// Analizo los parámetros de invocación a esta página
    if (isset($_REQUEST['id_editorial']))
        $id_editorial = $_REQUEST['id_editorial'];
    else
        $id_editorial = array();

    if (isset($_REQUEST['id_genero']))
        $id_genero = $_REQUEST['id_genero'];
    else
        $id_genero = array();

//guardo json en array
$a_multi_genero = json_decode(file_get_contents('./json/genero.json'), true);
$a_multi_editorial = json_decode(file_get_contents('./json/editorial.json'), true);
$a_multi_productos = json_decode(file_get_contents('./json/detalleproductos.json'), true);

?>



    <div>
        
         <form action="" method="get">
<!-- buscador editoriales -->
          <ul class="list-group pt-5">
               <h3>Editoriales</h3>
               <?php
               $i = 1;
               foreach ($a_multi_editorial as $a_editorial) {
                if (in_array($a_editorial['id_editorial'],$id_editorial))
                    $checked = 'checked="chequed"';
                else
                    $checked = '';
                $i = $i + 1;
                ?>
               <li class="list-group-item d-flex justify-content-between align-items-center">
               <div class="custom-control custom-checkbox">
               <?php 
               echo '<input type="checkbox" class="custom-control-input" id="' . $i .'" name="id_editorial[]" value = "' . $a_editorial['id_editorial'] . '" ' . $checked . '>';
               
                       echo '<label class="custom-control-label" for="'. $i .'">'. $a_editorial['nombre'].'</label>';
                        ?> 
                    </div>
                    <span class="badge badge-success badge-pill">4</span>
                </li>
            </ul>
                <?php
                }
                ?> 

<!-- Buscador Generos -->
            <ul class="list-group pt-5">
               <h3>Generos</h3>
               <?php
               $i = 1;
               foreach ($a_multi_genero as $a_genero) {
                if (in_array($a_genero['id_genero'],$id_genero))
                    $checked = 'checked="chequed"';
                else
                    $checked = '';
                $i = $i + 10;
                ?>
               <li class="list-group-item d-flex justify-content-between align-items-center">
               <div class="custom-control custom-checkbox">
               <?php 
               echo '<input type="checkbox" class="custom-control-input" id="' . $i .'" name="id_genero[]" value = "' . $a_genero['id_genero'] . '" ' . $checked . '>';
               
                       echo '<label class="custom-control-label" for="'. $i .'">'. $a_genero['nombre'].'</label>';
                        ?> 
                    </div>
                    <span class="badge badge-success badge-pill">4</span>
                </li>
            </ul>
                <?php
                }
                ?> 


            <div class="container-fluid h-100">
                <div class="row w-100 align-items-center">
                    <div class="col text-center">
                        <input type="submit" value="Buscar" class="btn btn-success mt-2 mb-5 pl-5 pr-5">
                    </div>
                </div>
            </div>

        </form>

    </div>


</div>

