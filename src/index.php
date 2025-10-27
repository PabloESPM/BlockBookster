<?php
include_once "vendor/autoload.php";
include_once "env.php";

use Phroute\Phroute\Exception\HttpRouteNotFoundException;
use Phroute\Phroute\RouteCollector;

$router = new RouteCollector();

$router->get('/', function (){
    include_once DIRECTORIO_TEMPLATE . "inicio.php";
});

$router->get('/inicio', function() {
    include_once DIRECTORIO_TEMPLATE . 'inicio.php';
});

$router->get('/about', function() {
    include_once DIRECTORIO_TEMPLATE . 'about.php';
});

$router->get('/account', function() {
    include_once DIRECTORIO_TEMPLATE . 'account.php';
});

$router->get('/cart', function() {
    include_once DIRECTORIO_TEMPLATE . 'cart.php';
});

$router->get('/category', function() {
    include_once DIRECTORIO_TEMPLATE . 'category.php';
});

$router->get('/checkout', function() {
    include_once DIRECTORIO_TEMPLATE . 'checkout.php';
});

$router->get('/contact', function() {
    include_once DIRECTORIO_TEMPLATE . 'contact.php';
});

$router->get('/faq', function() {
    include_once DIRECTORIO_TEMPLATE . 'faq.php';
});

$router->get('/login', function() {
    include_once DIRECTORIO_TEMPLATE . 'login.php';
});

$router->get('/orderConfirmation', function() {
    include_once DIRECTORIO_TEMPLATE . 'order-confirmation.php';
});

$router->get('/paymentMethods', function() {
    include_once DIRECTORIO_TEMPLATE . 'payment-methods.php';
});

$router->get('/privacy', function() {
    include_once DIRECTORIO_TEMPLATE . 'privacy.php';
});

$router->get('/productDetails', function() {
    include_once DIRECTORIO_TEMPLATE . 'product-details.php';
});

$router->get('/register', function() {
    include_once DIRECTORIO_TEMPLATE . 'register.php';
});

$router->get('/returnPolicy', function() {
    include_once DIRECTORIO_TEMPLATE . 'return-policy.php';
});

$router->get('/searchResults', function() {
    include_once DIRECTORIO_TEMPLATE . 'search-results.php';
});

$router->get('/shipingInfo', function() {
    include_once DIRECTORIO_TEMPLATE . 'shiping-info.php';
});

$router->get('/starterPage', function() {
    include_once DIRECTORIO_TEMPLATE . 'starter-page.php';
});

$router->get('/support', function() {
    include_once DIRECTORIO_TEMPLATE . 'support.php';
});

$router->get('/tos', function() {
    include_once DIRECTORIO_TEMPLATE . 'tos.php';
});

# ADMINISTRACION

$router->get('adminInicio', function() {
    include_once DIRECTORIO_ADMIN . 'admininicio.php';
});

$router->get('cargarProducto', function() {
    include_once DIRECTORIO_ADMIN . 'cargarProductos.php';
});

# FUNCIONES

$router->get('funciones', function() {
    include_once DIRECTORIO_AUX . 'funciones.php';
});


# Crear libros
$router->get('/admin/boocks/create', function (){
    include_once DIRECTORIO_ADMIN . 'cargarProductos.php';
});

$router->get('admin/boocks/{$id}/edit', function($id) {
    include_once DIRECTORIO_ADMIN . 'cargarProductos.php';
});

// Rutas de trabajo con libros
$router->post('/boocks', function() {
    var_dump($_POST);
    var_dump($_FILES);

    // Verificar que se haya enviado el título y el archivo
    if(empty($_POST['titulo']) || empty($_FILES['portada']['name'])) {
        die('Error: Faltan datos requeridos');
    }

    // Limpiar el título para usarlo como nombre de carpeta
    $tituloLibro = $_POST['titulo'];
    // Eliminar caracteres no permitidos en nombres de carpeta
    $nombreCarpeta = preg_replace('/[^a-zA-Z0-9\s\-_]/', '', $tituloLibro);
    // Reemplazar espacios por guiones bajos
    $nombreCarpeta = str_replace(' ', '_', $nombreCarpeta);

    $carpetas = scandir(DIRECTORIO_IMAGES); // Ver si el directorio uploaded está creado dentro de images

    // Si no existe la carpeta uploaded, crearla
    if(!array_search('uploaded', $carpetas)) {
        mkdir(DIRECTORIO_IMAGES . "/uploaded");
    }

    // Ruta completa de la carpeta del libro
    $rutaCarpetaLibro = DIRECTORIO_IMAGES . "/uploaded/" . $nombreCarpeta;

    // Verificar si la carpeta del libro ya existe
    if(!is_dir($rutaCarpetaLibro)) {
        // Si no existe, crearla
        mkdir($rutaCarpetaLibro);
    }

    // Mover el archivo a la carpeta del libro
    $rutaDestino = $rutaCarpetaLibro . "/" . $_FILES['portada']['name'];

    if(move_uploaded_file($_FILES['portada']['tmp_name'], $rutaDestino)) {
        echo "Imagen subida correctamente a: " . $rutaDestino;
    } else {
        echo "Error al subir la imagen";
    }
});


$router->delete('/boocks/{id}', function($id) {

});
$router->put('/boocks/{id}', function($id) {

});
$router->get('/boocks', function() {});
$router->get('/boocks/{id}', function($id) {});


# NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

try{
    $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
}catch (HttpRouteNotFoundException $e){
    return include_once "Views/template/layouts/404.php";
}

// Print out the value returned from the dispatched function
echo $response;