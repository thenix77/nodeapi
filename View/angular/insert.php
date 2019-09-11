<!-- Modal -->
<div class="modal fade" id="insertar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-secondary text-white">
                <h5 class="modal-title" id="insertartitle">INSERTAR LINK</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!--  -->
                <form id='form-insert'>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-bookmark"></i></span>
                        </div>
                        <input type="text" class="form-control" name='title' placeholder="Titulo" aria-label="Username" required>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-link"></i></span>
                        </div>
                        <input type="url" class="form-control" name='url' placeholder="Direccion Web" aria-label="Username" required>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-marker"></i></span>
                        </div>
                        <textarea name="description" cols="40" rows="10" placeholder='Descripcion del Sitio'></textarea>
                    </div>
                    <!--  -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                <button type="submit" class="btn  btn-outline-secondary ml-auto" id='btn-insertar'>
                    <i class="far fa-save"></i> Registrar
                </button>
            </div>
        </div>
        </form>
    </div>
</div> 