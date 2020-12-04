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


<form action="">

<input type="text">




</form>




                  <div class="text-center">
                        <h3 class="display-4 text-white">Elegi tu metodo de pago</h3>
                        <h4 class="text-white"><?php echo "Tu total es de $".  $total?></h4>

                        <div class="d-flex">
                              <div class="pr-3">
                                    <a href="descargafactura.php?total=<?php echo $total ?>"><img src="img/paypal.jpg" 
                                    width="100%" height="100%" alt="paypal"></a>
                              </div>
                              <div class="pr-3">
                                    <a href="descargafactura.php?total=<?php echo $total ?>"><img src="img/visa.jpg" 
                                    width="100%" height="100%" alt="paypal"></a>
                              </div>
                              <div class="pr-3">
                                    <a href="descargafactura.php?total=<?php echo $total ?>"><img src="img/mercadopago.jpg" 
                                    width="100%" height="100%" alt="paypal"></a>
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