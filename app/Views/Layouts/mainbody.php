<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <style>
        /* Mejoras para pantallas pequeñas */
        @media (max-width: 576px) {
            .navbar-brand {
                font-size: 1.2rem;
            }

            .navbar-nav .nav-item {
                margin-bottom: 8px;
            }

            .navbar-nav {
                text-align: center;
            }
        }
    </style>
    <title><?= $title ?></title>
</head>

<body>
    <?= view('partials/_session') ?> <!-- Contenido Toast -->
    <div class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Carytel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-bg-secondary p-3 bg-secondary" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"> <a class="btn" aria-current="page"
                            href="/">Ventas</a> </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/inventario">Inventario</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/compras">Compras</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/clientes">Clientes</a>
                    </li>
                    <!--                     <li class="nav-item justify-content-md-end">
                        <a class="nav-link" href="/logout">Cerrar sesión</a>
                    </li> -->
                </ul>
            </div>
        </div>
    </div>
    <?= $this->renderSection('content') ?>
</body>

</html>