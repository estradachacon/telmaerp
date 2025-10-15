<!-- Modal -->
<div class="modal fade" id="clienteNewModal" tabindex="-1" aria-labelledby="clienteNewModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="clienteNewModalLabel">Nuevo Cliente</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <form id="clienteNewForm" action="<?= base_url('clientes/create') ?>" method="post">
          <div class="mb-3">
            <label for="cliente_nombre" class="form-label">Nombre del Cliente</label>
            <input type="text" class="form-control" id="cliente_nombre" name="cliente_nombre" required>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar Cliente</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
