<?php

/* $idlibro = $_REQUEST['id']; */

?>

<!-- <button class="btn btn-warning" data-toggle="modal" data-target="#ventanaModal">Dejar comentario</button> -->


<div class="modal" id="ventanaModal" tabindex="-1" role="dialog" aria-labelledby="tituloVentana" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 id="tituloVentana">Deja tu reseña!</h5>
                <button class="close" data-dismiss="modal" aria-label="cerrar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="GET">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">e-mail</label>
                        <input type="email" class="form-control" name = 'mail' id="email" placeholder="Direccion de email">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Reseña:</label>
                        <textarea class="form-control" name= 'comentario' id="message-text"></textarea>
                    </div>
                   
                        <label for="Asunto">Calificación</label>
                        <select class="custom-select mb-3" name = 'valoracion' id="Valoracion" required>
                            <option selected disabled value="5"><span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9733;</span></option>
                            <option value="4"><span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span></option>
                            <option value="3"><span class="text-warning">&#9733; &#9733; &#9733; &#9734; &#9734;</span></option>
                            <option value="2"><span class="text-warning">&#9733; &#9733; &#9734; &#9734; &#9734;</span></option>
                            <option value="1"><span class="text-warning">&#9733; &#9734; &#9734; &#9734; &#9734;</span></option>
                        </select>
                    
                    <div class="mt-3">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">
                            cerrar
                        </button>
                        <button type="submit" class="btn btn-warning" type="button">
                            aceptar
                        </button>

                        <?php


/* $contenido = file_get_contents('json/comentarios.json'); //carga archivo json
$contenido_decodificado = json_decode($contenido, true);  //crea un array para php
$a_multi_comentarios = array( 'id_producto' => 1, 'mail'=> $_REQUEST['mail'],'comentario'=> $_REQUEST['comentario'], 'valoracion' => $_REQUEST['valoracion']); //agrega nueva info al array
$contenido_decodificado[date('YmdHisU')] = $a_multi_comentarios; //agrega contenido
$js = json_encode($contenido_decodificado); //codifica nuevamente
file_put_contents('json/comentarios.json', $js); //agrega el contenido */

?>


                    </div>
                </form>

            </div>
        </div>

    </div>


</div>