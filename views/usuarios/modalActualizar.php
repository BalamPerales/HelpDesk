<form id="frmActualizarUsuario" method="POST" onsubmit="return actualizarUsuario()">
    <!-- Modal -->
    <div class="modal fade" id="modalActualizarUsuarios" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Actualizar Usuario</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-sm-4">
                    <label for="paternou">Apellido paterno</label>
                    <input type="text" class="form-control" id="paternou" name="paternou" required>
                </div>
                <div class="col-sm-4">
                    <label for="maternou">Apellido materno</label>
                    <input type="text" class="form-control" id="maternou" name="maternou" required>
                </div>
                <div class="col-sm-4">
                    <label for="nombreu">Nombre</label>
                    <input type="text" class="form-control" id="nombreu" name="nombreu" required>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <label for="fecha_nacimientou">Fecha de nacimiento</label>
                    <input type="date" class="form-control" id="fecha_nacimientou" name="fecha_nacimientou" required>
                </div>
                <div class="col-sm-4">
                    <label for="sexou">Sexo</label>
                    <select class="form-control" name="sexou" id="sexou" required>
                        <option value=""></option>
                        <option value="F">Femenino</option>
                        <option value="M">Masculino</option>
                    </select>
                </div>
                <div class="col-sm-4">
                    <label for="telefonou">Teléfono</label>
                    <input type="text" class="form-control" id="telefonou" name="telefonou" required>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <label for="correou">Correo</label>
                    <input type="mail" class="form-control" id="correou" name="correou" required>
                </div>
                <div class="col-sm-4">
                    <label for="usuariou">Usuario</label>
                    <input type="text" class="form-control" id="usuariou" name="usuariou" required>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-4">
                    <label for="idRolu">Rol de Usuario</label>
                    <select class="form-control" name="idRolu" id="idRolu" required>
                        <option value="3">Usuario</option>
                        <option value="2">Técnico</option>
                        <option value="1">Administrador</option>
                    </select>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-12">
                    <label for="ubicacionu">Ubicación (Edificio, departamento, cubiculo, descripción)</label>
                    <textarea name="ubicacionu" id="ubicacionu" class="form-control"></textarea>  
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-warning">Actualizar</button>
        </div>
        </div>
    </div>
    </div>
</form>