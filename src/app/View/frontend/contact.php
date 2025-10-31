<?php
include_once DIRECTORIO_FRONTEND_LAYOUTS . "head.php";
include_once DIRECTORIO_FRONTEND_LAYOUTS . "header.php";
?>

<!-- Título de la página -->
<div class="page-title light-background">
    <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Contacto</h1>
        <nav class="breadcrumbs">
            <ol>
                <li><a href="/inicio">Inicio</a></li>
                <li class="current">Contacto</li>
            </ol>
        </nav>
    </div>
</div><!-- End Page Title -->

<!-- Sección Contacto -->
<section id="contact-2" class="contact-2 section">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <!-- Cajas de Información de Contacto -->
        <div class="row gy-4 mb-5">
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="contact-info-box">
                    <div class="icon-box">
                        <i class="bi bi-geo-alt"></i>
                    </div>
                    <div class="info-content">
                        <h4>Dirección</h4>
                        <p>Calle de la Lectura 42, Madrid, España</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="contact-info-box">
                    <div class="icon-box">
                        <i class="bi bi-envelope"></i>
                    </div>
                    <div class="info-content">
                        <h4>Correo Electrónico</h4>
                        <p>hola@blockbookster.com</p>
                        <p>soporte@blockbookster.com</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="contact-info-box">
                    <div class="icon-box">
                        <i class="bi bi-headset"></i>
                    </div>
                    <div class="info-content">
                        <h4>Horario de Atención</h4>
                        <p>Lunes a Viernes: 9:00 - 18:00</p>
                        <p>Sábado: 10:00 - 14:00</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Google Maps -->
    <div class="map-section" data-aos="fade-up" data-aos-delay="200">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3030.000000000000!2d-3.703790!3d40.416775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4228a1d5b1b1b1%3A0x123456789abcdef!2sCalle%20de%20la%20Lectura%2042%2C%20Madrid%2C%20España!5e0!3m2!1ses!2ses!4v1697890123456!5m2!1ses!2ses" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <!-- Formulario de Contacto -->
    <div class="container form-container-overlap">
        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="300">
            <div class="col-lg-10">
                <div class="contact-form-wrapper">
                    <h2 class="text-center mb-4">Ponte en contacto</h2>

                    <form action="forms/contact.php" method="post" class="php-email-form">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-with-icon">
                                        <i class="bi bi-person"></i>
                                        <input type="text" class="form-control" name="name" placeholder="Nombre" required="">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-with-icon">
                                        <i class="bi bi-envelope"></i>
                                        <input type="email" class="form-control" name="email" placeholder="Correo electrónico" required="">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="input-with-icon">
                                        <i class="bi bi-text-left"></i>
                                        <input type="text" class="form-control" name="subject" placeholder="Asunto" required="">
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <div class="input-with-icon">
                                        <i class="bi bi-chat-dots message-icon"></i>
                                        <textarea class="form-control" name="message" placeholder="Escribe tu mensaje..." style="height: 180px" required=""></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="loading">Cargando</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Tu mensaje ha sido enviado. ¡Gracias!</div>
                            </div>

                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-primary btn-submit">ENVIAR MENSAJE</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

</section><!-- /Sección Contacto -->
<?php
include_once DIRECTORIO_FRONTEND_LAYOUTS . "footer.php";
?>
