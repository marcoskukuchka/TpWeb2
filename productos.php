<?php
require_once("includes/head.php");
?>
<!-- Fin Navegacion -->

<!-- Contenido pagina -->
<main>


    <div id="aside" class="container mt-5">

        <div class="row">
            <!-- aside filtros -->
            <?php
            require_once("includes/aside.php")
            ?>


            <div class="col-lg-9 mr-0">

                <!-- carrusel -->
                <div id="carouselExampleIndicators" class="carousel slide my-4 ocultar" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid" src="img/banner/bannerHarry.jpg" alt="Coleccion libros harry potter salamandra">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="img/banner/bannerSigloxxi.jpg" alt="editorial siglo veintiuno">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="img/banner/alfaguaraBanner.jpg" alt="editorial Alfaguara">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Siguiente</span>
                    </a>
                </div>


                <!-- fin carrusel -->


                <!-- incicio productos -->
                <?php

                require_once("includes/listaProductos.php");
                ?>

            </div>


        </div>


    </div>



</main>

<!-- inicio Footer -->
<?php
require_once("includes/footer.php");
?>