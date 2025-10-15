<?= $this->extend('Layouts/mainbody') ?>
<?= $this->section('content') ?>
<?= view('modals/clientes/cliente_new') ?> <!-- Contenido Modal -->
<?= view('modals/clientes/cliente_edit') ?> <!-- Contenido Modal -->

<div class="container col-12">
    <div class="row align-items-center mb-4">
        <div class="col-md-6 col-12">
            <h1>Listado de clientes</h1>
        </div>
        <div class="col-md-6 col-12 d-flex justify-content-end align-items-center">
            <form method="get" id="formPorPagina" class="d-flex align-items-center me-3">
                <label for="por_pagina" class="me-2">Mostrar:</label>
                <select name="por_pagina" id="por_pagina" class="form-select form-select-sm w-auto"
                    onchange="document.getElementById('formPorPagina').submit();">
                    <?php foreach ([5, 10, 25, 50, 100] as $opcion): ?>
                        <option value="<?= $opcion ?>" <?= $opcion == $porPagina ? 'selected' : '' ?>>
                            <?= $opcion ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                <span class="ms-2">registros</span>
            </form>
        </div>
        <div>
            <button class="btn btn-success" onclick="abrirModalClienteNew()">
                <i class="fa-solid fa-pen-to-square"></i>Nuevo Cliente
            </button>
        </div>
    </div>
</div>
<div class="mb-3"></div>
<table class="table table-striped table-hover table-bordered">
    <tr class='text-center'>
        <th class="col-sm-1">ID</th>
        <th class="col-sm-6">Nombre</th>
        <th class="col-sm-1">Acciones</th>
    </tr>
    <?php if (!empty($clientes) && is_array($clientes)): ?>
        <?php foreach ($clientes as $cliente): ?>
            <tr>
                <td class="text-center"><?= esc($cliente->id) ?></td>
                <td><?= esc($cliente->cliente_nombre) ?></td>
                <td class="text-center">
                    <button class="btn btn-sm btn-primary" onclick="edit(<?= $cliente->id ?>)"><i class="fa-solid fa-pen-to-square"></i>
                    </button>
                    <button class="btn btn-danger btn-sm" onclick="eliminarCliente(<?= $cliente->id ?>)">
                        <i class="fa-solid fa-trash-can"></i>
                    </button>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="3" class="text-center">No hay clientes registrados.</td>
        </tr>
    <?php endif; ?>
</table>
<!-- Aquí aparecen los enlaces de paginación -->
<div class="d-flex mt-3">
    <?= $pager->links('default', 'bootstrap_full') ?>
</div>
</div>
<script>
    const select = document.getElementById('por_pagina');

    // Cargar valor guardado
    if (localStorage.getItem('por_pagina_clientes')) {
        select.value = localStorage.getItem('por_pagina_clientes');
    }

    // Enviar el formulario cuando cambia
    select.addEventListener('change', function() {
        localStorage.setItem('por_pagina_clientes', this.value);
        this.form.submit();
    });
</script>

<script>
    function edit(id) {
        fetch(`/clientes/edit/${id}`)
            .then(response => response.json())
            .then(data => {
                console.log(data); // Para verificar el objeto en consola

                if (data.error) {
                    alert(data.error);
                    return;
                }

                // Llenar el modal con los datos correctos
                document.getElementById('cliente_id').value = data.id;
                document.getElementById('cliente_nombre_edit').value = data.cliente_nombre;

                // Mostrar el modal
                var modal = new bootstrap.Modal(document.getElementById('modalEditarCliente'));
                modal.show();
            })
            .catch(error => {
                console.error('Error:', error);
            });
    }
</script>
<script>
    document.getElementById('formEditarCliente').addEventListener('submit', function(e) {
        e.preventDefault(); // evita que recargue la página

        const id = document.getElementById('cliente_id').value;
        const formData = new FormData(this);

        fetch(`/clientes/update/${id}`, {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Muestra un mensaje
                    Swal.fire({
                        toast: true,
                        icon: 'success',
                        title: data.success,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 2000
                    });

                    // Cierra el modal
                    const modal = bootstrap.Modal.getInstance(document.getElementById('modalEditarCliente'));
                    modal.hide();

                    // Opcional: recargar la tabla o página
                    setTimeout(() => location.reload(), 800);
                } else if (data.error) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: data.error
                    });
                }
            })
            .catch(error => console.error('Error:', error));
    });
</script>
<script>
function eliminarCliente(id) {
    Swal.fire({
        title: "¿Eliminar cliente?",
        text: "Esta acción no se puede deshacer",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Sí, eliminar",
        cancelButtonText: "Cancelar"
    }).then((result) => {
        if (result.isConfirmed) {
            fetch(`/clientes/delete/${id}`, {
                method: 'POST'
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    Swal.fire({
                        toast: true,
                        icon: 'success',
                        title: data.success,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 2000
                    });

                    // Elimina la fila directamente sin recargar
                    const fila = document.querySelector(`button[onclick="eliminarCliente(${id})"]`).closest('tr');
                    fila.remove();

                } else if (data.error) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: data.error
                    });
                }
            })
            .catch(error => {
                console.error('Error:', error);
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Ocurrió un problema al eliminar el cliente'
                });
            });
        }
    });
}
</script>

<?= $this->endSection() ?>