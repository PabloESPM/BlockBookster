<?php
$title = "Detalle del Libro - Block Bookster";
include_once DIRECTORIO_BACKEND_LAYOUTS . "headadmin.php";
include_once DIRECTORIO_BACKEND_LAYOUTS . "headeradmin.php";
include_once DIRECTORIO_BACKEND_LAYOUTS . "navadmin.php";

$tituloSeccion = "Información del Libro: " . $libro->getTitulo();
include_once DIRECTORIO_BACKEND_LAYOUTS . "mainadmin.php";

// Datos del libro
$libro = $libro ?? null;
$valoraciones = $valoraciones ?? [];
$estadisticas = $estadisticas ?? [
    'valoracion_media' => 0,
    'ventas_totales' => 0,
    'veces_deseado' => 0,
    'fecha_publicacion' => null,
];
?>

<!-- Breadcrumb -->
<nav aria-label="breadcrumb" class="mb-3">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/adminInicio">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="/listaLibros">Libros</a></li>
        <li class="breadcrumb-item active" aria-current="page"><?= htmlspecialchars($libro->getTitulo()) ?></li>
    </ol>
</nav>

<!-- Cabecera del libro -->
<div class="row mb-4">
    <div class="col-12">
        <div class="card border-0 shadow-sm">
            <div class="card-body p-4">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <img src="<?= $libro->getPortada() ?? '/img/default-book.jpg' ?>"
                             class="rounded shadow-sm"
                             style="width: 110px; height: 160px; object-fit: cover;">
                    </div>
                    <div class="col">
                        <h3 class="mb-1"><?= htmlspecialchars($libro->getTitulo()) ?></h3>
                        <p class="text-muted mb-2">
                            <i class="bi bi-person me-2"></i><?= htmlspecialchars($libro->getAutor()) ?>
                            <span class="mx-3">|</span>
                            <i class="bi bi-tag me-2"></i><?= htmlspecialchars($libro->getGenero()) ?>
                        </p>
                        <div class="d-flex gap-2">
                            <?php if ($libro->getDestacado()): ?>
                                <span class="badge bg-warning text-dark">
                                    <i class="bi bi-star-fill me-1"></i>Destacado
                                </span>
                            <?php endif; ?>

                            <?php if ($libro->getActivo()): ?>
                                <span class="badge bg-success">
                                    <i class="bi bi-check-circle me-1"></i>Activo
                                </span>
                            <?php else: ?>
                                <span class="badge bg-danger">
                                    <i class="bi bi-x-circle me-1"></i>Inactivo
                                </span>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="col-auto">
                        <div class="btn-group">
                            <a href="/listaLibros" class="btn btn-outline-secondary">
                                <i class="bi bi-arrow-left me-2"></i>Volver
                            </a>
                            <button class="btn btn-outline-secondary"
                                    onclick="window.location.replace('/libro/<?= $libro->getId() ?>/edit')">
                                <i class="bi bi-pencil me-2"></i>Editar
                            </button>
                            <button class="btn btn-danger"
                                    data-bs-toggle="modal"
                                    data-bs-target="#eliminarLibroModal">
                                <i class="bi bi-trash me-2"></i>Eliminar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Estadísticas -->
<div class="row mb-4">
    <div class="col-md-4 mb-3">
        <div class="card shadow-sm border-0 h-100">
            <div class="card-body text-center">
                <div class="mb-2"><i class="bi bi-star-fill text-warning fs-1"></i></div>
                <h4><?= number_format($estadisticas['valoracion_media'], 1) ?>/5</h4>
                <p class="text-muted small mb-0">Valoración Media</p>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-3">
        <div class="card shadow-sm border-0 h-100">
            <div class="card-body text-center">
                <div class="mb-2"><i class="bi bi-bag-check text-primary fs-1"></i></div>
                <h4><?= $estadisticas['ventas_totales'] ?></h4>
                <p class="text-muted small mb-0">Ventas Totales</p>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-3">
        <div class="card shadow-sm border-0 h-100">
            <div class="card-body text-center">
                <div class="mb-2"><i class="bi bi-heart text-danger fs-1"></i></div>
                <h4><?= $estadisticas['veces_deseado'] ?></h4>
                <p class="text-muted small mb-0">En Lista de Deseos</p>
            </div>
        </div>
    </div>
</div>

<!-- Tabs -->
<ul class="nav nav-tabs mb-4">
    <li class="nav-item">
        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#info">Información General</button>
    </li>
    <li class="nav-item">
        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#valoraciones">Valoraciones</button>
    </li>
    <li class="nav-item">
        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#actividad">Actividad Reciente</button>
    </li>
</ul>

<div class="tab-content">

    <!-- Información General -->
    <div class="tab-pane fade show active" id="info">
        <div class="card shadow-sm border-0">
            <div class="card-header bg-white border-0 py-3">
                <h5 class="mb-0"><i class="bi bi-info-circle me-2"></i>Detalles del Libro</h5>
            </div>
            <div class="card-body">
                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label class="text-muted small">Título</label>
                        <p><?= htmlspecialchars($libro->getTitulo()) ?></p>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="text-muted small">Autor</label>
                        <p><?= htmlspecialchars($libro->getAutor()) ?></p>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label class="text-muted small">ISBN</label>
                        <p><?= htmlspecialchars($libro->getIsbn()) ?></p>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label class="text-muted small">Precio</label>
                        <p><?= number_format($libro->getPrecio(), 2) ?>€</p>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label class="text-muted small">Páginas</label>
                        <p><?= $libro->getNumPaginas() ?></p>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label class="text-muted small">Año Publicación</label>
                        <p><?= $libro->getAnoPublicacion() ?></p>
                    </div>

                    <div class="col-md-8 mb-3">
                        <label class="text-muted small">Género</label>
                        <p><?= htmlspecialchars($libro->getGenero()) ?></p>
                    </div>

                    <div class="col-12 mb-3">
                        <label class="text-muted small">Descripción</label>
                        <p><?= nl2br(htmlspecialchars($libro->getDescripcion())) ?></p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Tab Valoraciones -->
    <div class="tab-pane fade" id="valoraciones">
        <div class="card shadow-sm border-0">
            <div class="card-header bg-white py-3">
                <h5 class="mb-0"><i class="bi bi-star me-2"></i>Valoraciones</h5>
            </div>
            <div class="card-body">

                <?php if (empty($valoraciones)): ?>
                    <div class="text-center py-5">
                        <i class="bi bi-star text-muted" style="font-size: 4rem"></i>
                        <p class="text-muted mt-3">Este libro aún no tiene valoraciones</p>
                    </div>
                <?php else: ?>
                    <?php foreach ($valoraciones as $v): ?>
                        <div class="card border mb-3">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <h6 class="mb-1"><?= htmlspecialchars($v['usuario']) ?></h6>
                                    <small class="text-muted"><?= $v['fecha']->format('d/m/Y') ?></small>
                                </div>
                                <div class="text-warning mb-2">
                                    <?php for ($i = 0; $i < $v['puntuacion']; $i++): ?>
                                        <i class="bi bi-star-fill"></i>
                                    <?php endfor; ?>
                                    <?php for ($i = $v['puntuacion']; $i < 5; $i++): ?>
                                        <i class="bi bi-star"></i>
                                    <?php endfor; ?>
                                </div>
                                <p class="mb-0 text-muted"><?= htmlspecialchars($v['comentario']) ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>

            </div>
        </div>
    </div>

    <!-- Actividad Reciente -->
    <div class="tab-pane fade" id="actividad">
        <div class="card shadow-sm border-0">
            <div class="card-header bg-white py-3">
                <h5 class="mb-0"><i class="bi bi-clock-history me-2"></i>Actividad Reciente</h5>
            </div>
            <div class="card-body">
                <div class="timeline">
                    <div class="timeline-item">
                        <div class="timeline-marker bg-primary"></div>
                        <div class="timeline-content">
                            <h6 class="mb-1">Libro añadido al catálogo</h6>
                            <small class="text-muted"><?= $estadisticas['fecha_publicacion']?->format('d/m/Y') ?? 'Fecha no disponible' ?></small>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-marker bg-success"></div>
                        <div class="timeline-content">
                            <h6 class="mb-1">Primera venta registrada</h6>
                            <small class="text-muted">Hace 1 semana</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Modal eliminar -->
<div class="modal fade" id="eliminarLibroModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white border-0">
                <h5 class="modal-title">Eliminar Libro</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <p>¿Seguro que deseas eliminar <strong><?= htmlspecialchars($libro->getTitulo()) ?></strong>?</p>
                <div class="alert alert-danger">
                    Esta acción es permanente.
                </div>
            </div>
            <div class="modal-footer border-0">
                <button class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button class="btn btn-danger" onclick="eliminarLibro()">Eliminar</button>
            </div>
        </div>
    </div>
</div>

<script>
    function eliminarLibro() {
        fetch("/libro/<?= $libro->getId() ?>", { method: "DELETE" })
            .then(r => r.text())
            .then(() => window.location.replace("/listaLibros"))
            .catch(console.error);
    }
</script>

<?php include_once DIRECTORIO_BACKEND_LAYOUTS . "footeradmin.php"; ?>
