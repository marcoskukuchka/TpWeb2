<?php
$pagina = 'Detalles';
require_once("includes/head.php");

?>
<!-- Fin Navegacion -->
<main>


  <!-- contenido -->
  <div class="container mt-5">

    <div class="row">
      <?php
      require_once("includes/aside.php");
      require_once("includes/func/funciones.php");
      $id_libro = $_REQUEST['id'];
      
      $a_multi_productos = json_decode(file_get_contents('json/detalleproductos.json'), true);
      $a_multi_comentarios = json_decode(file_get_contents('json/comentarios.json'), true);
      $a_multi_editorial = json_decode(file_get_contents('json/editorial.json'), true);
      $a_multi_genero = json_decode(file_get_contents('json/genero.json'), true);
     
      $a_producto = $a_multi_productos[$id_libro];
      $a_editorial = $a_multi_editorial[$a_producto['id_editorial']];
      $a_genero = $a_multi_genero[$a_producto['id_genero']];

      /* Variables aux para la descripcion del producto */
      $titulo = $a_producto['nombre'];
      $precio = $a_producto['precio'];
      $editorial = $a_editorial['nombre'];
      $genero = $a_genero['nombre'];
      $descripcion = $a_producto['descripcion_larga'];
      $estrellas = muestraEstrellas($a_multi_comentarios,'id_producto', $a_producto['id_producto']);
      $id_banner = $a_producto['id_producto'];
      $banner = 'img\\productos\\'.$id_banner.'\\'.$id_banner.'_banner.jpg';
      ?>



      <div class="col-lg-9 col-md-8 ">

        <div class="card mt-4">
          <img class="card-img-top img-fluid" src="<?php echo $banner ?>" alt="<?php echo $titulo?>">
          <div class="card-body">
            <h3 class="card-title"><?php echo $titulo?></h3>
            <h4 class="pb-1"><?php echo $precio?></h4>
            <h5 class="pb-1">Editorial: <?php echo $editorial?></h5>
            <h5 class="pb-1">Género Literario: <?php echo $genero?></h5>
            <p class="card-text"><?php echo $descripcion?></p>
            <p class="font-weight-bold">Valoracion general</p>
            <span class="text-warning"><?php echo $estrellas?></span>
            
          </div>
        </div>


        <div class="card card-outline-secondary my-4">
          <div class="card-body">
            <h4>Comentarios</h4>
          </div>
          <div class="card-body">
            <?php 
             $cantidad = 1;
             

             foreach ($a_multi_comentarios as $indice => $a_comentario) {
                 if ($a_comentario['id_producto'] == $_GET['id']) {
                     $cantidad++; 
                     /* Variables aux para los comentarios */
                     $comentario = $a_comentario['comentario']; 
                     $mail = $a_comentario['mail'];
                     $valoracion = valoracionComentario($a_comentario['valoracion']);
                     
                     ?>
                     <p><?php echo $comentario?></p>
                     <small class="text-muted">Comentado por <?php echo $mail ?></small>
                     <br>
                     <small class="text-muted">Valoracion <?php echo $valoracion?></small>
                     <hr>
                     <?php
                     if ($cantidad > 3) {
                         break;
                     }
                 }
               }
            ?>
            
            <?php
            require_once("includes/modal.php")
            ?>
          </div>
        </div>
      </div>
    </div>

</main>

<!-- inicio Footer -->
<?php
require_once("includes/footer.php");
?>