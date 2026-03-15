<form id="frmAgregarUsuario" method="POST" onsubmit="return agregarNuevoUsuario()">
    <!-- Modal -->
    <div class="modal fade" id="modalAgregarUsuarios" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Agregar Nuevo Usuario</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-sm-4">
                    <label for="paterno">Apellido paterno</label>
                    <input type="text" class="form-control" id="paterno" name="paterno" required>
                </div>
                <div class="col-sm-4">
                    <label for="materno">Apellido materno</label>
                    <input type="text" class="form-control" id="materno" name="materno" required>
                </div>
                <div class="col-sm-4">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <label for="fecha_nacimiento">Fecha de nacimiento</label>
                    <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" required>
                </div>
                <div class="col-sm-4">
                    <label for="sexo">Sexo</label>
                    <select class="form-control" name="sexo" id="sexo" required>
                        <option value=""></option>
                        <option value="F">Femenino</option>
                        <option value="M">Masculino</option>
                    </select>
                </div>
                <div class="col-sm-4">
                    <label for="telefono">Teléfono</label>
                    <input type="text" class="form-control" id="telefono" name="telefono" required>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <label for="correo">Correo</label>
                    <input type="mail" class="form-control" id="correo" name="correo" required>
                </div>
                <div class="col-sm-4">
                    <label for="usuario">Usuario</label>
                    <input type="text" class="form-control" id="usuario" name="usuario" required>
                </div>
                <div class="col-sm-4">
                    <label for="password">Contraseña</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-4">
                    <label for="idRol">Rol de Usuario</label>
                    <select class="form-control" name="idRol" id="idRol" required>
                        <option value="3">Usuario</option>
                        <option value="2">Técnico</option>
                        <option value="1">Administrador</option>
                    </select>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-12">
                    <label for="ubicacion">Ubicación (Edificio, departamento, cubiculo, descripción)</label>
                    <textarea name="ubicacion" id="ubicacion" class="form-control"></textarea>  
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <span class="btn btn-secondary" data-dismiss="modal">Cerrar</span>
            <button type="submit" class="btn btn-primary">Agregar</button>
        </div>
        </div>
    </div>
    </div>
</form>