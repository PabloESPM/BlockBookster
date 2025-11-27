<?php
$title = "Cargar Libro - Block Bookster";
include_once DIRECTORIO_BACKEND_LAYOUTS . "headadmin.php";
include_once DIRECTORIO_BACKEND_LAYOUTS . "headeradmin.php";
include_once DIRECTORIO_BACKEND_LAYOUTS . "navadmin.php";
$tituloSeccion = "Cargar Nuevo Libro";
include_once DIRECTORIO_BACKEND_LAYOUTS . "mainadmin.php";
?>

    <!-- Formulario de carga de libro -->
    <form method="post" action="/book" enctype="multipart/form-data">
        <div class="row g-3">
            <!-- Información básica del libro -->
            <div class="col-md-12">
                <h4 class="mb-3">Información del Libro</h4>
            </div>

            <div class="col-md-6">
                <label for="inputTitle" class="form-label required-field">Título del Libro</label>
                <input type="text" class="form-control" id="inputTitle" name="title" required placeholder="Ej: Cien años de soledad"
                <?php if (isset($error)){echo "value='".$_POST['title']."'";}?>>
            </div>

            <div class="col-md-6">
                <label for="inputAuthor" class="form-label required-field">Autor</label>
                <input type="text" class="form-control" id="inputAuthor" name="author" required placeholder="Ej: Gabriel García Márquez"
                <?php if (isset($error)){echo "value='".$_POST['author']."'";}?>>
            </div>

            <div class="col-md-3">
                <label for="inputIsbn" class="form-label required-field">ISBN</label>
                <input type="text" class="form-control" id="inputIsbn" name="isbn" required placeholder="Ej: 978-3-16-148410-0" pattern="[0-9\-]{10,17}"
                <?php if (isset($error)){echo "value='".$_POST['isbn']."'";}?>>
                <div class="form-text">Formato: ISBN-10 o ISBN-13</div>
            </div>

            <div class="col-md-3">
                <label for="inputPublicationDate" class="form-label required-field">Año de Publicación</label>
                <input type="number" class="form-control" id="inputPublicationDate" name="publicationDate" required placeholder="2024" min="1000" max="3000"
                <?php if (isset($error)){echo "value='".$_POST['publicationDate']."'";}?>>
            </div>

            <div class="col-md-3">
                <label for="inputNumberOfPages" class="form-label required-field">Número de Páginas</label>
                <input type="number" class="form-control" id="inputNumberOfPages" name="numberOfPages" required placeholder="350" min="1"
                <?php if (isset($error)){echo "value='".$_POST['numberOfPages']."'";}?>>
            </div>

            <div class="col-md-3">
                <label for="inputPrice" class="form-label required-field">Precio (€)</label>
                <input type="number" class="form-control" id="inputPrice" name="price" required placeholder="19.99" step="0.01" min="0"
                <?php if (isset($error)){echo "value='".$_POST['price']."'";}?>>
            </div>

            <div class="col-md-4">
                <label for="inputGenre" class="form-label required-field">Género Literario</label>
                <select class="form-select" id="inputGenre" name="genre" required>
                    <option value="" selected="" disabled="">Seleccionar género...</option>
                    <option value="ficcion" <?php if (isset($error) && $_POST['genre']=='ficcion'){echo "selected";}?>>Ficción</option>
                    <option value="no_ficcion" <?php if (isset($error) && $_POST['genre']=='no_ficcion'){echo "selected";}?>>No Ficción</option>
                    <option value="misterio" <?php if (isset($error) && $_POST['genre']=='misterio'){echo "selected";}?>>Misterio</option>
                    <option value="thriller" <?php if (isset($error) && $_POST['genre']=='thriller'){echo "selected";}?>>Thriller</option>
                    <option value="romance" <?php if (isset($error) && $_POST['genre']=='romance'){echo "selected";}?>>Romance</option>
                    <option value="fantasia" <?php if (isset($error) && $_POST['genre']=='fantasia'){echo "selected";}?>>Fantasía</option>
                    <option value="ciencia_ficcion" <?php if (isset($error) && $_POST['genre']=='ciencia_ficcion'){echo "selected";}?>>Ciencia Ficción</option>
                    <option value="terror" <?php if (isset($error) && $_POST['genre']=='terror'){echo "selected";}?>>Terror</option>
                    <option value="biografia"<?php if (isset($error) && $_POST['genre']=='biografia'){echo "selected";}?>>Biografía</option>
                    <option value="historia" <?php if (isset($error) && $_POST['genre']=='historia'){echo "selected";}?>>Historia</option>
                    <option value="poesia" <?php if (isset($error) && $_POST['genre']=='poesia'){echo "selected";}?>>Poesía</option>
                    <option value="ensayo" <?php if (isset($error) && $_POST['genre']=='ensayo'){echo "selected";}?>>Ensayo</option>
                    <option value="infantil" <?php if (isset($error) && $_POST['genre']=='infantil'){echo "selected";}?>>Infantil</option>
                    <option value="juvenil" <?php if (isset($error) && $_POST['genre']=='juvenil'){echo "selected";}?>>Juvenil</option>
                    <option value="autoayuda" <?php if (isset($error) && $_POST['genre']=='autoayuda'){echo "selected";}?>>Autoayuda</option>
                </select>
            </div>

            <div class="col-md-4">
                <label for="inputPublisher" class="form-label">Editorial</label>
                <input type="text" class="form-control" id="inputPublisher" name="publisher" placeholder="Ej: Penguin Random House"
                <?php if (isset($error)){echo "value='".$_POST['publisher']."'";}?>>
            </div>

            <div class="col-md-4">
                <label for="inputLanguage" class="form-label required-field">Idioma</label>
                <select class="form-select" id="inputLanguage" name="language" required>
                    <option value="" selected="" disabled="">Seleccionar idioma...</option>
                    <option value="es" <?php if (isset($error) && $_POST['language']=='es'){echo "selected";}?>>Español</option>
                    <option value="in" <?php if (isset($error) && $_POST['language']=='in'){echo "selected";}?>>Inglés</option>
                    <option value="fr" <?php if (isset($error) && $_POST['language']=='fr'){echo "selected";}?>>Francés</option>
                    <option value="al" <?php if (isset($error) && $_POST['language']=='al'){echo "selected";}?>>Alemán</option>
                    <option value="it" <?php if (isset($error) && $_POST['language']=='it'){echo "selected";}?>>Italiano</option>
                    <option value="pt" <?php if (isset($error) && $_POST['language']=='pt'){echo "selected";}?>>Portugués</option>
                    <option value="ca" <?php if (isset($error) && $_POST['language']=='ca'){echo "selected";}?>>Catalán</option>
                    <option value="otros" <?php if (isset($error) && $_POST['language']=='otros'){echo "selected";}?>>Otro</option>
                </select>
            </div>

            <div class="col-md-12">
                <label for="inputDescription" class="form-label required-field">Descripción del Libro</label>
                <textarea class="form-control" id="inputDescription" name="description" rows="5" required placeholder="Escribe una descripción detallada del libro, su argumento, temática y aspectos destacables..."
                <?php if (isset($error)){echo "value='".$_POST['description']."'";}?>></textarea>
                <div class="form-text">Mínimo 100 caracteres recomendados</div>
            </div>

            <!-- Imágenes del libro -->
            <div class="col-md-12 mt-4">
                <h4 class="mb-3">Portada del Libro</h4>
            </div>

            <div class="col-md-6">
                <label for="inputCover" class="form-label required-field">Portada del Libro</label>
                <input type="file" id="inputCover" name="cover"
                <?php if (isset($error)){echo "value='".$_POST['cover']."'";}?>>
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
                    <?php if(isset($error)){?>
                        <div class="mb-3">
                            <div class="p-3 text-danger-emphasis bg-danger-subtle border border-danger-subtle rounded-3">
                                <?php foreach ($error as $fail){echo $fail. "</br>";}?>
                            </div>
                        </div>
                    <?php } ?>
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
include_once DIRECTORIO_BACKEND_LAYOUTS . "footeradmin.php";
?>