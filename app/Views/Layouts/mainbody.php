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
        body {
            background: linear-gradient(135deg, #6d7277ff 0%, #e2eafc 100%);
            min-height: 100vh;
        }

        .navbar {
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.07);
            background: #fff !important;
        }

        .navbar-brand {
            font-weight: bold;
            font-size: 1.5rem;
            color: #0d6efd !important;
            letter-spacing: 1px;
        }

        .navbar-nav .nav-link,
        .navbar-nav .btn {
            color: #495057 !important;
            font-weight: 500;
            margin-right: 10px;
            transition: color 0.2s;
        }

        .navbar-nav .nav-link.active,
        .navbar-nav .btn.active,
        .navbar-nav .nav-link:hover,
        .navbar-nav .btn:hover {
            color: #0d6efd !important;
            background: #e7f1ff;
            border-radius: 6px;
        }

        .navbar-toggler {
            border: none;
        }

        .navbar-toggler-icon {
            background-color: #0d6efd;
            border-radius: 3px;
        }

        .content-wrapper {
            max-width: 1100px;
            margin: 40px auto 0 auto;
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 4px 24px rgba(0, 0, 0, 0.08);
            padding: 32px 24px;
        }

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

            .content-wrapper {
                padding: 16px 8px;
                margin-top: 16px;
            }
        }
    </style>
    <title><?= $title ?></title>
</head>

<body>
    <?= view('partials/_session') ?> <!-- Contenido Toast -->

    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><i class="fa-solid fa-store"></i> Carytel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="btn <?= ($_SERVER['REQUEST_URI'] == '/') ? 'active' : '' ?>" href="/">
                            <i class="fa-solid fa-cash-register"></i> Ventas
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= (strpos($_SERVER['REQUEST_URI'], 'inventario') !== false) ? 'active' : '' ?>"
                            href="/inventario">
                            <i class="fa-solid fa-boxes-stacked"></i> Inventario
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= (strpos($_SERVER['REQUEST_URI'], 'compras') !== false) ? 'active' : '' ?>"
                            href="/compras">
                            <i class="fa-solid fa-cart-shopping"></i> Compras
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= (strpos($_SERVER['REQUEST_URI'], 'clientes') !== false) ? 'active' : '' ?>"
                            href="/clientes">
                            <i class="fa-solid fa-users"></i> Clientes
                        </a>
                    </li>
                </ul>
                <!-- Puedes agregar aquí el botón de logout si lo necesitas -->
                <!-- <a class="btn btn-outline-danger" href="/logout"><i class="fa-solid fa-right-from-bracket"></i> Cerrar sesión</a> -->
            </div>
        </div>
    </nav>
    <div class="content-wrapper">
        <?= $this->renderSection('content') ?>
    </div>
    <!-- Bootstrap JS con Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('js/clientes.js') ?>"></script>
</body>

</html>