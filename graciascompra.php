<?php

$pagina = 'Gracias';

require_once('descargafactura.php');
require_once("includes/head.php");

?>

<main class="fondo-portada reset">

      <section class="container">

            <div class="container col-lg-9 col-md-6 mb-4 justify-content-center text-center pt-5">
                  <h1 class="pt-5 titulo text-uppercase display-3">El Bardo Inmortal</h1>

                  <blockquote class="blockquote">
                        <p class="mb-0 text-white">"La felicidad es un estado espontáneo y no controlado. Si podemos parar a pensar cuán feliz somos será que no estamos centrado en las sensaciones que nos provocan felicidad en sí."</p>
                        <p class="blockquote-footer text-white ml-5 pl-5 pt-2 text-right"> <cite title="Source Title"> William Shakespeare </cite></p>
                  </blockquote>
            </div>
      </section>


      <section>
            <div class=" col-lg-6 col-md-6 mx-auto mt-5 pb-5">
                  <div class="alert alert-success" role="alert">
                        <div class="text-center">
                              <h4 class="alert-heading"><?php echo "¡Muchas Gracias por tu compra " .$_REQUEST['Nombre']."!"?></h4>
                              <p>Ya te mandamos tu factura por correo electrónico a la dirección que nos pasaste.</p>
                              <hr>
                              <p>Si por algun motivo no te llega, mandanos un mail desde nuestra pagina de <a href="contacto.php">Contactos</a></p>
                              <div class="d-flex justify-content-center">
                                    <form class=" pr-2"action="index.php">
                                          <button type="submit" class="btn btn-outline-dark"  class="text-success">
                                                Volver a inicio</button>
                                    </form>
                                    <form action="productos.php">
                                          <button type="submit" class="btn btn-outline-dark" class="text-success">
                                                 Seguir mirando </button>
                                    </form>
                              
                              </div>
                              
                        </div>
                  </div>
            </div>
      </section>

</main>


<!-- footer  -->
<?php
require_once("includes/footer.php");

?>

