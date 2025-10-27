<?php
include_once DIRECTORIO_LAYOUTS . 'head.php';
include_once DIRECTORIO_LAYOUTS . 'header.php';
?>

    <!-- Page Title -->
    <div class="page-title light-background">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <h1 class="mb-2 mb-lg-0">Métodos de Pago</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="/inicio">Inicio</a></li>
                    <li class="current">Métodos de Pago</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <!-- Paymnt Methods Section -->
    <section id="paymnt-methods" class="paymnt-methods section">

        <div class="container" data-aos="fade-up">
            <!-- Header -->
            <div class="payment-header text-center" data-aos="fade-up">
                <h2>Métodos de Pago</h2>
                <p>Elige entre nuestras opciones de pago seguras y convenientes</p>
            </div>

            <!-- Payment Options Grid -->
            <div class="payment-options" data-aos="fade-up" data-aos-delay="100">
                <div class="row g-4">
                    <div class="col-md-6 col-lg-4">
                        <div class="payment-card credit-card">
                            <div class="card-content">
                                <div class="icon-box">
                                    <i class="bi bi-credit-card"></i>
                                </div>
                                <h4>Tarjetas de Crédito / Débito</h4>
                                <p>Visa, Mastercard, American Express</p>
                                <div class="accepted-cards">
                                    <span class="card-icon visa">Visa</span>
                                    <span class="card-icon mastercard">Mastercard</span>
                                    <span class="card-icon amex">Amex</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="payment-card paypal">
                            <div class="card-content">
                                <div class="icon-box">
                                    <i class="bi bi-paypal"></i>
                                </div>
                                <h4>PayPal</h4>
                                <p>Pagos en línea rápidos y seguros</p>
                                <div class="accepted-cards">
                                    <span class="card-icon paypal">PayPal</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="payment-card bank-transfer">
                            <div class="card-content">
                                <div class="icon-box">
                                    <i class="bi bi-bank"></i>
                                </div>
                                <h4>Transferencia Bancaria</h4>
                                <p>Transferencias directas banco a banco</p>
                                <div class="accepted-cards">
                                    <span class="card-icon bank">Banco</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Security Features -->
            <div class="security-features" data-aos="fade-up" data-aos-delay="200">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="security-content">
                            <h3>Pagos Seguros</h3>
                            <p class="subtitle">Tu seguridad es nuestra máxima prioridad</p>
                            <ul class="security-list">
                                <li>
                                    <i class="bi bi-shield-check"></i>
                                    <div class="feature-text">
                                        <h5>Encriptación SSL</h5>
                                        <p>Todas las transacciones están protegidas con encriptación SSL de 256 bits</p>
                                    </div>
                                </li>
                                <li>
                                    <i class="bi bi-lock"></i>
                                    <div class="feature-text">
                                        <h5>Cumplimiento PCI</h5>
                                        <p>Seguimos estrictos estándares de seguridad PCI DSS</p>
                                    </div>
                                </li>
                                <li>
                                    <i class="bi bi-shield-lock"></i>
                                    <div class="feature-text">
                                        <h5>Protección Antifraude</h5>
                                        <p>Sistemas avanzados de detección y prevención de fraude</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="process-steps">
                            <h4>Proceso de Pago</h4>
                            <div class="steps-list">
                                <div class="step">
                                    <div class="step-number">1</div>
                                    <div class="step-content">
                                        <h5>Elegir Método de Pago</h5>
                                        <p>Selecciona tu opción de pago preferida al finalizar la compra</p>
                                    </div>
                                </div>
                                <div class="step">
                                    <div class="step-number">2</div>
                                    <div class="step-content">
                                        <h5>Introducir Datos</h5>
                                        <p>Proporciona tu información de pago de forma segura</p>
                                    </div>
                                </div>
                                <div class="step">
                                    <div class="step-number">3</div>
                                    <div class="step-content">
                                        <h5>Confirmar Pago</h5>
                                        <p>Revisa y confirma los detalles de tu pago</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- FAQ Section -->
            <div class="payment-faqs" data-aos="fade-up" data-aos-delay="300">
                <h3>Preguntas Frecuentes sobre Pagos</h3>
                <div class="faq-grid">
                    <div class="faq-item">
                        <h3>
                            ¿Cuándo se realizará el cargo?
                            <i class="bi bi-chevron-down faq-toggle"></i>
                        </h3>
                        <div class="faq-answer">
                            <p>Tu pago se procesará inmediatamente después de realizar tu pedido de eBooks. El cargo aparecerá en tu extracto bancario en un plazo de 1-2 días hábiles.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <h3>
                            ¿Es seguro guardar mi tarjeta?
                            <i class="bi bi-chevron-down faq-toggle"></i>
                        </h3>
                        <div class="faq-answer">
                            <p>Sí, utilizamos encriptación estándar de la industria para proteger tu información de pago. Los detalles de tu tarjeta nunca se almacenan en nuestros servidores.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <h3>
                            ¿Qué monedas aceptáis?
                            <i class="bi bi-chevron-down faq-toggle"></i>
                        </h3>
                        <div class="faq-answer">
                            <p>Aceptamos pagos en EUR, USD, GBP y muchas otras divisas principales. Las monedas disponibles se mostrarán al finalizar la compra.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Support Section -->
            <div class="payment-support" data-aos="fade-up" data-aos-delay="400">
                <div class="support-content">
                    <i class="bi bi-headset"></i>
                    <h4>¿Necesitas Ayuda?</h4>
                    <p>Nuestro equipo de soporte de pagos está disponible 24/7 para asistirte</p>
                    <div class="support-actions">
                        <a href="#" class="btn-primary">
                            <i class="bi bi-chat-dots"></i>
                            Chat Ahora
                        </a>
                        <span class="divider">o</span>
                        <a href="#" class="contact-email">
                            <i class="bi bi-envelope"></i>
                            pagos.soporte@blockbookster.com
                        </a>
                    </div>
                </div>
            </div>

        </div>

    </section><!-- /Paymnt Methods Section -->
<?php
include_once DIRECTORIO_LAYOUTS . 'footer.php';
?>