<?php
$pagina = 'Carrito';
require_once("includes/head.php");
require_once("includes/func/funciones.php");
?>

<main >

    <div class="container ">
        <div class="row mt-5">

    <?php require_once("includes/aside.php");
      if (isset($_REQUEST['producto'])) {
        $contenido = file_get_contents('json/id_compras.json'); //carga archivo json
        $contenido_decodificado = json_decode($contenido, true);  //crea un array para php
        $a_multi_compra = array( 'id_producto' => $_REQUEST['producto']); //agrega nueva info al array
        
        
        $contenido_decodificado[] = $a_multi_compra; //agrega contenido
        $js = json_encode($contenido_decodificado); //codifica nuevamente
        file_put_contents('json/id_compras.json', $js); //agrega el contenido
        
        
    
    }
    if (isset($_REQUEST['quitar_producto'])) {
        $quitar_usuario = $_REQUEST['quitar_producto'];
        
        $datos_usuarios= file_get_contents('json/id_compras.json');

        $json = json_decode($datos_usuarios, true);
        foreach($json as $usuarioJson=>$val)
        {
            if($val['id_producto']==$quitar_usuario)
            {
                unset($json[$usuarioJson]);
            }
        }
        file_put_contents("json/id_compras.json", json_encode($json, JSON_FORCE_OBJECT));
    
    } ?>


            <!-- Elementos generados a partir del JSON -->
            <main id="items" class="col-md-6  row margen">

                <div class="row col-lg-12 col-md-12 mb-4 ">
                    <?php
        
      


        $a_multi_productos = json_decode(file_get_contents('json/detalleproductos.json'), true);
        $a_multi_compra = json_decode(file_get_contents('json/id_compras.json'), true);
        $a_multi_editorial = json_decode(file_get_contents('json/editorial.json'), true);
        $a_multi_genero = json_decode(file_get_contents('json/genero.json'), true);
        $a_multi_comentario = json_decode(file_get_contents('json/comentarios.json'), true);
        
        $total = 0;
        $cantidad_productos= 0;
        foreach ($a_multi_productos as $a_producto) {
            foreach($a_multi_compra as $a_compra) {
            if ($a_producto["id_producto"]== $a_compra['id_producto']) {

                $id_prod = $a_producto['id_producto'];
                $precio = $a_producto['precio'];
                $nombre = $a_producto['nombre'];
                $descripcion = cortar_palabras($a_producto['descripcion_larga'], 70);
                $totalEstrellas = muestraEstrellas($a_multi_comentario, 'id_producto', $a_producto['id_producto']);
                $img = 'img\\productos\\' . $id_prod . '\\' . $id_prod . '_mini.jpg';
                $total = $total + $precio; 
                $cantidad_productos++;

        ?>

                    <div class="col-lg-6 col-md-12 mb-4 mt-5">
                        <div class="card ">
                            <a href="detallesProducto.php?id=<?php echo $id_prod ?>"><img class="card-img-top"
                                    src="<?php echo $img ?>" alt="<?php echo $nombre ?>"></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="detallesProducto.php?id=<?php echo $id_prod ?>"><?php echo $nombre ?></a>
                                </h4>
                                <h5><?php echo $precio; ?></h5>
                                <p class="card-text"><?php echo $descripcion ?></p>
                            </div>
                            <div class="card-footer">
                                <form action="carrito.php" method="get">
                                    <input type="hidden" disable="disable" class="form-control" name="quitar_producto"
                                        value=<?php echo $id_prod; ?> id="producto">
                                    <button type="submit" class="btn btn-warning" type="button">
                                        Eliminar
                                    </button>

                                </form>
                                <small><?php echo $totalEstrellas ?></small>
                            </div>
                        </div>
                    </div>

                    <?php
            }
        }
        }
        ?>


                </div>


            </main>
            <!-- Carrito -->
            <aside class="col-sm-2 position">

                <h2>Carrito</h2>
                <!-- Elementos del carrito -->
                <ul id="carrito" class="list-group"></ul>
                <hr>
                <!-- Precio total -->
                <p class="text-right">Cantidad productos: <?php echo $cantidad_productos ?> <span id="total"></span></p>

                <p class="text-right">Total: $<?php echo $total ?> <span id="total"></span></p>
                <button id="boton-vaciar" class="btn btn-danger">Finalizar Compra</button>
            </aside>
        </div>
    </div>
</main>

<?php
require_once("includes/footer.php");
?>