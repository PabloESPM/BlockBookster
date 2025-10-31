<?php
include_once DIRECTORIO_FRONTEND_LAYOUTS . "head.php";
include_once DIRECTORIO_FRONTEND_LAYOUTS . "header.php";
?>
<!-- Título de la página -->
<div class="page-title light-background">
    <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">404</h1>
        <nav class="breadcrumbs">
            <ol>
                <li><a href="/inicio">Inicio</a></li>
                <li class="current">404</li>
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

            <h1 class="error-code mb-4" data-aos="fade-up" data-aos-delay="300">404</h1>

            <h2 class="error-title mb-3" data-aos="fade-up" data-aos-delay="400">¡Ups! Página no encontrada</h2>

            <p class="error-text mb-4" data-aos="fade-up" data-aos-delay="500">
                Parece que este capítulo se ha perdido entre nuestras páginas. Es posible que el enlace haya cambiado o que el libro que buscas ya no esté disponible.
            </p>

            <div class="search-box mb-4" data-aos="fade-up" data-aos-delay="600">
                <form action="#" class="search-form">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Buscar libros o secciones..." aria-label="Buscar">
                        <button class="btn search-btn" type="submit">
                            <i class="bi bi-search"></i>
                        </button>
                    </div>
                </form>
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
