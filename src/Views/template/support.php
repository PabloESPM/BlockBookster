<?php
include_once DIRECTORIO_LAYOUTS . "head.php";
include_once DIRECTORIO_LAYOUTS . "header.php";
?>

<!-- Page Title -->
<div class="page-title light-background">
    <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Centro de Ayuda</h1>
        <nav class="breadcrumbs">
            <ol>
                <li><a href="/inicio">Inicio</a></li>
                <li class="current">Soporte</li>
            </ol>
        </nav>
    </div>
</div><!-- End Page Title -->

<!-- Support Section -->
<section id="support" class="support section">

    <div class="container" data-aos="fade-up">

        <!-- Support Header -->
        <div class="support-header" data-aos="fade-up">
            <div class="header-content">
                <h2>Ayuda y Soporte</h2>
                <p>Encuentra respuestas, guías y asistencia de nuestro equipo de soporte</p>
            </div>
        </div>

        <!-- Quick Support Actions -->
        <div class="quick-support" data-aos="fade-up" data-aos-delay="100">
            <div class="action-item live-chat">
                <div class="action-content">
                    <i class="bi bi-chat-text"></i>
                    <h4>Chat en Vivo</h4>
                    <p>Habla con nuestro equipo de soporte</p>
                    <a href="#" class="action-button">Iniciar Chat</a>
                </div>
            </div>

            <div class="action-item phone">
                <div class="action-content">
                    <i class="bi bi-telephone"></i>
                    <h4>Teléfono</h4>
                    <p>Línea de soporte 24/7</p>
                    <a href="tel:1234567890" class="action-button">+34 912 345 678</a>
                </div>
            </div>

            <div class="action-item email">
                <div class="action-content">
                    <i class="bi bi-envelope"></i>
                    <h4>Correo Electrónico</h4>
                    <p>Recibe soporte por email</p>
                    <a href="mailto:soporte@blockbookster.com" class="action-button">Enviar Email</a>
                </div>
            </div>
        </div>

        <!-- Help Topics -->
        <div class="help-categories" data-aos="fade-up" data-aos-delay="200">
            <h3>Temas Populares</h3>
            <div class="category-cards">
                <a href="#" class="category-card" data-aos="zoom-in" data-aos-delay="100">
                    <span class="icon"><i class="bi bi-book"></i></span>
                    <h5>Pedidos y Envíos</h5>
                    <ul>
                        <li>Rastrear pedidos</li>
                        <li>Métodos de envío</li>
                        <li>Devoluciones y cambios</li>
                    </ul>
                    <span class="arrow"><i class="bi bi-arrow-right"></i></span>
                </a>

                <a href="#" class="category-card" data-aos="zoom-in" data-aos-delay="200">
                    <span class="icon"><i class="bi bi-wallet2"></i></span>
                    <h5>Pagos y Facturación</h5>
                    <ul>
                        <li>Métodos de pago</li>
                        <li>Facturas</li>
                        <li>Estado de reembolsos</li>
                    </ul>
                    <span class="arrow"><i class="bi bi-arrow-right"></i></span>
                </a>

                <a href="#" class="category-card" data-aos="zoom-in" data-aos-delay="300">
                    <span class="icon"><i class="bi bi-person-gear"></i></span>
                    <h5>Cuenta de Usuario</h5>
                    <ul>
                        <li>Gestión de perfil</li>
                        <li>Restablecer contraseña</li>
                        <li>Preferencias y privacidad</li>
                    </ul>
                    <span class="arrow"><i class="bi bi-arrow-right"></i></span>
                </a>

                <a href="#" class="category-card" data-aos="zoom-in" data-aos-delay="400">
                    <span class="icon"><i class="bi bi-laptop"></i></span>
                    <h5>eBooks y Lectura Digital</h5>
                    <ul>
                        <li>Acceso a eBooks</li>
                        <li>Problemas de descarga</li>
                        <li>Compatibilidad de dispositivos</li>
                    </ul>
                    <span class="arrow"><i class="bi bi-arrow-right"></i></span>
                </a>
            </div>
        </div>

        <!-- Self Help -->
        <div class="self-help" data-aos="fade-up" data-aos-delay="300">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="content-box">
                        <h3>Recursos de Autoayuda</h3>
                        <p class="subtitle">Encuentra respuestas rápidamente con nuestros recursos completos</p>
                        <div class="resource-links">
                            <a href="#" class="resource-link">
                                <i class="bi bi-play-circle"></i>
                                <div class="link-content">
                                    <h6>Tutoriales en Video</h6>
                                    <p>Guías paso a paso para lectores</p>
                                </div>
                            </a>
                            <a href="#" class="resource-link">
                                <i class="bi bi-file-text"></i>
                                <div class="link-content">
                                    <h6>Guías de Usuario</h6>
                                    <p>Documentación detallada</p>
                                </div>
                            </a>
                            <a href="#" class="resource-link">
                                <i class="bi bi-book"></i>
                                <div class="link-content">
                                    <h6>Base de Conocimiento</h6>
                                    <p>Artículos y tutoriales sobre libros y cuentas</p>
                                </div>
                            </a>
                            <a href="#" class="resource-link">
                                <i class="bi bi-tools"></i>
                                <div class="link-content">
                                    <h6>Solución de Problemas</h6>
                                    <p>Errores comunes y cómo solucionarlos</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="faq-section">
                        <h4>Preguntas Comunes</h4>
                        <div class="faq-list">
                            <div class="faq-item">
                                <h3>
                                    ¿Cómo puedo rastrear mi pedido?
                                    <i class="bi bi-plus faq-toggle"></i>
                                </h3>
                                <div class="faq-answer">
                                    <p>Puedes rastrear tus pedidos ingresando tu número de pedido en la sección de seguimiento de tu cuenta.</p>
                                </div>
                            </div>

                            <div class="faq-item">
                                <h3>
                                    ¿Puedo cambiar mi dirección de envío?
                                    <i class="bi bi-plus faq-toggle"></i>
                                </h3>
                                <div class="faq-answer">
                                    <p>Contacta con nuestro soporte lo antes posible para actualizar la dirección antes de que se envíe tu pedido.</p>
                                </div>
                            </div>

                            <div class="faq-item">
                                <h3>
                                    ¿Qué métodos de pago aceptan?
                                    <i class="bi bi-plus faq-toggle"></i>
                                </h3>
                                <div class="faq-answer">
                                    <p>Aceptamos todas las tarjetas de crédito principales y PayPal para que tus compras sean seguras y rápidas.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</section><!-- /Support Section -->

<?php
include_once DIRECTORIO_LAYOUTS . "footer.php";
?>
