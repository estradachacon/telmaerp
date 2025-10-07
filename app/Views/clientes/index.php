<?= $this->extend('Layouts/mainbody') ?>
<?= $this->section('content') ?>

<div class="container col-12">
    <div class="row align-items-center mb-4">
        <div class="col-md-8 col-12">
            <h1>Listado de clientes</h1>
        </div>
    </div>
<div class="mb-3"></div>
    <a href='ventas/new'><i class="fa-solid fa-pen-to-square">Añadir nuevo</i></a>
    <table class="table table-striped table-hover table-bordered">
        <tr class='text-center'>
            <th class="col-sm-1">ID</th>
            <th class="col-sm-6">Nombre</th>
            <th class="col-sm-3">Número de teléfono</th>
            <th class="col-sm-1">Acciones</th>
        </tr>
    </table>
</div>
<?= $this->endSection() ?>