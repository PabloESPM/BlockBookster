<?php
include_once DIRECTORIO_FRONTEND_LAYOUTS . "head.php";
include_once DIRECTORIO_FRONTEND_LAYOUTS . "header.php";
?>

<!-- Page Title -->
<div class="page-title light-background">
    <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Preguntas Frecuentes</h1>
        <nav class="breadcrumbs">
            <ol>
                <li><a href="/inicio">Inicio</a></li>
                <li class="current">FAQ</li>
            </ol>
        </nav>
    </div>
</div><!-- End Page Title -->

<!-- Faq Section -->
<section id="faq" class="faq section">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4 justify-content-between">

            <div class="col-lg-8">

                <div class="faq-list">
                    <div class="faq-item faq-active" data-aos="fade-up" data-aos-delay="100">
                        <h3>¿Cómo puedo comprar un libro en BlockBookster?</h3>
                        <div class="faq-content">
                            <p>
                                Solo necesitas crear una cuenta, navegar por nuestras colecciones y categorías, añadir los libros que te interesen al carrito y completar el pago de forma segura. Ofrecemos varias opciones de pago, incluyendo tarjeta y PayPal.
                            </p>
                        </div>
                        <i class="bi bi-plus faq-toggle"></i>
                    </div><!-- End FAQ Item -->

                    <div class="faq-item" data-aos="fade-up" data-aos-delay="200">
                        <h3>¿Qué opciones de envío están disponibles?</h3>
                        <div class="faq-content">
                            <p>
                                Ofrecemos envío estándar y express a toda España. Los pedidos superiores a €50 tienen envío gratuito. Los tiempos de entrega varían según la opción seleccionada y tu ubicación.
                            </p>
                        </div>
                        <i class="bi bi-plus faq-toggle"></i>
                    </div><!-- End FAQ Item -->

                    <div class="faq-item" data-aos="fade-up" data-aos-delay="300">
                        <h3>¿Puedo devolver un libro si no me gusta?</h3>
                        <div class="faq-content">
                            <p>
                                Sí, aceptamos devoluciones dentro de los 14 días posteriores a la recepción del pedido, siempre que el libro esté en perfectas condiciones. Puedes iniciar la devolución desde tu cuenta en línea o contactando a nuestro soporte.
                            </p>
                        </div>
                        <i class="bi bi-plus faq-toggle"></i>
                    </div><!-- End FAQ Item -->

                    <div class="faq-item" data-aos="fade-up" data-aos-delay="400">
                        <h3>¿Cómo puedo acceder a libros digitales o eBooks?</h3>
                        <div class="faq-content">
                            <p>
                                Los libros digitales comprados en BlockBookster se pueden descargar inmediatamente después del pago. Podrás acceder a ellos desde tu cuenta en la sección "Mis eBooks" y leerlos en tu dispositivo favorito.
                            </p>
                        </div>
                        <i class="bi bi-plus faq-toggle"></i>
                    </div><!-- End FAQ Item -->

                    <div class="faq-item" data-aos="fade-up" data-aos-delay="500">
                        <h3>¿BlockBookster ofrece suscripciones o membresías?</h3>
                        <div class="faq-content">
                            <p>
                                Sí, tenemos un club de lectores que ofrece descuentos exclusivos, acceso anticipado a novedades y envíos gratuitos ilimitados en pedidos seleccionados. Puedes suscribirte desde tu cuenta o en la página de membresías.
                            </p>
                        </div>
                        <i class="bi bi-plus faq-toggle"></i>
                    </div><!-- End FAQ Item -->

                </div>

            </div>

            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="faq-card">
                    <i class="bi bi-chat-dots-fill"></i>
                    <h3>¿No encuentras la respuesta que buscas?</h3>
                    <p>
                        Nuestro equipo de atención al cliente está disponible para ayudarte con cualquier duda sobre tus pedidos, envíos o libros. Contáctanos y te responderemos a la mayor brevedad.
                    </p>
                    <a href="/contacto" class="btn btn-primary">Contáctanos</a>
                </div>
            </div>

        </div>
    </div>
</section><!-- /Faq Section -->

<?php
include_once DIRECTORIO_FRONTEND_LAYOUTS . "footer.php";
?>
