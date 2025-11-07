<?php
include_once "vendor/autoload.php";
include_once "env.php";


//Directiva para inserta o utilizar la clase RouteCollector
use Phroute\Phroute\Exception\HttpRouteNotFoundException;
use Phroute\Phroute\RouteCollector;
use App\Class\User;
use App\Class\Auxiliar;
use App\Controller\UserController;

//instancia una variable de la clase RouteCollector
$router = new RouteCollector();


$router->get('/create-database', function () {
    \App\Model\DB::createDataBase("BlockBookster");
});

//Definir las rutas de mi aplicación

////Rutas Para Paginas Dinamicas
///API REST CRUD

///Login
$router->post('/user/login', [UserController::class, 'verify']);

//Usuario
$router->get('/user',[\App\Controller\UserController::class,'index']);
$router->get('/user/{id}',[\App\Controller\UserController::class,'show']);
$router->post('/user',[\App\Controller\UserController::class,'store']);
$router->put('/user/{id}',[\App\Controller\UserController::class,'update']);
$router->delete('/user/{id}',[\App\Controller\UserController::class,'destroy']);

//Libros
$router->get('/book',[\App\Controller\BookController::class,'index']);
$router->get('/book/{id}',[\App\Controller\BookController::class,'show']);
$router->post('/book',[\App\Controller\BookController::class,'store']);
$router->put('/book/{id}',[\App\Controller\BookController::class,'update']);
$router->delete('/book/{id}',[\App\Controller\BookController::class,'destroy']);


//Autores
$router->get('/author',[\App\Controller\UserController::class,'index']);
$router->get('/author/{id}',[\App\Controller\UserController::class,'show']);
$router->post('/author',[\App\Controller\UserController::class,'store']);
$router->put('/author/{id}',[\App\Controller\UserController::class,'update']);
$router->delete('/author/{id}',[\App\Controller\UserController::class,'destroy']);



$router->get('/', function (){
    include_once DIRECTORIO_FRONTEND . "inicio.php";
});

$router->get('/inicio', function() {
    include_once DIRECTORIO_FRONTEND . 'inicio.php';
});

$router->get('/about', function() {
    include_once DIRECTORIO_FRONTEND . 'about.php';
});

$router->get('/account', function() {
    include_once DIRECTORIO_FRONTEND . 'account.php';
});

$router->get('/cart', function() {
    include_once DIRECTORIO_FRONTEND . 'cart.php';
});

$router->get('/category', function() {
    include_once DIRECTORIO_FRONTEND . 'category.php';
});

$router->get('/checkout', function() {
    include_once DIRECTORIO_FRONTEND . 'checkout.php';
});

$router->get('/contact', function() {
    include_once DIRECTORIO_FRONTEND . 'contact.php';
});

$router->get('/faq', function() {
    include_once DIRECTORIO_FRONTEND . 'faq.php';
});

$router->get('/login', function() {
    include_once DIRECTORIO_FRONTEND . 'login.php';
});

$router->get('/orderConfirmation', function() {
    include_once DIRECTORIO_FRONTEND. 'order-confirmation.php';
});

$router->get('/paymentMethods', function() {
    include_once DIRECTORIO_FRONTEND . 'payment-methods.php';
});

$router->get('/privacy', function() {
    include_once DIRECTORIO_FRONTEND . 'privacy.php';
});

$router->get('/productDetails', function() {
    include_once DIRECTORIO_FRONTEND . 'product-details.php';
});

$router->get('/register', function() {
    include_once DIRECTORIO_FRONTEND . 'register.php';
});

$router->get('/returnPolicy', function() {
    include_once DIRECTORIO_FRONTEND . 'return-policy.php';
});

$router->get('/searchResults', function() {
    include_once DIRECTORIO_FRONTEND . 'search-results.php';
});

$router->get('/shipingInfo', function() {
    include_once DIRECTORIO_FRONTEND . 'shiping-info.php';
});

$router->get('/starterPage', function() {
    include_once DIRECTORIO_FRONTEND . 'starter-page.php';
});

$router->get('/support', function() {
    include_once DIRECTORIO_FRONTEND . 'support.php';
});

$router->get('/tos', function() {
    include_once DIRECTORIO_FRONTEND . 'tos.php';
});

# ADMINISTRACION

$router->get('adminInicio', function() {
    include_once DIRECTORIO_BACKEND . 'admininicio.php';
});

$router->get('cargarProducto', function() {
    include_once DIRECTORIO_BACKEND . 'cargarProductos.php';
});

# FUNCIONES

$router->get('funciones', function() {
    include_once DIRECTORIO_AUX . 'funciones.php';
});


# Crear libros
$router->get('/admin/books/create', function (){
    include_once DIRECTORIO_BACKEND . 'cargarProductos.php';
});

$router->get('admin/books/{$id}/edit', function($id) {
    include_once DIRECTORIO_BACKEND . 'cargarProductos.php';
});



# NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

try{
    $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
}catch (HttpRouteNotFoundException $e){
    return include_once DIRECTORIO_VIEWS . '404.php';
}

// Print out the value returned from the dispatched function
echo $response;