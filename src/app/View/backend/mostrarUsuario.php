<?php
$title = "Perfil de Usuario - Block Bookster";
include_once DIRECTORIO_BACKEND_LAYOUTS . "headadmin.php";
include_once DIRECTORIO_BACKEND_LAYOUTS . "headeradmin.php";
include_once DIRECTORIO_BACKEND_LAYOUTS . "navadmin.php";
$tituloSeccion = "Perfil de Usuario " . $usuario->getUsername();
include_once DIRECTORIO_BACKEND_LAYOUTS . "mainadmin.php";

// Datos de ejemplo - Reemplazar con datos reales de la base de datos
$usuario = $usuario ?? null; // El usuario viene del controlador
$compras = $compras ?? []; // Libros comprados
$valoraciones = $valoraciones ?? []; // Valoraciones del usuario
$listaDeseos = $listaDeseos ?? []; // Lista de deseos
$estadisticas = $estadisticas ?? [
    'total_gastado' => 0,
    'total_compras' => 0,
    'libros_comprados' => 0,
    'valoraciones_realizadas' => 0,
    'lista_deseos' => 0,
    'fecha_registro' => null,
    'ultima_compra' => null,
    'promedio_valoracion' => 0
];
?>

    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="mb-3">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/adminInicio">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="/listaUsuarios">Usuarios</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?= $usuario->getUsername() ?></li>
        </ol>
    </nav>

    <!-- Header del perfil -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card border-0 shadow-sm">
                <div class="card-body p-4">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <div class="user-avatar-large"
                                 style="background-image: url('/app/View/backend/img/avatar.svg');">
                            </div>
                        </div>
                        <div class="col">
                            <h3 class="mb-1"><?= $usuario->getUsername() ?></h3>
                            <p class="text-muted mb-2">
                                <i class="bi bi-envelope me-2"></i><?= $usuario->getEmail() ?>
                                <span class="mx-3">|</span>
                                <i class="bi bi-telephone me-2"></i><?= $usuario->getTelephone() ?>
                            </p>
                            <div class="d-flex gap-2">
                                <span class="badge bg-primary"><?= $usuario->getType()->name ?></span>
                                <span class="badge bg-success">
                                <i class="bi bi-check-circle me-1"></i>Cuenta Activa
                            </span>
                                <span class="badge bg-info">
                                Miembro desde <?= $estadisticas['fecha_registro']?->format('M Y') ?? 'N/A' ?>
                            </span>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="btn-group">
                                <a href="/listaUsuarios" class="btn btn-outline-secondary">
                                    <i class="bi bi-arrow-left me-2"></i>Volver
                                </a>
                                <button class="btn btn-outline-secondary" type="button" onclick="irAModificarUsuario()">
                                    <i class="bi bi-pencil me-2"></i>Editar Perfil
                                </button>
                                <button class="btn btn-primary btn-danger" type="button">
                                    <i class="bi bi-pencil me-2"></i>Eliminar Perfil
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Estadísticas principales -->
    <div class="row mb-4">
        <div class="col-md-3 mb-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body text-center">
                    <div class="mb-2">
                        <i class="bi bi-currency-euro text-success fs-1"></i>
                    </div>
                    <h4 class="mb-1"><?= number_format($estadisticas['total_gastado'], 2) ?>€</h4>
                    <p class="text-muted mb-0 small">Total Gastado</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body text-center">
                    <div class="mb-2">
                        <i class="bi bi-bag-check text-primary fs-1"></i>
                    </div>
                    <h4 class="mb-1"><?= $estadisticas['total_compras'] ?></h4>
                    <p class="text-muted mb-0 small">Compras Realizadas</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body text-center">
                    <div class="mb-2">
                        <i class="bi bi-book text-info fs-1"></i>
                    </div>
                    <h4 class="mb-1"><?= $estadisticas['libros_comprados'] ?></h4>
                    <p class="text-muted mb-0 small">Libros Comprados</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body text-center">
                    <div class="mb-2">
                        <i class="bi bi-star-fill text-warning fs-1"></i>
                    </div>
                    <h4 class="mb-1"><?= number_format($estadisticas['promedio_valoracion'], 1) ?></h4>
                    <p class="text-muted mb-0 small">Valoración Promedio</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Tabs de contenido -->
    <ul class="nav nav-tabs mb-4" id="perfilTabs" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="datos-tab" data-bs-toggle="tab" data-bs-target="#datos" type="button" role="tab">
                <i class="bi bi-person me-2"></i>Datos Personales
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="compras-tab" data-bs-toggle="tab" data-bs-target="#compras" type="button" role="tab">
                <i class="bi bi-cart me-2"></i>Historial de Compras
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="valoraciones-tab" data-bs-toggle="tab" data-bs-target="#valoraciones" type="button" role="tab">
                <i class="bi bi-star me-2"></i>Valoraciones
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="deseos-tab" data-bs-toggle="tab" data-bs-target="#deseos" type="button" role="tab">
                <i class="bi bi-heart me-2"></i>Lista de Deseos
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="actividad-tab" data-bs-toggle="tab" data-bs-target="#actividad" type="button" role="tab">
                <i class="bi bi-clock-history me-2"></i>Actividad Reciente
            </button>
        </li>
    </ul>

    <div class="tab-content" id="perfilTabsContent">
        <!-- Tab Datos Personales -->
        <div class="tab-pane fade show active" id="datos" role="tabpanel">
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card border-0 shadow-sm">
                        <div class="card-header bg-white border-0 py-3">
                            <h5 class="mb-0"><i class="bi bi-person-circle me-2"></i>Información Personal</h5>
                        </div>
                        <div class="card-body">
                            <div class="info-item">
                                <label class="text-muted small">Nombre de Usuario</label>
                                <p class="mb-3"><?= $usuario->getUsername() ?></p>
                            </div>
                            <div class="info-item">
                                <label class="text-muted small">Correo Electrónico</label>
                                <p class="mb-3"><?= $usuario->getEmail() ?></p>
                            </div>
                            <div class="info-item">
                                <label class="text-muted small">Teléfono</label>
                                <p class="mb-3"><?= $usuario->getTelephone() ?></p>
                            </div>
                            <div class="info-item">
                                <label class="text-muted small">Fecha de Nacimiento</label>
                                <p class="mb-3"><?= $usuario->getBirthdate()?->format('d/m/Y') ?? '—' ?></p>
                            </div>
                            <div class="info-item">
                                <label class="text-muted small">País</label>
                                <p class="mb-0"><?= $usuario->getCountry() ?? 'España' ?></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <div class="card border-0 shadow-sm">
                        <div class="card-header bg-white border-0 py-3">
                            <h5 class="mb-0"><i class="bi bi-graph-up me-2"></i>Estadísticas de Cuenta</h5>
                        </div>
                        <div class="card-body">
                            <div class="info-item">
                                <label class="text-muted small">Tipo de Usuario</label>
                                <p class="mb-3">
                                    <span class="badge bg-primary"><?= $usuario->getType()->name ?></span>
                                </p>
                            </div>
                            <div class="info-item">
                                <label class="text-muted small">Fecha de Registro</label>
                                <p class="mb-3"><?= $estadisticas['fecha_registro']?->format('d/m/Y H:i') ?? 'N/A' ?></p>
                            </div>
                            <div class="info-item">
                                <label class="text-muted small">Última Compra</label>
                                <p class="mb-3"><?= $estadisticas['ultima_compra']?->format('d/m/Y H:i') ?? 'Sin compras' ?></p>
                            </div>
                            <div class="info-item">
                                <label class="text-muted small">Total de Valoraciones</label>
                                <p class="mb-3"><?= $estadisticas['valoraciones_realizadas'] ?> reseñas</p>
                            </div>
                            <div class="info-item">
                                <label class="text-muted small">Libros en Lista de Deseos</label>
                                <p class="mb-0"><?= $estadisticas['lista_deseos'] ?> libros</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tab Historial de Compras -->
        <div class="tab-pane fade" id="compras" role="tabpanel">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white border-0 py-3">
                    <h5 class="mb-0"><i class="bi bi-bag-check me-2"></i>Historial de Compras</h5>
                </div>
                <div class="card-body p-0">
                    <?php if (empty($compras)): ?>
                        <div class="text-center py-5">
                            <i class="bi bi-cart-x text-muted" style="font-size: 4rem;"></i>
                            <p class="text-muted mt-3">Este usuario aún no ha realizado ninguna compra</p>
                        </div>
                    <?php else: ?>
                        <div class="table-responsive">
                            <table class="table table-hover align-middle mb-0">
                                <thead class="bg-light">
                                <tr>
                                    <th scope="col" class="ps-4">ID Pedido</th>
                                    <th scope="col">Fecha</th>
                                    <th scope="col">Libro</th>
                                    <th scope="col">Cantidad</th>
                                    <th scope="col">Precio</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">Estado</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($compras as $compra): ?>
                                    <tr>
                                        <td class="ps-4">
                                            <span class="badge bg-secondary">#<?= $compra['id'] ?? '000' ?></span>
                                        </td>
                                        <td><?= $compra['fecha']?->format('d/m/Y') ?? 'N/A' ?></td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="<?= $compra['portada'] ?? '/img/default-book.jpg' ?>"
                                                     alt="Portada"
                                                     class="me-2"
                                                     style="width: 40px; height: 60px; object-fit: cover; border-radius: 4px;">
                                                <div>
                                                    <div class="fw-semibold"><?= htmlspecialchars($compra['titulo'] ?? 'Título') ?></div>
                                                    <small class="text-muted"><?= htmlspecialchars($compra['autor'] ?? 'Autor') ?></small>
                                                </div>
                                            </div>
                                        </td>
                                        <td><?= $compra['cantidad'] ?? 1 ?></td>
                                        <td><?= number_format($compra['precio'] ?? 0, 2) ?>€</td>
                                        <td class="fw-semibold"><?= number_format($compra['total'] ?? 0, 2) ?>€</td>
                                        <td>
                                            <span class="badge bg-success">Completado</span>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <!-- Tab Valoraciones -->
        <div class="tab-pane fade" id="valoraciones" role="tabpanel">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white border-0 py-3">
                    <h5 class="mb-0"><i class="bi bi-star-fill me-2"></i>Valoraciones y Reseñas</h5>
                </div>
                <div class="card-body">
                    <?php if (empty($valoraciones)): ?>
                        <div class="text-center py-5">
                            <i class="bi bi-star text-muted" style="font-size: 4rem;"></i>
                            <p class="text-muted mt-3">Este usuario no ha dejado ninguna valoración</p>
                        </div>
                    <?php else: ?>
                        <div class="row">
                            <?php foreach ($valoraciones as $valoracion): ?>
                                <div class="col-12 mb-3">
                                    <div class="card border">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-start mb-2">
                                                <div class="d-flex align-items-center">
                                                    <img src="<?= $valoracion['portada'] ?? '/img/default-book.jpg' ?>"
                                                         alt="Portada"
                                                         class="me-3"
                                                         style="width: 50px; height: 75px; object-fit: cover; border-radius: 4px;">
                                                    <div>
                                                        <h6 class="mb-1"><?= htmlspecialchars($valoracion['titulo'] ?? 'Título del libro') ?></h6>
                                                        <div class="text-warning mb-1">
                                                            <?php for($i = 0; $i < ($valoracion['puntuacion'] ?? 5); $i++): ?>
                                                                <i class="bi bi-star-fill"></i>
                                                            <?php endfor; ?>
                                                            <?php for($i = ($valoracion['puntuacion'] ?? 5); $i < 5; $i++): ?>
                                                                <i class="bi bi-star"></i>
                                                            <?php endfor; ?>
                                                            <span class="text-muted ms-2"><?= $valoracion['puntuacion'] ?? 5 ?>/5</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <small class="text-muted"><?= $valoracion['fecha']?->format('d/m/Y') ?? 'N/A' ?></small>
                                            </div>
                                            <p class="mb-0 text-muted"><?= htmlspecialchars($valoracion['comentario'] ?? 'Sin comentario') ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <!-- Tab Lista de Deseos -->
        <div class="tab-pane fade" id="deseos" role="tabpanel">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white border-0 py-3">
                    <h5 class="mb-0"><i class="bi bi-heart-fill me-2"></i>Lista de Deseos</h5>
                </div>
                <div class="card-body">
                    <?php if (empty($listaDeseos)): ?>
                        <div class="text-center py-5">
                            <i class="bi bi-heart text-muted" style="font-size: 4rem;"></i>
                            <p class="text-muted mt-3">La lista de deseos está vacía</p>
                        </div>
                    <?php else: ?>
                        <div class="row">
                            <?php foreach ($listaDeseos as $libro): ?>
                                <div class="col-md-6 col-lg-4 mb-4">
                                    <div class="card h-100 border">
                                        <div class="position-relative">
                                            <img src="<?= $libro['portada'] ?? '/img/default-book.jpg' ?>"
                                                 class="card-img-top"
                                                 alt="Portada"
                                                 style="height: 300px; object-fit: cover;">
                                            <span class="position-absolute top-0 end-0 m-2">
                                            <span class="badge bg-danger">
                                                <i class="bi bi-heart-fill"></i>
                                            </span>
                                        </span>
                                        </div>
                                        <div class="card-body">
                                            <h6 class="card-title"><?= htmlspecialchars($libro['titulo'] ?? 'Título') ?></h6>
                                            <p class="card-text text-muted small mb-2"><?= htmlspecialchars($libro['autor'] ?? 'Autor') ?></p>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span class="text-primary fw-bold"><?= number_format($libro['precio'] ?? 0, 2) ?>€</span>
                                                <small class="text-muted">
                                                    Añadido <?= $libro['fecha_agregado']?->format('d/m/Y') ?? 'N/A' ?>
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <!-- Tab Actividad Reciente -->
        <div class="tab-pane fade" id="actividad" role="tabpanel">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white border-0 py-3">
                    <h5 class="mb-0"><i class="bi bi-clock-history me-2"></i>Actividad Reciente</h5>
                </div>
                <div class="card-body">
                    <div class="timeline">
                        <div class="timeline-item">
                            <div class="timeline-marker bg-success"></div>
                            <div class="timeline-content">
                                <div class="d-flex justify-content-between">
                                    <h6 class="mb-1">Compra realizada</h6>
                                    <small class="text-muted">Hace 2 días</small>
                                </div>
                                <p class="mb-0 text-muted small">Compró "El Principito" por 12.99€</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-marker bg-warning"></div>
                            <div class="timeline-content">
                                <div class="d-flex justify-content-between">
                                    <h6 class="mb-1">Valoración publicada</h6>
                                    <small class="text-muted">Hace 5 días</small>
                                </div>
                                <p class="mb-0 text-muted small">Dejó una reseña de 5 estrellas para "1984"</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-marker bg-danger"></div>
                            <div class="timeline-content">
                                <div class="d-flex justify-content-between">
                                    <h6 class="mb-1">Añadido a lista de deseos</h6>
                                    <small class="text-muted">Hace 1 semana</small>
                                </div>
                                <p class="mb-0 text-muted small">Agregó "Cien años de soledad" a su lista</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-marker bg-info"></div>
                            <div class="timeline-content">
                                <div class="d-flex justify-content-between">
                                    <h6 class="mb-1">Registro completado</h6>
                                    <small class="text-muted">Hace 2 meses</small>
                                </div>
                                <p class="mb-0 text-muted small">Creó su cuenta en Block Bookster</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* Avatar grande */
        .user-avatar-large {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background-color: #e9ecef;
            background-size: cover;
            background-position: center;
            border: 4px solid #fff;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        }

        /* Info items */
        .info-item label {
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-size: 0.75rem;
            margin-bottom: 0.25rem;
            display: block;
        }

        .info-item p {
            font-size: 1rem;
            color: #212529;
        }

        /* Tabs personalizados */
        .nav-tabs {
            border-bottom: 2px solid #dee2e6;
        }

        .nav-tabs .nav-link {
            border: none;
            color: #6c757d;
            font-weight: 500;
            padding: 0.75rem 1.25rem;
            transition: all 0.2s ease;
        }

        .nav-tabs .nav-link:hover {
            color: #0d6efd;
            border-color: transparent;
        }

        .nav-tabs .nav-link.active {
            color: #0d6efd;
            background-color: transparent;
            border-bottom: 3px solid #0d6efd;
            margin-bottom: -2px;
        }

        /* Timeline */
        .timeline {
            position: relative;
            padding-left: 30px;
        }

        .timeline::before {
            content: '';
            position: absolute;
            left: 9px;
            top: 0;
            bottom: 0;
            width: 2px;
            background: #dee2e6;
        }

        .timeline-item {
            position: relative;
            margin-bottom: 2rem;
        }

        .timeline-item:last-child {
            margin-bottom: 0;
        }

        .timeline-marker {
            position: absolute;
            left: -25px;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            border: 3px solid #fff;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .timeline-content {
            background: #f8f9fa;
            padding: 1rem;
            border-radius: 8px;
            border-left: 3px solid #0d6efd;
        }

        /* Cards hover */
        .card {
            transition: all 0.2s ease;
        }

        /* Estrellas */
        .text-warning i {
            font-size: 0.9rem;
        }

        /* Breadcrumb */
        .breadcrumb-item a {
            text-decoration: none;
            color: #0d6efd;
        }

        .breadcrumb-item a:hover {
            text-decoration: underline;
        }

        /* Tabla responsive */
        .table th {
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.75rem;
            letter-spacing: 0.5px;
            color: #6c757d;
            border-bottom: 2px solid #dee2e6;
            padding: 1rem 0.75rem;
        }

        .table td {
            padding: 1rem 0.75rem;
            vertical-align: middle;
        }

        .table tbody tr:hover {
            background-color: #f8f9fa;
        }
    </style>
    <script>
        function irAModificarUsuario(){
            window.location.replace("http://localhost:8080/user/<?=$usuario->getId?>/edit");
        }
    </script>

<?php
include_once DIRECTORIO_BACKEND_LAYOUTS . "footeradmin.php";
?>