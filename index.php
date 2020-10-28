<?php
$pagina = 'Inicio';
require_once("includes/head.php");


?>
<!-- contenido pagina -->
<main class="fondo-portada">

    <section class="container">

        <!-- identidad sitio -->

        <div class="container col-lg-9 col-md-6 mb-4 justify-content-center text-center pt-5">
            <img class="pt-5 img-fluid" src="img/elbardoinmortal.png" alt="logo libreria">
            <h1 class="pt-5 titulo text-uppercase display-4">El Bardo Inmortal</h1>

            <blockquote class="blockquote">
                <p class="mb-0 text-white">"No existe nada bueno ni malo, es el pensamiento humano el que lo hace parecer así"</p>
                <p class="blockquote-footer text-white ml-5 pl-5 pt-2 text-right"> <cite title="Source Title"> William Shakespeare </cite></p>
            </blockquote>
        </div>
    </section>
    <!-- fin identidad sitio -->

    <!-- productos destacados -->
    <section>


        <div id="aside" class="container mt-5">

            <div class="col-lg-10 m-auto">
                <!--  <h2 class="mb-4 text-warning">Productos destacados</h2> -->
                <div class="row">

                    <?php
                    $a_multi_productos = json_decode(file_get_contents('json/detalleproductos.json'), true);
                    $a_multi_comentario = json_decode(file_get_contents('json/comentarios.json'), true);
                    require_once("includes/func/funciones.php");

                    foreach ($a_multi_productos as $a_producto) {
                        if ($a_producto['destacado'] == true) {
                    ?>
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="card h-100 producto">
                                    <?php echo "<a href='detallesProducto.php?id={$a_producto['id_producto']}'" ?>><img class="card-img-top" src="<?php echo $a_producto['url']; ?>" alt="<?php echo $a_producto['nombre']; ?>"><span class="badge badge-danger destacado">NOVEDAD</span></a>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <?php echo "<a href='detallesProducto.php?id={$a_producto['id_producto']}'" ?>><?php echo $a_producto['nombre']; ?></a>
                                        </h4>
                                        <h5><?php echo $a_producto['precio']; ?></h5>
                                        <p class="card-text"><?php echo $a_producto['descripcion_corta']; ?></p>
                                    </div>
                                    <div class="card-footer">
                                        <small><?php echo muestraEstrellas($a_multi_comentario, 'id_producto', $a_producto['id_producto']); ?></small>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    }


                    ?>

                </div>

            </div>
        </div>
        </div>
    </section>
    <!-- fin productos destacados -->
</main>

<!-- inicio Footer -->
<?php
require_once("includes/footer.php");
?>
<!-- fin Footer -->