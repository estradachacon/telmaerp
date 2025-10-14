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
                    <div class="mb-3">
                        <label for="cliente_email" class="form-label">Email del Cliente</label>
                        <input type="email" class="form-control" id="cliente_email" name="cliente_email" required>
                    </div>
                    <div class="mb-3">
                        <label for="cliente_telefono" class="form-label">Teléfono del Cliente</label>
                        <input type="text" class="form-control" id="cliente_telefono" name="cliente_telefono" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->