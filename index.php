<?php
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




                    <!-- <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100 producto">
                       
                            <a href="detallesProducto.php"><img class="card-img-top" src="img/miniaturas/salamandra1.jpg" alt=""><span class="badge badge-danger destacado">NOVEDAD</span></a>
                            
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="detallesProducto.php">Harry Potter y el caliz de fuego</a>
                                </h4>
                                <h5>$1699</h5>
                                <p class="card-text">Tras otro abominable verano con los Dursley, Harry se dispone a iniciar el cuarto curso en Hogwarts, la famosa escuela de magia...</p>
                            </div>
                            <div class="card-footer">
                                <small>&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100 producto">
                       
                            <a href="detallesProducto.php"><img class="card-img-top" src="img/miniaturas/salamandra5.jpg" alt=""><span class="badge badge-danger destacado">NOVEDAD</span></a>
                            
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="detallesProducto.php">El mar de los monstruos</a>
                                </h4>
                                <h5>$999</h5>
                                <p class="card-text">Desde que sabe que es hijo de un dios y una mortal, Percy Jackson espera que el destino le depare...</p>
                            </div>
                            <div class="card-footer">
                                <small>&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100 producto">
                       
                            <a href="detallesProducto.php"><img class="card-img-top" src="img/miniaturas/alfaguara3.jpg" alt=""><span class="badge badge-danger destacado">NOVEDAD</span></a>
                            
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="detallesProducto.php">Memorias impuras</a>
                                </h4>
                                <h5>$1299</h5>
                                <p class="card-text">El virrey ha muerto y, mientras preparan las exequias, en la ciudad de Álbora esperan un seguro estallido de violencia.</p>
                            </div>
                            <div class="card-footer">
                                <small>&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100 producto">
                       
                            <a href="detallesProducto.php"><img class="card-img-top" src="img/miniaturas/alfaguara5.jpg" alt=""><span class="badge badge-danger destacado">NOVEDAD</span></a>
                            
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="detallesProducto.php">Catedrales</a>
                                </h4>
                                <h5>$899</h5>
                                <p class="card-text">Hace treinta años, en un terreno baldío de un barrio tranquilo, apareció descuartizado y quemado el cadáver de una adolescente.</p>
                            </div>
                            <div class="card-footer">
                                <small>&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100 producto">
                       
                            <a href="detallesProducto.php"><img class="card-img-top" src="img/miniaturas/anagrama3.jpg" alt=""><span class="badge badge-danger destacado">NOVEDAD</span></a>
                            
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="detallesProducto.php">Amelie Nothomb</a>
                                </h4>
                                <h5>$2950</h5>
                                <p class="card-text">Hija de diplomatico, Amelie Nothomb paso buena parte de su ninez en Oriente. De ahi le quedo una pasion por...</p>
                            </div>
                            <div class="card-footer">
                                <small>&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div> -->
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