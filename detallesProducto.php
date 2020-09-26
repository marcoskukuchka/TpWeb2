<?php
require_once("includes/head.php");
?>
<!-- Fin Navegacion -->
<main>


  <!-- contenido -->
  <div class="container mt-5">

    <div class="row">
      <?php
      require_once("includes/aside.php");
      ?>



      <div class="col-lg-9 col-md-8 ">

        <div class="card mt-4">
          <img class="card-img-top img-fluid" src="img/banner/harry_potter_banner.png" alt="">
          <div class="card-body">
            <h3 class="card-title">Harry Potter y el caliz de fuego</h3>
            <h4 class="pb-1">$1699</h4>
            <h5 class="pb-1">Editorial: Salamandra</h5>
            <h5 class="pb-1">Género Literario: Fantasía</h5>
            <p class="card-text">Tras otro abominable verano con los Dursley, Harry se dispone a iniciar el cuarto curso en Hogwarts, la famosa escuela de magia y hechicería. A sus catorce años, a Harry le gustaría ser un joven mago como los demás, sin embargo, al llegar al colegio, le espera una gran sorpresa que lo obligará a enfrentarse a los desafíos más temibles de toda su vida</p>
            <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
            4.0 estrellas
          </div>
        </div>


        <div class="card card-outline-secondary my-4">
          <div class="card-body">
            <h4>Comentarios</h4>
          </div>
          <div class="card-body">
            <p>Es uno de los mejores libros de la saga, junto con el tres y el siete, es un formato mucho más largo y complejo, la historia tiene mucho más detalles que la otra, pero por eso no deja de ser entretenida, incluso, se llegan a tocar temas mucho más serios y profundos, como la muerte, la traición, etc, etc. Es un libro estupendo, lo recomiendo ampliamente.</p>
            <small class="text-muted">Subido por Anonimo el 3/1/19</small>
            <hr>
            <p>La saga Potter crece a la par que el lector y profundiza en los personajes, sus conflictos y sus historias individuales. Sin embargo, al intentar variar aquello que le salió tan bien en las primeras entregas y darle un matiz más oscuro y adulto (que incluso se acerca al terror) J. K. Rowling iría perdiendo espontaneidad hasta írsele la saga de las manos. Sin ir más lejos, aspectos como el del enamoramiento y el paso de la infancia a la adolescencia de Potter los encuentro muy poco logrados. Magia, fantasía y aventuras que no falten.</p>
            <small class="text-muted">Subido por Anonimo el 3/1/18</small>
            <hr>
            <p>Este cuarto libro inicia la maduración de la saga, pensando tal vez en el crecimiento de los lectores, ademas cuenta con la competición que le da un ritmo ameno respecto a los anteriores libros. Que buen ritmo para contar la historia tiene la autora para no hacerlo pesado.</p>
            <small class="text-muted">Subido por Anonimo el 3/1/17</small>
            <hr>
            <?php
              require_once("includes/modal.php")
            ?>
          </div>
        </div>
      </div>
    </div>

</main>

<!-- inicio Footer -->
<?php
require_once("includes/footer.php");
?>