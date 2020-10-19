<div class="row">
<?php
$a_multi_comentario = json_decode(file_get_contents('./json/comentarios.json'), true);
require_once("includes/func/funciones.php");

 foreach ($a_multi_productos as $a_producto) {
    if ( ( in_array($a_producto['id_editorial'],$id_editorial) || empty($id_editorial) ) &&
       ( ( in_array($a_producto['id_genero'],$id_genero) || empty($id_genero) )))
       
    {


?>

    <div class="col-lg-4 col-md-6 mb-4">
    <div class="card h-100">
            <?php echo "<a href='detallesProducto.php?id={$a_producto['id_producto']}'"?>><img class="card-img-top"  src="<?php echo $a_producto['url'];?>" alt="<?php echo $a_producto['nombre'];?>"></a>
            <div class="card-body">
                <h4 class="card-title">
                <?php echo "<a href='detallesProducto.php?id={$a_producto['id_producto']}'"?>><?php echo $a_producto['nombre'];?></a>
                </h4>
                <h5><?php echo $a_producto['precio'];?></h5>
                <p class="card-text"><?php echo $a_producto['descripcion_corta'];?></p>
            </div>
            <div class="card-footer">
                <small><?php echo muestraEstrellas($a_multi_comentario,'id_producto', $a_producto['id_producto']);?></small>
            </div>
        </div>
    </div>

       <?php
    }
}
        ?>

   

</div>
