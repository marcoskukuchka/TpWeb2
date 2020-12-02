<!-- hasta aca mi codigo -->

<?php
$pagina = 'Carrito';
require_once("includes/head.php");
require_once("includes/func/funciones.php");

?>

<!-- Fin Navegacion -->
<main>


    <!-- contenido -->
    <div class="container mt-5">

        <div class="row">
            <?php
      require_once("includes/aside.php");
      if (isset($_REQUEST['producto'])) {
        $contenido = file_get_contents('json/id_compras.json'); //carga archivo json
        $contenido_decodificado = json_decode($contenido, true);  //crea un array para php
        $a_multi_compra = array( 'id_producto' => $_REQUEST['producto']); //agrega nueva info al array
        
        
        $contenido_decodificado[] = $a_multi_compra; //agrega contenido
        $js = json_encode($contenido_decodificado); //codifica nuevamente
        file_put_contents('json/id_compras.json', $js); //agrega el contenido
        
        
    
    }
    
    
    
    $a_multi_productos = json_decode(file_get_contents('json/detalleproductos.json'), true);
    $a_multi_compra = json_decode(file_get_contents('json/id_compras.json'), true);
    $a_multi_editorial = json_decode(file_get_contents('json/editorial.json'), true);
    $a_multi_genero = json_decode(file_get_contents('json/genero.json'), true);
    $a_multi_comentarios = json_decode(file_get_contents('json/comentarios.json'), true);
    ?>
     <div class="container-fluid col-lg-8 col-md-4 col-sm-12 mt-5">
    <?php
   

    foreach ($a_multi_productos as $a_productos) {
        foreach($a_multi_compra as $a_compra) {
            if ($a_productos["id_producto"]== $a_compra['id_producto']) {
                /* echo '<pre>';  
                print_r($a_productos);
                echo '</pre>';  */
                $titulo = $a_productos['nombre'];
                $precio = $a_productos['precio'];
                $editorial = $a_productos['id_editorial'];
                $genero = $a_productos['id_genero'];
                $descripcion = $a_productos['descripcion_larga'];
                /* $estrellas = muestraEstrellas($a_multi_comentarios,'id_producto', $a_producto['id_producto']); */
                $id_banner = $a_productos['id_producto'];
                $banner = 'img\\productos\\'.$id_banner.'\\'.$id_banner.'_banner.jpg';
                $descripcion = cortar_palabras($a_productos['descripcion_larga'], 70);
                ?>
            
                <div class="card border-primary mb-3 " >
                    <div class="card-header"><?php echo $titulo ?></div>
                    <div class="card-body text-primary">
                        <h5 class="card-title"><?php echo $precio ?></h5>
                        <p class="card-text"><?php echo $descripcion?></p>
                    </div>
                </div>
            
            <?php
            }
        }
    }
  
      ?>

</div>
           











</main>

<!-- inicio Footer -->
<?php
require_once("includes/footer.php");
?>