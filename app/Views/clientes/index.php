<?= $this->extend('Layouts/mainbody') ?>
<?= $this->section('content') ?>
<?= view('modals/cliente_new') ?> <!-- Contenido Modal -->

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
                    <a href="#" class="btn btn-warning btn-sm">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>
                    <a href="#" class="btn btn-danger btn-sm">
                        <i class="fa-solid fa-trash-can"></i>
                    </a>
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
    select.addEventListener('change', function () {
        localStorage.setItem('por_pagina_clientes', this.value);
        this.form.submit();
    });
</script>
<?= $this->endSection() ?>