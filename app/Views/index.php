<?= $this->extend('Layouts/mainbody') ?>
<?= $this->section('content') ?>

<div class="container col-12">
    <div class="row align-items-center mb-4">
        <div class="col-md-10 col-12">
            <h1>Bienvenida Telma ❤️</h1>
            <h2>Sistema Empresarial de Recursos - Potaxeo 🥑</h2>
        </div>
        <div class="col-md-2 col-12 d-flex justify-content-md-end justify-content-center">
            <div class="card mb-3" style="max-width: 300px;">
                <div class="card-body text-center">
                    <h6 class="card-title">Estado de Caja</h6>
                    <p class="card-text display-6" id="cashStatus">$0.00</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-md-8 col-12">
            <h3>Ventas</h3>
        </div>
        <div class="col-md-4 col-12 d-flex justify-content-end align-items-center">
            <a href='ventas/new' class="btn btn-primary">
                <i class="fa-solid fa-pen-to-square"></i> Crear nueva venta
            </a>
        </div>
    </div>
    <table class="table table-striped table-hover table-bordered">
        <tr class='text-center'>
            <th class="col-sm-1">#</th>
            <th class="col-sm-5">Cliente</th>
            <th class="col-sm-2">Valor</th>
            <th class="col-sm-2">Tipo de pago</th>
            <th class="col-sm-2">Acciones</th>
        </tr>
    </table>
</div>

<?= $this->endSection() ?>