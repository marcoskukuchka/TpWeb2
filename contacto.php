<?php
require_once("includes/head.php");
?>
<!-- fin nav -->


<div class="container mt-5 pt-5 mb-5">
  <p class="text-uppercase" >Contactenos</p>
  <form action="guardaDatos.php" method="POST">
    <div class="form-row">
      <div class="form-group col-md-6">
      <label for="Nombre">Nombre:</label>
            <input type="Nombre" class="form-control" id="Nombre" placeholder="Nombre" required>
      </div>
      <div class="form-group col-md-6">
        <label for="inputapellido">Apellido:</label>
        <input type="apellido" class="form-control" id="apellido" placeholder="Apellido" required>
      </div>
    </div>
    <div class="form-row">
    <div class="form-group col-md-6 ">
      <label for="inputAddress">E-mail:</label>
      <input type="email" class="form-control" id="email" placeholder="Direccion de email">
    </div>

    <div class="form-group col-md-6">
    <label for="Telefono">Teléfono:</label>
    <input type="number" class="form-control" id="Telefono" placeholder="Telefono" max="99999999999999">
    </div>
    </div>

    <div class="form-row">
        <div class="col-md-6 mb-4">
            <label for="Asunto">Asunto:<span></span></label>
            <select class="custom-select" id="Area" name="Area" required>
                <option selected disabled value="">Para:</option>
                <option value="Productos destacados">ventas@elbardo.com.ar</option>
                <option value="Alfaguara">info@elbardo.com.ar</option>
                <option value="Anagrama">pedidos@elbardo.com.ar</option>
                <option value="Planeta">reclamos@elbardo.com.ar</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="Mensaje">Mensaje:</label>
        <textarea class="form-control" id="Mensaje" name="Mensaje" rows="6" min="50" required></textarea>
    </div>

    <div class="form-group mb-8">
    <button type="reset" class="btn btn-secondary"><a href='contacto.php' class="text-dark font-weight-bold">Limpiar</a></button>
    <button type="submit" class="btn btn-primary"><a href='gracias.php' class="text-dark font-weight-bold"> Enviar</a></button>
    </div>
  </form>

</div>

<!-- footer  -->
<?php
require_once("includes/footer.php");
?>
