<?php
include_once DIRECTORIO_FRONTEND_LAYOUTS . "head.php";
include_once DIRECTORIO_FRONTEND_LAYOUTS . "header.php";
?>

<!-- Título de la página -->
<div class="page-title light-background">
    <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Sobre Nosotros</h1>
        <nav class="breadcrumbs">
            <ol>
                <li><a href="/inicio">Inicio</a></li>
                <li class="current">Sobre Nosotros</li>
            </ol>
        </nav>
    </div>
</div><!-- End Page Title -->

<!-- Sección Sobre Nosotros -->
<section id="about-2" class="about-2 section">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <span class="section-badge"><i class="bi bi-info-circle"></i> Sobre Nosotros</span>
        <div class="row">
            <div class="col-lg-6">
                <h2 class="about-title">Nuestra Pasión por los Libros</h2>
                <p class="about-description">
                    En BlockBookster, creemos que cada libro es una puerta a un nuevo mundo. Desde novelas clásicas hasta los últimos bestsellers, nuestra misión es acercar la lectura a todos.
                </p>
            </div>
            <div class="col-lg-6">
                <p class="about-text">
                    Fundada en Madrid, España, nuestra tienda combina la tradición de los libros impresos con la innovación del comercio digital, ofreciendo experiencias únicas a lectores de todas las edades.
                </p>
                <p class="about-text">
                    Nuestro equipo está compuesto por amantes de la lectura que seleccionan cuidadosamente cada título, asegurando calidad, diversidad y las mejores recomendaciones para nuestros clientes.
                </p>
            </div>
        </div>

        <!-- Características / Valores -->
        <div class="row features-boxes gy-4 mt-3">
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="feature-box">
                    <div class="icon-box">
                        <i class="bi bi-bullseye"></i>
                    </div>
                    <h3><a href="#" class="stretched-link">Variedad de Libros</a></h3>
                    <p>Contamos con miles de títulos de todos los géneros, desde clásicos hasta novedades internacionales.</p>
                </div>
            </div>

            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="feature-box">
                    <div class="icon-box">
                        <i class="bi bi-person-check"></i>
                    </div>
                    <h3><a href="#" class="stretched-link">Atención Personalizada</a></h3>
                    <p>Nuestro equipo ofrece recomendaciones y asistencia para encontrar siempre el libro perfecto para ti.</p>
                </div>
            </div>

            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="400">
                <div class="feature-box">
                    <div class="icon-box">
                        <i class="bi bi-clipboard-data"></i>
                    </div>
                    <h3><a href="#" class="stretched-link">Innovación Digital</a></h3>
                    <p>Plataforma moderna, envío rápido y opciones de lectura digital para que disfrutes tus libros en cualquier lugar.</p>
                </div>
            </div>
        </div>

        <!-- Video promocional -->
        <div class="row mt-5">
            <div class="col-lg-12" data-aos="zoom-in" data-aos-delay="200">
                <div class="video-box">
                    <img src="<?=DIRECTORIO_FRONTEND_IMG?>/about/about-wide-1.webp" class="img-fluid" alt="Video Promocional">
                    <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn"></a>
                </div>
            </div>
        </div>

    </div>

</section><!-- /Sección Sobre Nosotros -->

<!-- Sección de Estadísticas -->
<section id="stats" class="stats section light-background">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

            <div class="col-lg-3 col-md-6">
                <div class="stats-item">
                    <i class="bi bi-emoji-smile"></i>
                    <span data-purecounter-start="0" data-purecounter-end="500" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Clientes Satisfechos</strong> <span>lectores felices</span></p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="stats-item">
                    <i class="bi bi-journal-richtext"></i>
                    <span data-purecounter-start="0" data-purecounter-end="1200" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Libros Vendidos</strong> <span>historias compartidas</span></p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="stats-item">
                    <i class="bi bi-headset"></i>
                    <span data-purecounter-start="0" data-purecounter-end="1500" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Horas de Soporte</strong> <span>asistencia dedicada</span></p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="stats-item">
                    <i class="bi bi-people"></i>
                    <span data-purecounter-start="0" data-purecounter-end="25" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Miembros del Equipo</strong> <span>apasionados por la lectura</span></p>
                </div>
            </div>

        </div>

    </div>

</section><!-- /Sección de Estadísticas -->

<!-- Sección de Testimonios -->
<section id="testimonials" class="testimonials section">

    <div class="container">

        <div class="testimonial-masonry">

            <div class="testimonial-item" data-aos="fade-up">
                <div class="testimonial-content">
                    <div class="quote-pattern">
                        <i class="bi bi-quote"></i>
                    </div>
                    <p>BlockBookster ha renovado mi pasión por la lectura con recomendaciones increíbles y un servicio impecable.</p>
                    <div class="client-info">
                        <div class="client-image">
                            <img src="<?=DIRECTORIO_FRONTEND_IMG?>/person/person-f-7.webp" alt="Cliente">
                        </div>
                        <div class="client-details">
                            <h3>Lucía Fernández</h3>
                            <span class="position">Lectora habitual</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="testimonial-item highlight" data-aos="fade-up" data-aos-delay="100">
                <div class="testimonial-content">
                    <div class="quote-pattern">
                        <i class="bi bi-quote"></i>
                    </div>
                    <p>Excelente selección de libros y un equipo que realmente entiende lo que los lectores buscamos.</p>
                    <div class="client-info">
                        <div class="client-image">
                            <img src="<?=DIRECTORIO_FRONTEND_IMG?>/person/person-m-7.webp" alt="Cliente">
                        </div>
                        <div class="client-details">
                            <h3>Carlos Ramírez</h3>
                            <span class="position">Escritor</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="testimonial-item" data-aos="fade-up" data-aos-delay="200">
                <div class="testimonial-content">
                    <div class="quote-pattern">
                        <i class="bi bi-quote"></i>
                    </div>
                    <p>Un lugar donde cada lector encuentra su próxima gran historia. ¡Altamente recomendado!</p>
                    <div class="client-info">
                        <div class="client-image">
                            <img src="<?=DIRECTORIO_FRONTEND_IMG?>/person/person-f-8.webp" alt="Cliente">
                        </div>
                        <div class="client-details">
                            <h3>Elena Soto</h3>
                            <span class="position">Profesora de Literatura</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</section><!-- /Sección de Testimonios -->

<?php
include_once DIRECTORIO_FRONTEND_LAYOUTS . "footer.php";
?>
