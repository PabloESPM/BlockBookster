<?php

?>

<form method="post" action="/boocks" enctype="multipart/form-data">

    <div class="mb-3">
      <label for="formControlNombre" class="form-label">Nombre Libro</label>
      <input type="text" class="form-control" id="formControlNombre" name="nombre">
    </div>
    <div class="mb-3">
      <label for="formControlSinopsis" class="form-label">Sinopsis</label>
      <textarea class="form-control" id="formControlSinopsis" rows="3" name="sinopsis"></textarea>
    </div>
    <div class="mb-3">
        <div class="input-group mb-3">
            <input type="file" class="form-control" id="inputGroupPortada" name="portada">
            <label class="input-group-text" for="inputGroupPortada">Upload</label>
        </div>
    </div>
    <div class="mb-3">
        <input type="submit" class="btn btn-primary" value="Guardar">
    </div>



</form>

$router->post('/boocks', function() {
var_dump($_POST);
var_dump($_FILES);
$carpetas = scandir(DIRECTORIO_IMAGES); // Ver si el directorio carpeta esta creado dentro de images
if(!array_search('uploaded', $carpetas)){ // si no esta creado el directorio crealo
mkdir(DIRECTORIO_IMAGES . "/uploaded");
move_uploaded_file($_FILES['portada']['tmp_name'], DIRECTORIO_IMAGES . "/uploaded/" . $_FILES['portada']['name']);
}else{
move_uploaded_file($_FILES['portada']['tmp_name'], DIRECTORIO_IMAGES . "/uploaded/" . $_FILES['portada']['name']);
}
});

