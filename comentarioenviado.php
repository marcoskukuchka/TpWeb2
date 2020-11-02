<?php
$pagina = 'Gracias';
require_once("includes/head.php");
require_once('agregar_comentarios.php');


?>
<!-- fin nav -->

<!-- agregar imagen pluma y el bardo -->
<!-- agregar un parrafo  -->
<main class="fondo-portada reset">

      <section class="container">

            <!-- identidad sitio -->

            <div class="container col-lg-9 col-md-6 mb-4 justify-content-center text-center pt-5">
                  <h1 class="pt-5 titulo text-uppercase display-3">El Bardo Inmortal</h1>

                  <blockquote class="blockquote">
                        <p class="mb-0 text-white">"Presta el oído a todos, y a pocos la voz. Escucha las censuras de los demás; pero reserva tu propia opinión."</p>
                        <p class="blockquote-footer text-white ml-5 pl-5 pt-2 text-right"> <cite title="Source Title"> William Shakespeare </cite></p>
                  </blockquote>
            </div>
      </section>



      <section>
            <div class=" col-lg-6 col-md-6 mx-auto mt-5 pb-5">
                  <div class="alert alert-success" role="alert">
                        <div class="text-center">
                              <h4 class="alert-heading">¡Muchas gracias por dejar tu comentario!</h4>
                              <p>Ahora podes seguir buscando tu próxima aventura en forma de libro</p>

                              <button type="button" class="btn btn-outline-dark" action = "index.php" class="text-success">
                                    Volver a inicio</button>

                              <button type="button" class="btn btn-outline-dark" action = "productos.php" class="text-success">
                                     Seguir mirando </button>
                        </div>
                  </div>
            </div>
      </section>

</main>


<!-- footer  -->
<?php
require_once("includes/footer.php");
?>

