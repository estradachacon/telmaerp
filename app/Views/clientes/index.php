<?= $this->extend('Layouts/mainbody') ?>
<?= $this->section('content') ?>
<?= view('modals/cliente_new') ?> <!-- Contenido Modal -->

<div class="container col-12">
    <div class="row align-items-center mb-4">
        <div class="col-md-8 col-12">
            <h1>Listado de clientes</h1>
            <button class="btn btn-success" onclick="abrirModalClienteNew()">
                <i class="fa-solid fa-pen-to-square"></i>Nuevo Cliente</i>
            </button>
        </div>
    </div>
    <div class="mb-3"></div>
    <table class="table table-striped table-hover table-bordered">
        <tr class='text-center'>
            <th class="col-sm-1">ID</th>
            <th class="col-sm-6">Nombre</th>
            <th class="col-sm-1">Acciones</th>
        </tr>
        <?php if (!empty($clientes) && is_array($clientes)) : ?>
            <?php foreach ($clientes as $cliente) : ?>
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
        <?php else : ?>
            <tr>
                <td colspan="3" class="text-center">No hay clientes registrados.</td>
            </tr>
        <?php endif; ?>
    </table>
</div>
<?= $this->endSection() ?>