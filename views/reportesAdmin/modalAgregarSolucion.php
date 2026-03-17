<form id="frmAgregarSolucionReporte" method="POST" onsubmit="return agregarSolucionReporte()">
    <!-- Modal -->
    <div class="modal fade" id="modalAgregarSolucionReporte" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Escribe la solución</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <label for="solucion">Descripcion de la solucion</label>
            <textarea name="solucion" id="solucion" class="form-control" required></textarea>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button class="btn btn-primary">Guardar</button>
        </div>
        </div>
    </div>
    </div>
</form>