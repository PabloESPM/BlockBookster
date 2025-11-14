<?php
include_once DIRECTORIO_FRONTEND_LAYOUTS . "head.php";
include_once DIRECTORIO_FRONTEND_LAYOUTS . "header.php";
?>
<!-- Título de la página -->
<div class="page-title light-background">
    <div class="container d-lg-flex justify-content-between align-items-center">
        <nav class="breadcrumbs">
            <ol>
                <li><a href="/inicio">Inicio</a></li>
                <li class="current">No tines permiso para estar aquí</li>
            </ol>
        </nav>
    </div>
</div><!-- End Page Title -->

<!-- Sección Error 404 -->
<section id="error-404" class="error-404 section">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="text-center">
            <div class="error-icon mb-4" data-aos="zoom-in" data-aos-delay="200">
                <i class="bi bi-exclamation-circle"></i>
            </div>

            <h1 class="error-code mb-4" data-aos="fade-up" data-aos-delay="300">PERMISO DENEGADO</h1>

            <h2 class="error-title mb-3" data-aos="fade-up" data-aos-delay="400">¡Ups! ¿Qué haces por aquí? ¿Te has perdiso?</h2>

            <p class="error-text mb-4" data-aos="fade-up" data-aos-delay="500">
                Parece que te has perdido entre nuestros libros. Es posible que el libro que buscas sea confidencial.
            </p>

            <div class="search-box mb-4" data-aos="fade-up" data-aos-delay="600">

            </div>

            <div class="error-action" data-aos="fade-up" data-aos-delay="700">
                <a href="/" class="btn btn-primary">Volver al inicio</a>
            </div>
        </div>

    </div>

</section><!-- /Sección Error 404 -->
<?php
include_once DIRECTORIO_FRONTEND_LAYOUTS . "footer.php";
?>
