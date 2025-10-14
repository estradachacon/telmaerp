<!-- Modal -->
<div class="modal fade" id="clienteNewModal" tabindex="-1" aria-labelledby="clienteNewModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="clienteNewModalLabel">Nuevo Cliente</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="clienteNewForm">
                    <div class="mb-3">
                        <label for="cliente_nombre" class="form-label">Nombre del Cliente</label>
                        <input type="text" class="form-control" id="cliente_nombre" name="cliente_nombre" required>
                    </div>
                    <button type="button" class="btn btn-primary" onclick="guardarCliente()">Guardar</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->