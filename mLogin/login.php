<div class="login-box" >
    <div class="login-box-body bordeLogin">
        <p class="tituloLogin">Sistema Control de Accesos</p>
        <form action="verificar_login.php" method="post" id="frmLogin" style="border-color:#40739e">
            <div class="form-group has-feedback logoActivo">
                <label class="lblTitulo">Usuario:</label>
                <input type="usuario" id="loginUsuario" class="form-control" placeholder="Escribe el nombre de usuario" autofocus required>
            </div>
            <div class="form-group has-feedback">
                <label class="lblTitulo">Contraseña:</label>
                <input type="password" id="loginContra" class="form-control" placeholder="Escribe la contraseña" required>
            </div>
            <!-- Modal -->
            <div id="modalPass" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Cambiar Contraseña</h5>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="nuevopass" class="col-form-label">Elija una nueva contraseña:</label>
                                <input type="password" class="form-control" id="nuevopass">
                            </div>
                            <div class="form-group">
                                <label for="confirmapass" class="col-form-label">Confirme su contraseña:</label>
                                <input type="password" class="form-control" id="confirmapass"></input>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button id="btngenerar" type="button" class="btn btn-primary" onclick="GenerarAuto(8);">Generar Contraseña</button>
                            <button id="btnactualizar" type="button" class="btn btn-success">Actualizar Contraseña</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Toggle-->
            <label for="cambiarpass">¿Desea cambiar su contraseña?</label>&#160;&#160;&#160;&#160;&#160;&#160;&#160;
            <input id="check" type="checkbox" value="0" onchange="" data-toggle="toggle" data-on="Sí" data-off="No" data-onstyle="outline-success" data-width="60" data-size="sm" data-offstyle="outline-danger">
            <br><br>
                <!--Sumbit ingresar -->
                <div class="col text-center">
                    <button   type="submit" class="btn btn-outline-dark active" id="btnIngresar" disabled>
                        <i class="fas fa-lock" id="icoLogin"></i>
                        Ingresar al sistema
                    </button>
                </div>
        </form>
    </div>
</div>

