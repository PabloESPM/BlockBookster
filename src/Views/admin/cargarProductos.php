<?php
$title = "Cargar Libro - Block Bookster";
include_once DIRECTORIO_ADMIN_LAYOUTS . "headadmin.php";
include_once DIRECTORIO_ADMIN_LAYOUTS . "headeradmin.php";
include_once DIRECTORIO_ADMIN_LAYOUTS . "navadmin.php";
$tituloSeccion = "Cargar Nuevo Libro";
include_once DIRECTORIO_ADMIN_LAYOUTS . "mainadmin.php";
?>

    <!-- Formulario de carga de libro -->
    <form method="POST" action="/boocks" enctype="multipart/form-data">

        <div class="row g-3">

            <!-- Información básica del libro -->
            <div class="col-md-12">
                <h4 class="mb-3">Información del Libro</h4>
            </div>

            <div class="col-md-6">
                <label for="formControlTitulo" class="form-label required-field">Título del Libro</label>
                <input type="text" class="form-control" id="formControlTitulo" name="titulo" required placeholder="Ej: Cien años de soledad">
            </div>

            <div class="col-md-6">
                <label for="formControlAutor" class="form-label required-field">Autor</label>
                <input type="text" class="form-control" id="formControlAutor" name="autor" required placeholder="Ej: Gabriel García Márquez">
            </div>

            <div class="col-md-3">
                <label for="formControlISBN" class="form-label required-field">ISBN</label>
                <input type="text" class="form-control" id="formControlISBN" name="isbn" required placeholder="Ej: 978-3-16-148410-0" pattern="[0-9\-]{10,17}">
                <div class="form-text">Formato: ISBN-10 o ISBN-13</div>
            </div>

            <div class="col-md-3">
                <label for="formControlAnoPublicacion" class="form-label required-field">Año de Publicación</label>
                <input type="number" class="form-control" id="formControlAnoPublicacion" name="anoPublicacion" required placeholder="2024" min="1000" max="2025">
            </div>

            <div class="col-md-3">
                <label for="formControlNumPages" class="form-label required-field">Número de Páginas</label>
                <input type="number" class="form-control" id="formControlNumPages" name="numPaginas" required placeholder="350" min="1">
            </div>

            <div class="col-md-3">
                <label for="formControlPrecio" class="form-label required-field">Precio (€)</label>
                <input type="number" class="form-control" id="formControlPrecio" name="precio" required placeholder="19.99" step="0.01" min="0">
            </div>

            <div class="col-md-4">
                <label for="formControlGenero" class="form-label required-field">Género Literario</label>
                <select class="form-select" id="formControlGenero" name="genero" required>
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
                <label for="formControlEditorial" class="form-label">Editorial</label>
                <input type="text" class="form-control" id="formControlEditorial" name="editorial" placeholder="Ej: Penguin Random House">
            </div>

            <div class="col-md-4">
                <label for="formControlIdioma" class="form-label required-field">Idioma</label>
                <select class="form-select" id="formControlIdioma" name="idioma" required>
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
                <label for="formControlDescripcion" class="form-label required-field">Descripción del Libro</label>
                <textarea class="form-control" id="formControlDescripcion" name="descripcion" rows="5" required placeholder="Escribe una descripción detallada del libro, su argumento, temática y aspectos destacables..."></textarea>
                <div class="form-text">Mínimo 100 caracteres recomendados</div>
            </div>

            <!-- Imágenes del libro -->
            <div class="col-md-12 mt-4">
                <h4 class="mb-3">Imágenes del Libro</h4>
            </div>

            <div class="col-md-6">
                <label for="inputGroupPortada" class="form-label required-field">Portada del Libro</label>
                <input type="file" id="inputGroupPortada" name="portada">
            </div>

            <!-- Stock y disponibilidad -->
            <div class="col-md-12 mt-4">
                <h4 class="mb-3">Publicación</h4>
            </div>


            <div class="col-md-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="checkDestacado" name="destacado" value="1">
                    <label class="form-check-label" for="checkDestacado">
                        Marcar como libro destacado
                    </label>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="checkActivo" name="activo" value="1" checked>
                    <label class="form-check-label" for="checkActivo">
                        Publicar libro (visible en la tienda)
                    </label>
                </div>
            </div>

            <!-- Botones de acción -->
            <div class="col-md-12 mt-4 mb-5">
                <hr>
                <div class="d-flex justify-content-between">
                    <div>
                        <input type="reset" class="btn btn-outline-secondary" value="Limpiar formulario">
                    </div>
                    <div>
                        <input type="submit" class="btn btn-primary btn-lg" value="Cargar Libro">
                    </div>
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