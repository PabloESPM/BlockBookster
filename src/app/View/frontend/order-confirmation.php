<?php
include_once DIRECTORIO_FRONTEND_LAYOUTS . "head.php";
include_once DIRECTORIO_FRONTEND_LAYOUTS . "header.php";
?>

    <!-- Page Title -->
    <div class="page-title light-background">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <h1 class="mb-2 mb-lg-0">Confirmación de Pedido</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="/inicio">Inicio</a></li>
                    <li class="current">Confirmación de Pedido</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <!-- Order Confirmation Section -->
    <section id="order-confirmation" class="order-confirmation section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="order-confirmation-3">
                <div class="row g-0">
                    <!-- Left sidebar with order summary -->
                    <div class="col-lg-4 sidebar" data-aos="fade-right">
                        <div class="sidebar-content">
                            <!-- Success animation -->
                            <div class="success-animation">
                                <i class="bi bi-check-lg"></i>
                            </div>

                            <!-- Order number and date -->
                            <div class="order-id">
                                <h4>Pedido #PED-935721</h4>
                                <div class="order-date">2 de Marzo de 2025</div>
                            </div>

                            <!-- Order progress stepper -->
                            <div class="order-progress">
                                <div class="stepper-container">
                                    <div class="stepper-item completed">
                                        <div class="stepper-icon">1</div>
                                        <div class="stepper-text">Confirmado</div>
                                    </div>
                                    <div class="stepper-item current">
                                        <div class="stepper-icon">2</div>
                                        <div class="stepper-text">Procesando</div>
                                    </div>
                                    <div class="stepper-item">
                                        <div class="stepper-icon">3</div>
                                        <div class="stepper-text">Disponible</div>
                                    </div>
                                    <div class="stepper-item">
                                        <div class="stepper-icon">4</div>
                                        <div class="stepper-text">Completado</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Price summary -->
                            <div class="price-summary">
                                <h5>Resumen del Pedido</h5>
                                <ul class="summary-list">
                                    <li>
                                        <span>Subtotal</span>
                                        <span>32,97€</span>
                                    </li>
                                    <li>
                                        <span>Descarga Digital</span>
                                        <span>0,00€</span>
                                    </li>
                                    <li>
                                        <span>IVA (21%)</span>
                                        <span>6,92€</span>
                                    </li>
                                    <li class="total">
                                        <span>Total</span>
                                        <span>39,89€</span>
                                    </li>
                                </ul>
                            </div>

                            <!-- Delivery info -->
                            <div class="delivery-info">
                                <h5>Información de Descarga</h5>
                                <p class="delivery-estimate">
                                    <i class="bi bi-calendar-check"></i>
                                    <span>Disponible: Inmediatamente</span>
                                </p>
                                <p class="shipping-method">
                                    <i class="bi bi-cloud-download"></i>
                                    <span>Descarga Instantánea</span>
                                </p>
                            </div>

                            <!-- Customer service -->
                            <div class="customer-service">
                                <h5>¿Necesitas Ayuda?</h5>
                                <a href="#" class="help-link">
                                    <i class="bi bi-chat-dots"></i>
                                    <span>Contactar Soporte</span>
                                </a>
                                <a href="#" class="help-link">
                                    <i class="bi bi-question-circle"></i>
                                    <span>Preguntas Frecuentes</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Main content area -->
                    <div class="col-lg-8 main-content" data-aos="fade-in">
                        <!-- Thank you message -->
                        <div class="thank-you-message">
                            <h1>¡Gracias por tu pedido!</h1>
                            <p>Hemos recibido tu pedido y comenzaremos a procesarlo de inmediato.
                                Te enviaremos actualizaciones por correo electrónico a medida que tu pedido avance.</p>
                        </div>

                        <!-- Shipping details -->
                        <div class="details-card" data-aos="fade-up">
                            <div class="card-header" data-toggle="collapse">
                                <h3>
                                    <i class="bi bi-geo-alt"></i>
                                    Detalles de Facturación
                                </h3>
                                <i class="bi bi-chevron-down toggle-icon"></i>
                            </div>
                            <div class="card-body">
                                <div class="row g-4">
                                    <div class="col-md-6">
                                        <div class="detail-group">
                                            <label>Facturar A</label>
                                            <address>
                                                Miguel Thompson<br>
                                                Calle Oakwood 789<br>
                                                Valencia, 46001<br>
                                                España
                                            </address>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="detail-group">
                                            <label>Contacto</label>
                                            <div class="contact-info">
                                                <p><i class="bi bi-envelope"></i> miguel.t@ejemplo.com</p>
                                                <p><i class="bi bi-telephone"></i> +34 655 123 456</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Payment details -->
                        <div class="details-card" data-aos="fade-up">
                            <div class="card-header" data-toggle="collapse">
                                <h3>
                                    <i class="bi bi-credit-card"></i>
                                    Detalles de Pago
                                </h3>
                                <i class="bi bi-chevron-down toggle-icon"></i>
                            </div>
                            <div class="card-body">
                                <div class="payment-method">
                                    <div class="payment-icon">
                                        <i class="bi bi-credit-card-2-front"></i>
                                    </div>
                                    <div class="payment-details">
                                        <div class="card-type">Visa</div>
                                        <div class="card-number">•••• •••• •••• 3782</div>
                                    </div>
                                </div>
                                <div class="billing-address mt-4">
                                    <h5>Dirección de Facturación</h5>
                                    <p>Misma que los datos de contacto</p>
                                </div>
                            </div>
                        </div>

                        <!-- Order items -->
                        <div class="details-card" data-aos="fade-up" "="">
                        <div class=" card-header" data-toggle="collapse">
                            <h3>
                                <i class="bi bi-bag-check"></i>
                                Artículos del Pedido
                            </h3>
                            <i class="bi bi-chevron-down toggle-icon"></i>
                        </div>
                        <div class="card-body">
                            <div class="item">
                                <div class="item-image">
                                    <img src="<?=DIRECTORIO_FRONTEND_IMG_PRODUCT?>product-7.webp" alt="Product" loading="lazy">
                                </div>
                                <div class="item-details">
                                    <h4>La Sombra del Viento</h4>
                                    <div class="item-meta">
                                        <span>Formato: ePub</span>
                                    </div>
                                    <div class="item-price">
                                        <span class="quantity">1 ×</span>
                                        <span class="price">14,99€</span>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="item-image">
                                    <img src="app/View/frontend/img/product/product-9.webp" alt="Product" loading="lazy">
                                </div>
                                <div class="item-details">
                                    <h4>Cien Años de Soledad</h4>
                                    <div class="item-meta">
                                        <span>Formato: PDF</span>
                                        <span>Autor: Gabriel García Márquez</span>
                                    </div>
                                    <div class="item-price">
                                        <span class="quantity">1 ×</span>
                                        <span class="price">12,99€</span>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="item-image">
                                    <img src="<?=DIRECTORIO_FRONTEND_IMG_PRODUCT?>product-8.webp" alt="Product" loading="lazy">
                                </div>
                                <div class="item-details">
                                    <h4>El Código Da Vinci</h4>
                                    <div class="item-meta">
                                        <span>Formato: Mobi</span>
                                        <span>Autor: Dan Brown</span>
                                    </div>
                                    <div class="item-price">
                                        <span class="quantity">1 ×</span>
                                        <span class="price">9,99€</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Action buttons -->
                    <div class="action-area" data-aos="fade-up">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <a href="#" class="btn btn-back">
                                    <i class="bi bi-arrow-left"></i>
                                    Volver a la Tienda
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="#" class="btn btn-account">
                                    <span>Ver en Mi Biblioteca</span>
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Recommended products -->
                    <div class="recommended" data-aos="fade-up">
                        <h3>También Te Puede Interesar</h3>
                        <div class="row g-4">
                            <div class="col-6 col-md-4">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="<?=DIRECTORIO_FRONTEND_IMG_PRODUCT?>product-11.webp" alt="Product" loading="lazy">
                                    </div>
                                    <h5>El Juego del Ángel</h5>
                                    <div class="product-price">11,99€</div>
                                    <a href="#" class="btn btn-add-cart">
                                        <i class="bi bi-plus"></i>
                                        Añadir al Carrito
                                    </a>
                                </div>
                            </div>
                            <div class="col-6 col-md-4">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="<?=DIRECTORIO_FRONTEND_IMG_PRODUCT?>product-10.webp" alt="Product" loading="lazy">
                                    </div>
                                    <h5>1984</h5>
                                    <div class="product-price">8,99€</div>
                                    <a href="#" class="btn btn-add-cart">
                                        <i class="bi bi-plus"></i>
                                        Añadir al Carrito
                                    </a>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 d-none d-md-block">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="<?=DIRECTORIO_FRONTEND_IMG_PRODUCT?>product-8.webp" alt="Product" loading="lazy">
                                    </div>
                                    <h5>El Alquimista</h5>
                                    <div class="product-price">10,99€</div>
                                    <a href="#" class="btn btn-add-cart">
                                        <i class="bi bi-plus"></i>
                                        Añadir al Carrito
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>

    </section><!-- /Order Confirmation Section -->
<?php
include_once DIRECTORIO_FRONTEND_LAYOUTS . 'footer.php';
?>