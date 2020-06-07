<div id="modalContra" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Cambiar Contraseña</h5>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="nuevaContra" class="col-form-label">Escriba una nueva contraseña:</label>
                                <input type="text" class="form-control" id="nuevaContra">
                            </div>
                            <div class="form-group">
                                <label for="confirmarpass" class="col-form-label">Confirme su contraseña:</label>
                                <input type="text" class="form-control" id="confirmarpass"></input>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button id="btnactualiza" type="button" class="btn btn-success" onclick="validarContraseña();" disabled>Actualizar Contraseña</button>
                        </div>
                    </div>
                </div>
            </div>