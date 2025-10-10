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

# NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

try{
    $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
}catch (HttpRouteNotFoundException $e){
    return include_once "Views/template/layouts/404.php";
}

// Print out the value returned from the dispatched function
echo $response;