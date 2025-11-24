<?php
$title = "Editar Libro - Block Bookster";
include_once DIRECTORIO_BACKEND_LAYOUTS . "headadmin.php";
include_once DIRECTORIO_BACKEND_LAYOUTS . "headeradmin.php";
include_once DIRECTORIO_BACKEND_LAYOUTS . "navadmin.php";

$tituloSeccion = "Editar Libro: " . $libro->getTitulo();
include_once DIRECTORIO_BACKEND_LAYOUTS . "mainadmin.php";

// El libro viene del controlador
$libro = $libro ?? null;
?>

<!-- Breadcrumb -->
<nav aria-label="breadcrumb" class="mb-3">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/adminInicio">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="/listaLibros">Libros</a></li>
        <li class="breadcrumb-item"><a href="/libro/<?= $libro->getId() ?>">
                <?= $libro->getTitulo() ?>
            </a></li>
        <li class="breadcrumb-item active" aria-current="page">Editar</li>
    </ol>
</nav>

<!-- Header -->
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
                        <h3 class="mb-1">Editar Libro</h3>
                        <p class="text-muted mb-0">
                            Modificando la información de <strong><?= $libro->getTitulo() ?></strong>
                        </p>
                    </div>

                    <div class="col-auto">
                        <a href="/libro/<?= $libro->getId() ?>" class="btn btn-outline-secondary">
                            <i class="bi bi-arrow-left me-2"></i>Volver
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<form action="/admin/libros/<?= $libro->getId() ?>/update" method="POST">
    <input type="hidden" name="_method" value="PUT">

    <div class="row">

        <!-- COLUMNA IZQUIERDA -->
        <div class="col-lg-8">

            <!-- Información del Libro -->
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-header bg-white border-0 py-3">
                    <h5 class="mb-0"><i class="bi bi-book me-2"></i>Información del Libro</h5>
                </div>

                <div class="card-body">
                    <div class="row">

                        <div class="col-md-8 mb-3">
                            <label class="form-label">Título <span class="text-danger">*</span></label>
                            <input type="text" name="titulo" class="form-control"
                                   value="<?= $libro->getTitulo() ?>" required>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label class="form-label">Autor <span class="text-danger">*</span></label>
                            <input type="text" name="autor" class="form-control"
                                   value="<?= $libro->getAutor() ?>" required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">ISBN <span class="text-danger">*</span></label>
                            <input type="text" name="isbn" class="form-control"
                                   value="<?= $libro->getIsbn() ?>" required>
                        </div>

                        <div class="col-md-3 mb-3">
                            <label class="form-label">Precio (€)</label>
                            <input type="number" step="0.01" min="0" name="precio" class="form-control"
                                   value="<?= $libro->getPrecio() ?>">
                        </div>

                        <div class="col-md-3 mb-3">
                            <label class="form-label">Páginas</label>
                            <input type="number" min="1" name="num_paginas" class="form-control"
                                   value="<?= $libro->getNumPaginas() ?>">
                        </div>

                        <div class="col-md-4 mb-3">
                            <label class="form-label">Año Publicación</label>
                            <input type="number" min="1000" max="2025" name="ano_publicacion"
                                   class="form-control"
                                   value="<?= $libro->getAnoPublicacion() ?>">
                        </div>

                        <div class="col-md-8 mb-3">
                            <label class="form-label">Género</label>
                            <input type="text" name="genero" class="form-control"
                                   value="<?= $libro->getGenero() ?>">
                        </div>

                        <div class="col-12 mb-3">
                            <label class="form-label">Descripción</label>
                            <textarea class="form-control" rows="4" name="descripcion"><?= $libro->getDescripcion() ?></textarea>
                        </div>

                        <div class="col-12 mb-3">
                            <label class="form-label">URL Portada</label>
                            <input type="text" name="portada" class="form-control"
                                   value="<?= $libro->getPortada() ?>">
                            <small class="text-muted">Puedes subir la portada a /img/libros/ y pegar la URL.</small>
                        </div>

                    </div>
                </div>
            </div>

        </div>

        <!-- COLUMNA DERECHA -->
        <div class="col-lg-4">

            <!-- Estado -->
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-header bg-white border-0 py-3">
                    <h5 class="mb-0"><i class="bi bi-toggle-on me-2"></i>Estado del Libro</h5>
                </div>

                <div class="card-body">
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" id="activo"
                               name="activo" <?= $libro->getActivo() ? 'checked' : '' ?>>
                        <label class="form-check-label" for="activo">Activo</label>
                    </div>

                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="destacado"
                               name="destacado" <?= $libro->getDestacado() ? 'checked' : '' ?>>
                        <label class="form-check-label" for="destacado">Destacado</label>
                    </div>

                    <small class="text-muted d-block mt-2">
                        “Destacado” hará que aparezca en la portada del catálogo.
                    </small>
                </div>
            </div>

            <!-- Información del Sistema -->
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-header bg-white border-0 py-3">
                    <h5 class="mb-0"><i class="bi bi-info-circle me-2"></i>Información</h5>
                </div>
                <div class="card-body">

                    <div class="info-item mb-3">
                        <label class="text-muted small">ID del Libro</label>
                        <p class="mb-0"><code><?= $libro->getId() ?></code></p>
                    </div>

                    <div class="info-item">
                        <label class="text-muted small">Última Modificación</label>
                        <p class="mb-0"><i class="bi bi-clock me-1"></i>Automática</p>
                    </div>
                </div>
            </div>

            <!-- Botones de acción -->
            <div class="card border-0 shadow-sm">
                <div class="card-body">

                    <button type="button" class="btn btn-primary w-100 mb-2" onclick="peticionPUTLibro()">
                        <i class="bi bi-check-circle me-2"></i>Guardar Cambios
                    </button>

                    <a href="/libro/<?= $libro->getId() ?>" class="btn btn-outline-secondary w-100 mb-2">
                        <i class="bi bi-x-circle me-2"></i>Cancelar
                    </a>

                    <button type="button"
                            class="btn btn-outline-danger w-100"
                            data-bs-toggle="modal"
                            data-bs-target="#modalEliminarLibro">
                        <i class="bi bi-trash me-2"></i>Eliminar Libro
                    </button>

                </div>
            </div>
        </div>

    </div>
</form>

<!-- Modal de eliminar -->
<div class="modal fade" id="modalEliminarLibro" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white border-0">
                <h5 class="modal-title">
                    <i class="bi bi-exclamation-triangle me-2"></i>Eliminar Libro
                </h5>
                <button type="button" class="btn-close btn-close-white"
                        data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <p>¿Seguro que deseas eliminar el libro <strong><?= $libro->getTitulo() ?></strong>?</p>
                <div class="alert alert-danger">
                    Esta acción es permanente.
                </div>
            </div>

            <div class="modal-footer border-0">
                <button class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button class="btn btn-danger" onclick="peticionDeleteLibro()">
                    Eliminar Permanentemente
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    function peticionPUTLibro() {
        const data = {
            titulo: document.querySelector('[name="titulo"]').value,
            autor: document.querySelector('[name="autor"]').value,
            isbn: document.querySelector('[name="isbn"]').value,
            precio: document.querySelector('[name="precio"]').value,
            num_paginas: document.querySelector('[name="num_paginas"]').value,
            ano_publicacion: document.querySelector('[name="ano_publicacion"]').value,
            genero: document.querySelector('[name="genero"]').value,
            descripcion: document.querySelector('[name="descripcion"]').value,
            portada: document.querySelector('[name="portada"]').value,
            activo: document.querySelector('[name="activo"]').checked,
            destacado: document.querySelector('[name="destacado"]').checked
        };

        fetch("/libro/<?= $libro->getId() ?>", {
            method: "PUT",
            headers: {"Content-Type": "application/json"},
            body: JSON.stringify(data)
        })
            .then(r => r.text())
            .then(() => window.location.replace("/libro/<?= $libro->getId() ?>"))
            .catch(console.error);
    }

    function peticionDeleteLibro() {
        fetch("/libro/<?= $libro->getId() ?>", { method: "DELETE" })
            .then(r => r.text())
            .then(() => window.location.replace("/listaLibros"))
            .catch(console.error);
    }
</script>

<?php include_once DIRECTORIO_BACKEND_LAYOUTS . "footeradmin.php"; ?>
