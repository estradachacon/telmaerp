<?= $this->extend('Layouts/mainbody') ?>
<?= $this->section('content') ?>
<?= view('modals/cliente_new') ?> <!-- Contenido Modal -->

<div class="container col-12">
    <div class="row align-items-center mb-4">
        <div class="col-md-8 col-12">
            <h1>Listado de clientes</h1>
            <button class="btn btn-success" onclick="abrirModalCliente()">
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
    </table>
</div>
<?= $this->endSection() ?>