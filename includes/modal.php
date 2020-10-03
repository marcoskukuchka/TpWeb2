<button class="btn btn-warning" data-toggle="modal" data-target="#ventanaModal">Dejar comentario</button>


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
                <form>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">e-mail</label>
                        <input type="email" class="form-control" id="email" placeholder="Direccion de email">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Reseña:</label>
                        <textarea class="form-control" id="message-text"></textarea>
                    </div>
                   
                        <label for="Asunto">Calificación</label>
                        <select class="custom-select mb-3" id="Area" name="Area" required>
                            <option selected disabled value="5 estrellas"><span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9733;</span></option>
                            <option value="4 estrellas"><span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span></option>
                            <option value="3 estrellas"><span class="text-warning">&#9733; &#9733; &#9733; &#9734; &#9734;</span></option>
                            <option value="2 estrellas"><span class="text-warning">&#9733; &#9733; &#9734; &#9734; &#9734;</span></option>
                            <option value="1 estrella"><span class="text-warning">&#9733; &#9734; &#9734; &#9734; &#9734;</span></option>
                        </select>
                    
                    <div class="mt-3">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">
                            cerrar
                        </button>
                        <button class="btn btn-warning" type="button">
                            aceptar
                        </button>
                    </div>
                </form>

            </div>
        </div>

    </div>


</div>