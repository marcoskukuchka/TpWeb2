<?php
$pagina = 'Gracias';
require_once("includes/head.php");

$total = $_REQUEST['total'];

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
                        <p class="mb-0 text-white">"Si el dinero va delante, todos los caminos se abren"</p>
                        <p class="blockquote-footer text-white ml-5 pl-5 pt-2 text-right"> <cite title="Source Title"> William Shakespeare </cite></p>
                  </blockquote>
            </div>
      </section>



      <section>
            <div class=" col-lg-7 col-md-7 mx-auto mt-5 pb-5">

                  <h4 class="text-white">Completa tus datos</h4>
                  <form action="graciascompra.php" method="get">

                        <input type="Nombre" class="form-control  mb-1" name="Nombre" id="Nombre" placeholder="Nombre" required>
                        <input type="apellido" class="form-control mb-1" name="Apellido" id="apellido" placeholder="Apellido" required>
                        <input type="email" class="form-control mb-1" name="mail" id="email" placeholder="Direccion de email (aca te va a llegar la factura)" required>
                        <input type="hidden" class="form-control" name="total" value=<?php echo $total; ?> disable="disable">
                        <p class="text-white" name=<?php $total ?>><?php echo "Tu total es de $" .  $total ?></p>


                        <div class="mb-3">
                              <h3 class="text-white text-center">Elegi tu metodo de pago</h3>

                              <div class="d-flex">
                                    <div class="pr-3">
                                          <button type="submit" class="pagar" id="Enviar"><img src="img/paypal.jpg" width="100%" height="100%" alt="paypal"></button>
                                    </div>
                                    <div class="pr-3">
                                          <button type="submit" class="pagar" id="Enviar"><img src="img/visa.jpg" width="100%" height="100%" alt="visa"></button>
                                    </div>
                                    <div class="pr-3">

                                          <button type="submit" class="pagar" id="Enviar"><img src="img/mercadopago.jpg" width="100%" height="100%" alt="mercadopago"></button>
                                    </div>

                              </div>


                        </div>

                  </form>

            </div>
      </section>

</main>


<!-- footer  -->
<?php
require_once("includes/footer.php");
?>