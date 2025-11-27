<?php
$title = "Libros Registrados - Block Bookster";
include_once DIRECTORIO_BACKEND_LAYOUTS . "headadmin.php";
include_once DIRECTORIO_BACKEND_LAYOUTS . "headeradmin.php";
include_once DIRECTORIO_BACKEND_LAYOUTS . "navadmin.php";
$tituloSeccion = "Libros Registrados";
include_once DIRECTORIO_BACKEND_LAYOUTS . "mainadmin.php";
?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
    <div>
        <h2 class="h2 mb-1">Listado de Libros</h2>
        <p class="text-muted mb-0">Gestiona los libros almacenados en la plataforma</p>
    </div>
    <div class="btn-toolbar mb-2 mb-md-0">
        <a href="app/View/backend/cargarProductos.php" class="btn btn-primary">
            <i class="bi bi-book-half me-2"></i>Añadir Libro
        </a>
    </div>
</div>

<!-- Estadísticas rápidas -->
<div class="row mb-4">
    <div class="col-md-4 mb-3">
        <div class="card border-0 shadow-sm">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                        <div class="bg-primary bg-opacity-10 p-3 rounded">
                            <i class="bi bi-book-fill text-primary fs-4"></i>
                        </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h6 class="text-muted mb-1">Total Libros</h6>
                        <h4 class="mb-0"><?= count($libros) ?></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-3">
        <div class="card border-0 shadow-sm">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                        <div class="bg-success bg-opacity-10 p-3 rounded">
                            <i class="bi bi-check-circle-fill text-success fs-4"></i>
                        </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h6 class="text-muted mb-1">Libros Activos</h6>
                        <h4 class="mb-0"><?= count(array_filter($libros, fn($b) => $b->getActivo() == 1)) ?></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-3">
        <div class="card border-0 shadow-sm">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                        <div class="bg-warning bg-opacity-10 p-3 rounded">
                            <i class="bi bi-star-fill text-warning fs-4"></i>
                        </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h6 class="text-muted mb-1">Libros Destacados</h6>
                        <h4 class="mb-0"><?= count(array_filter($libros, fn($b) => $b->getDestacado() == 1)) ?></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Tabla de libros -->
<div class="card border-0 shadow-sm">
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="bg-light">
                <tr>
                    <th class="ps-4">Portada</th>
                    <th>Título</th>
                    <th>Autor</th>
                    <th>ISBN</th>
                    <th>Género</th>
                    <th>Precio</th>
                    <th>Estado</th>
                    <th class="text-end pe-4">Acciones</th>
                </tr>
                </thead>
                <tbody>

                <?php if($libros){
                    foreach ($libros as $libro){ ?>
                        <tr>

                            <!-- Portada -->
                            <td class="ps-4">
                                <img src="<?= $libro->getCover() ? '/uploads/books/' . $libro->getCover() : '/app/View/backend/img/book-default.png' ?>"
                                     style="width:45px;height:60px;object-fit:cover;border-radius:4px;">
                            </td>

                            <!-- Título -->
                            <td>
                                <span class="fw-semibold"><?= $libro->getTitle() ?></span>
                            </td>

                            <!-- Autor -->
                            <td>
                                <span class="text-muted"><?= $libro->getAuthor() ?></span>
                            </td>

                            <!-- ISBN -->
                            <td>
                                <span><?= $libro->getIsbn() ?></span>
                            </td>

                            <!-- Género -->
                            <td>
                                <span class="badge bg-light text-dark border"><?= ucfirst($libro->getGenre()) ?></span>
                            </td>

                            <!-- Precio -->
                            <td>
                                <strong><?= number_format($libro->getPrice(), 2) ?> €</strong>
                            </td>

                            <!-- Estado -->
                            <td>
                                <?php if($libro->getActivo()){ ?>
                                    <span class="badge bg-success">Activo</span>
                                <?php } else { ?>
                                    <span class="badge bg-secondary">Oculto</span>
                                <?php } ?>
                            </td>

                            <!-- Acciones -->
                            <td class="text-end pe-4">
                                <div class="btn-group btn-group-sm" role="group">

                                    <!-- Ver -->
                                    <a href="/book/<?= $libro->getId() ?>"
                                       class="btn btn-outline-info"
                                       title="Ver libro">
                                        🔍
                                    </a>

                                    <!-- Editar -->
                                    <a href="/book/edit/<?= $libro->getId() ?>"
                                       class="btn btn-outline-warning"
                                       title="Editar libro">
                                        ✏️
                                    </a>

                                    <!-- Eliminar -->
                                    <button type="button"
                                            class="btn btn-outline-danger btn-delete-book"
                                            data-book-id="<?= $libro->getId() ?>"
                                            data-book-title="<?= htmlspecialchars($libro->getTitle()) ?>"
                                            title="Eliminar libro">
                                        🗑
                                    </button>

                                </div>
                            </td>
                        </tr>

                    <?php }} else { ?>
                    <tr>
                        <td colspan="8" class="text-center py-3">
                            No hay libros registrados en la base de datos.
                        </td>
                    </tr>
                <?php } ?>

                </tbody>
            </table>
        </div>
    </div>
</div>

<style>
    .table { font-size: 0.9rem; }
    .table thead th {
        font-weight: 600; text-transform: uppercase;
        font-size: 0.75rem; letter-spacing: .5px;
        color: #6c757d; border-bottom: 2px solid #dee2e6;
    }
    .table tbody tr:hover { background-color: #f8f9fa; }
    .btn-group-sm > .btn { padding: .4rem .75rem; font-size: .875rem; }
</style>

<?php include_once DIRECTORIO_BACKEND_LAYOUTS . "footeradmin.php"; ?>

