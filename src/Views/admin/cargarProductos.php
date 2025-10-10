<?php
$title = "Cargar Libro - Block Bookster";
include_once DIRECTORIO_ADMIN_LAYOUTS . "headadmin.php";
include_once DIRECTORIO_ADMIN_LAYOUTS . "headeradmin.php";
include_once DIRECTORIO_ADMIN_LAYOUTS . "navadmin.php";
$tituloSeccion = "Cargar Nuevo Libro";
include_once DIRECTORIO_ADMIN_LAYOUTS . "mainadmin.php";
?>

    <!-- Formulario de carga de libro -->
    <form id="bookForm" action="procesar_libro.php" method="POST" enctype="multipart/form-data">

        <div class="row g-3">

            <!-- Información básica del libro -->
            <div class="col-md-12">
                <h4 class="mb-3">Información del Libro</h4>
            </div>

            <div class="col-md-6">
                <label for="titulo" class="form-label required-field">Título del Libro</label>
                <input type="text" class="form-control" id="titulo" name="titulo" required placeholder="Ej: Cien años de soledad">
            </div>

            <div class="col-md-6">
                <label for="autor" class="form-label required-field">Autor</label>
                <input type="text" class="form-control" id="autor" name="autor" required placeholder="Ej: Gabriel García Márquez">
            </div>

            <div class="col-md-3">
                <label for="isbn" class="form-label required-field">ISBN</label>
                <input type="text" class="form-control" id="isbn" name="isbn" required placeholder="Ej: 978-3-16-148410-0" pattern="[0-9\-]{10,17}">
                <div class="form-text">Formato: ISBN-10 o ISBN-13</div>
            </div>

            <div class="col-md-3">
                <label for="ano_publicacion" class="form-label required-field">Año de Publicación</label>
                <input type="number" class="form-control" id="ano_publicacion" name="ano_publicacion" required placeholder="2024" min="1000" max="2025">
            </div>

            <div class="col-md-3">
                <label for="num_paginas" class="form-label required-field">Número de Páginas</label>
                <input type="number" class="form-control" id="num_paginas" name="num_paginas" required placeholder="350" min="1">
            </div>

            <div class="col-md-3">
                <label for="precio" class="form-label required-field">Precio (€)</label>
                <input type="number" class="form-control" id="precio" name="precio" required placeholder="19.99" step="0.01" min="0">
            </div>

            <div class="col-md-4">
                <label for="genero" class="form-label required-field">Género Literario</label>
                <select class="form-select" id="genero" name="genero" required>
                    <option value="">Seleccionar género...</option>
                    <option value="ficcion">Ficción</option>
                    <option value="no_ficcion">No Ficción</option>
                    <option value="misterio">Misterio</option>
                    <option value="thriller">Thriller</option>
                    <option value="romance">Romance</option>
                    <option value="fantasia">Fantasía</option>
                    <option value="ciencia_ficcion">Ciencia Ficción</option>
                    <option value="terror">Terror</option>
                    <option value="biografia">Biografía</option>
                    <option value="historia">Historia</option>
                    <option value="poesia">Poesía</option>
                    <option value="ensayo">Ensayo</option>
                    <option value="infantil">Infantil</option>
                    <option value="juvenil">Juvenil</option>
                    <option value="autoayuda">Autoayuda</option>
                </select>
            </div>

            <div class="col-md-4">
                <label for="editorial" class="form-label">Editorial</label>
                <input type="text" class="form-control" id="editorial" name="editorial" placeholder="Ej: Penguin Random House">
            </div>

            <div class="col-md-4">
                <label for="idioma" class="form-label required-field">Idioma</label>
                <select class="form-select" id="idioma" name="idioma" required>
                    <option value="">Seleccionar idioma...</option>
                    <option value="es" selected>Español</option>
                    <option value="en">Inglés</option>
                    <option value="fr">Francés</option>
                    <option value="de">Alemán</option>
                    <option value="it">Italiano</option>
                    <option value="pt">Portugués</option>
                    <option value="ca">Catalán</option>
                    <option value="otros">Otro</option>
                </select>
            </div>

            <div class="col-md-12">
                <label for="descripcion" class="form-label required-field">Descripción del Libro</label>
                <textarea class="form-control" id="descripcion" name="descripcion" rows="5" required placeholder="Escribe una descripción detallada del libro, su argumento, temática y aspectos destacables..."></textarea>
                <div class="form-text">Mínimo 100 caracteres recomendados</div>
            </div>

            <!-- Imágenes del libro -->
            <div class="col-md-12 mt-4">
                <h4 class="mb-3">Imágenes del Libro</h4>
            </div>

            <div class="col-md-6">
                <label for="portada" class="form-label required-field">Portada del Libro</label>
                <div class="upload-area" id="portadaUploadArea" onclick="">
                    <span data-feather="upload-cloud" style="width: 48px; height: 48px;"></span>
                    <p class="mb-0 mt-2">Haz clic o arrastra la imagen de la portada aquí</p>
                    <small class="text-muted">JPG, PNG o WEBP (máx. 5MB)</small>
                </div>
                <input type="file" class="form-control d-none" id="portada" name="portada" accept="image/jpeg,image/png,image/webp" required>
                <div id="portadaPreview" class="text-center"></div>
            </div>

            <div class="col-md-6">
                <label for="contraportada" class="form-label">Contraportada del Libro</label>
                <div class="upload-area" id="contraportadaUploadArea" onclick="">
                    <span data-feather="upload-cloud" style="width: 48px; height: 48px;"></span>
                    <p class="mb-0 mt-2">Haz clic o arrastra la imagen de la contraportada aquí</p>
                    <small class="text-muted">JPG, PNG o WEBP (máx. 5MB) - Opcional</small>
                </div>
                <input type="file" class="form-control d-none" id="contraportada" name="contraportada" accept="image/jpeg,image/png,image/webp">
                <div id="contraportadaPreview" class="text-center"></div>
            </div>

            <!-- Stock y disponibilidad -->
            <div class="col-md-12 mt-4">
                <h4 class="mb-3">Disponibilidad y Stock</h4>
            </div>

            <div class="col-md-4">
                <label for="stock" class="form-label required-field">Unidades en Stock</label>
                <input type="number" class="form-control" id="stock" name="stock" required placeholder="0" min="0" value="0">
            </div>

            <div class="col-md-4">
                <label for="estado" class="form-label required-field">Estado</label>
                <select class="form-select" id="estado" name="estado" required>
                    <option value="nuevo">Nuevo</option>
                    <option value="usado">Usado - Como nuevo</option>
                    <option value="usado_bueno">Usado - Buen estado</option>
                    <option value="usado_aceptable">Usado - Estado aceptable</option>
                </select>
            </div>

            <div class="col-md-4">
                <label for="formato" class="form-label required-field">Formato</label>
                <select class="form-select" id="formato" name="formato" required>
                    <option value="tapa_dura">Tapa Dura</option>
                    <option value="tapa_blanda" selected>Tapa Blanda</option>
                    <option value="ebook">eBook</option>
                    <option value="audiolibro">Audiolibro</option>
                </select>
            </div>

            <div class="col-md-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="destacado" name="destacado" value="1">
                    <label class="form-check-label" for="destacado">
                        Marcar como libro destacado
                    </label>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="activo" name="activo" value="1" checked>
                    <label class="form-check-label" for="activo">
                        Publicar libro (visible en la tienda)
                    </label>
                </div>
            </div>

            <!-- Botones de acción -->
            <div class="col-md-12 mt-4 mb-5">
                <hr>
                <div class="d-flex justify-content-between">
                    <button type="reset" class="btn btn-outline-secondary">
                        <span data-feather="x-circle"></span>
                        Limpiar formulario
                    </button>
                    <button type="submit" class="btn btn-primary btn-lg">
                        <span data-feather="upload"></span>
                        Cargar Libro
                    </button>
                </div>
            </div>

        </div>
    </form>

    <style>
        .upload-area {
            border: 2px dashed #dee2e6;
            border-radius: 0.375rem;
            padding: 2rem;
            text-align: center;
            background-color: #f8f9fa;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .upload-area:hover {
            border-color: #0d6efd;
            background-color: #e7f1ff;
        }

        .upload-area.dragover {
            border-color: #0d6efd;
            background-color: #cfe2ff;
        }

        .image-preview {
            max-width: 200px;
            max-height: 300px;
            margin-top: 1rem;
            border: 1px solid #dee2e6;
            border-radius: 0.375rem;
        }

        .required-field::after {
            content: "*";
            color: #dc3545;
            margin-left: 4px;
        }
    </style>

<?php
include_once DIRECTORIO_ADMIN_LAYOUTS . "footeradmin.php";
?>