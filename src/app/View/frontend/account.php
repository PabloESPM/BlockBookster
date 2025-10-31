<?php
include_once DIRECTORIO_FRONTEND_LAYOUTS . "head.php";
include_once DIRECTORIO_FRONTEND_LAYOUTS . "header.php";
?>

<!-- Page Title -->
<div class="page-title light-background">
    <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Mi Cuenta</h1>
        <nav class="breadcrumbs">
            <ol>
                <li><a href="inicio.php">Inicio</a></li>
                <li class="current">Mi Cuenta</li>
            </ol>
        </nav>
    </div>
</div><!-- End Page Title -->

<!-- Account Section -->
<section id="account" class="account section">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <!-- Mobile Menu Toggle -->
        <div class="mobile-menu d-lg-none mb-4">
            <button class="mobile-menu-toggle" type="button" data-bs-toggle="collapse" data-bs-target="#profileMenu">
                <i class="bi bi-grid"></i>
                <span>Menú</span>
            </button>
        </div>

        <div class="row g-4">
            <!-- Profile Menu -->
            <div class="col-lg-3">
                <div class="profile-menu collapse d-lg-block" id="profileMenu">
                    <!-- User Info -->
                    <div class="user-info" data-aos="fade-right">
                        <div class="user-avatar">
                            <img src="<?=DIRECTORIO_FRONTEND_IMG?>/person/person-f-1.webp" alt="Profile" loading="lazy">
                            <span class="status-badge"><i class="bi bi-shield-check"></i></span>
                        </div>
                        <h4>Sara Martínez</h4>
                        <div class="user-status">
                            <i class="bi bi-award"></i>
                            <span>Miembro Premium</span>
                        </div>
                    </div>

                    <!-- Navigation Menu -->
                    <nav class="menu-nav">
                        <ul class="nav flex-column" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#orders">
                                    <i class="bi bi-box-seam"></i>
                                    <span>Mis Pedidos</span>
                                    <span class="badge">3</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#wishlist">
                                    <i class="bi bi-heart"></i>
                                    <span>Lista de Deseos</span>
                                    <span class="badge">12</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#wallet">
                                    <i class="bi bi-wallet2"></i>
                                    <span>Métodos de Pago</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#reviews">
                                    <i class="bi bi-star"></i>
                                    <span>Mis Reseñas</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#addresses">
                                    <i class="bi bi-geo-alt"></i>
                                    <span>Direcciones</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#settings">
                                    <i class="bi bi-gear"></i>
                                    <span>Configuración</span>
                                </a>
                            </li>
                        </ul>

                        <div class="menu-footer">
                            <a href="#" class="help-link">
                                <i class="bi bi-question-circle"></i>
                                <span>Centro de Ayuda</span>
                            </a>
                            <a href="#" class="logout-link">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Cerrar Sesión</span>
                            </a>
                        </div>
                    </nav>
                </div>
            </div>

            <!-- Content Area -->
            <div class="col-lg-9">
                <div class="content-area">
                    <div class="tab-content">
                        <!-- Orders Tab -->
                        <div class="tab-pane fade show active" id="orders">
                            <div class="section-header" data-aos="fade-up">
                                <h2>Mis Pedidos</h2>
                                <div class="header-actions">
                                    <div class="search-box">
                                        <i class="bi bi-search"></i>
                                        <input type="text" placeholder="Buscar pedidos...">
                                    </div>
                                    <div class="dropdown">
                                        <button class="filter-btn" data-bs-toggle="dropdown">
                                            <i class="bi bi-funnel"></i>
                                            <span>Filtrar</span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Todos los Pedidos</a></li>
                                            <li><a class="dropdown-item" href="#">Procesando</a></li>
                                            <li><a class="dropdown-item" href="#">Disponible</a></li>
                                            <li><a class="dropdown-item" href="#">Completado</a></li>
                                            <li><a class="dropdown-item" href="#">Cancelado</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="orders-grid">
                                <!-- Order Card 1 -->
                                <div class="order-card" data-aos="fade-up" data-aos-delay="100">
                                    <div class="order-header">
                                        <div class="order-id">
                                            <span class="label">ID Pedido:</span>
                                            <span class="value">#PED-2024-1278</span>
                                        </div>
                                        <div class="order-date">20 Feb, 2025</div>
                                    </div>
                                    <div class="order-content">
                                        <div class="product-grid">
                                            <img src="<?=DIRECTORIO_FRONTEND_IMG_PRODUCT?>product-1.webp" alt="Product" loading="lazy">
                                            <img src="<?=DIRECTORIO_FRONTEND_IMG_PRODUCT?>product-2.webp" alt="Product" loading="lazy">
                                            <img src="<?=DIRECTORIO_FRONTEND_IMG_PRODUCT?>product-3.webp" alt="Product" loading="lazy">
                                        </div>
                                        <div class="order-info">
                                            <div class="info-row">
                                                <span>Estado</span>
                                                <span class="status processing">Procesando</span>
                                            </div>
                                            <div class="info-row">
                                                <span>Libros</span>
                                                <span>3 eBooks</span>
                                            </div>
                                            <div class="info-row">
                                                <span>Total</span>
                                                <span class="price">38,97€</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order-footer">
                                        <button type="button" class="btn-track" data-bs-toggle="collapse" data-bs-target="#tracking1" aria-expanded="false">Seguir Pedido</button>
                                        <button type="button" class="btn-details" data-bs-toggle="collapse" data-bs-target="#details1" aria-expanded="false">Ver Detalles</button>
                                    </div>

                                    <!-- Order Tracking -->
                                    <div class="collapse tracking-info" id="tracking1">
                                        <div class="tracking-timeline">
                                            <div class="timeline-item completed">
                                                <div class="timeline-icon">
                                                    <i class="bi bi-check-circle-fill"></i>
                                                </div>
                                                <div class="timeline-content">
                                                    <h5>Pedido Confirmado</h5>
                                                    <p>Tu pedido ha sido recibido y confirmado</p>
                                                    <span class="timeline-date">20 Feb, 2025 - 10:30</span>
                                                </div>
                                            </div>

                                            <div class="timeline-item completed">
                                                <div class="timeline-icon">
                                                    <i class="bi bi-check-circle-fill"></i>
                                                </div>
                                                <div class="timeline-content">
                                                    <h5>Procesando Pago</h5>
                                                    <p>Tu pago está siendo procesado</p>
                                                    <span class="timeline-date">20 Feb, 2025 - 14:45</span>
                                                </div>
                                            </div>

                                            <div class="timeline-item active">
                                                <div class="timeline-icon">
                                                    <i class="bi bi-box-seam"></i>
                                                </div>
                                                <div class="timeline-content">
                                                    <h5>Preparando Descarga</h5>
                                                    <p>Tus eBooks están siendo preparados</p>
                                                    <span class="timeline-date">20 Feb, 2025 - 16:15</span>
                                                </div>
                                            </div>

                                            <div class="timeline-item">
                                                <div class="timeline-icon">
                                                    <i class="bi bi-cloud-download"></i>
                                                </div>
                                                <div class="timeline-content">
                                                    <h5>Disponible para Descarga</h5>
                                                    <p>Disponible en pocas horas</p>
                                                </div>
                                            </div>

                                            <div class="timeline-item">
                                                <div class="timeline-icon">
                                                    <i class="bi bi-check-circle"></i>
                                                </div>
                                                <div class="timeline-content">
                                                    <h5>Completado</h5>
                                                    <p>Pedido completado y listo para leer</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Order Details -->
                                    <div class="collapse order-details" id="details1">
                                        <div class="details-content">
                                            <div class="detail-section">
                                                <h5>Información del Pedido</h5>
                                                <div class="info-grid">
                                                    <div class="info-item">
                                                        <span class="label">Método de Pago</span>
                                                        <span class="value">Tarjeta de Crédito (**** 4589)</span>
                                                    </div>
                                                    <div class="info-item">
                                                        <span class="label">Formato de Descarga</span>
                                                        <span class="value">ePub, PDF, Mobi</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="detail-section">
                                                <h5>Libros (3)</h5>
                                                <div class="order-items">
                                                    <div class="item">
                                                        <img src="<?=DIRECTORIO_FRONTEND_IMG_PRODUCT?>product-1.webp" alt="Product" loading="lazy">
                                                        <div class="item-info">
                                                            <h6>La Sombra del Viento</h6>
                                                            <div class="item-meta">
                                                                <span class="sku">ISBN: 978-84-08-04702-6</span>
                                                                <span class="qty">Cant: 1</span>
                                                            </div>
                                                        </div>
                                                        <div class="item-price">14,99€</div>
                                                    </div>

                                                    <div class="item">
                                                        <img src="<?=DIRECTORIO_FRONTEND_IMG_PRODUCT?>product-2.webp" alt="Product" loading="lazy">
                                                        <div class="item-info">
                                                            <h6>Cien Años de Soledad</h6>
                                                            <div class="item-meta">
                                                                <span class="sku">ISBN: 978-84-376-0494-7</span>
                                                                <span class="qty">Cant: 1</span>
                                                            </div>
                                                        </div>
                                                        <div class="item-price">12,99€</div>
                                                    </div>

                                                    <div class="item">
                                                        <img src="<?=DIRECTORIO_FRONTEND_IMG_PRODUCT?>product-3.webp" alt="Product" loading="lazy">
                                                        <div class="item-info">
                                                            <h6>El Código Da Vinci</h6>
                                                            <div class="item-meta">
                                                                <span class="sku">ISBN: 978-84-08-17173-1</span>
                                                                <span class="qty">Cant: 1</span>
                                                            </div>
                                                        </div>
                                                        <div class="item-price">10,99€</div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="detail-section">
                                                <h5>Desglose de Precios</h5>
                                                <div class="price-breakdown">
                                                    <div class="price-row">
                                                        <span>Subtotal</span>
                                                        <span>38,97€</span>
                                                    </div>
                                                    <div class="price-row">
                                                        <span>Descarga Digital</span>
                                                        <span>0,00€</span>
                                                    </div>
                                                    <div class="price-row">
                                                        <span>IVA (21%)</span>
                                                        <span>8,18€</span>
                                                    </div>
                                                    <div class="price-row total">
                                                        <span>Total</span>
                                                        <span>47,15€</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="detail-section">
                                                <h5>Dirección de Facturación</h5>
                                                <div class="address-info">
                                                    <p>Sara Martínez<br>Calle Principal 123<br>Apt 4B<br>Valencia, 46001<br>España</p>
                                                    <p class="contact">+34 655 123 456</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Order Card 2 -->
                                <div class="order-card" data-aos="fade-up" data-aos-delay="200">
                                    <div class="order-header">
                                        <div class="order-id">
                                            <span class="label">ID Pedido:</span>
                                            <span class="value">#PED-2024-1265</span>
                                        </div>
                                        <div class="order-date">15 Feb, 2025</div>
                                    </div>
                                    <div class="order-content">
                                        <div class="product-grid">
                                            <img src="<?=DIRECTORIO_FRONTEND_IMG_PRODUCT?>product-4.webp" alt="Product" loading="lazy">
                                            <img src="<?=DIRECTORIO_FRONTEND_IMG_PRODUCT?>product-5.webp" alt="Product" loading="lazy">
                                        </div>
                                        <div class="order-info">
                                            <div class="info-row">
                                                <span>Estado</span>
                                                <span class="status shipped">Disponible</span>
                                            </div>
                                            <div class="info-row">
                                                <span>Libros</span>
                                                <span>2 eBooks</span>
                                            </div>
                                            <div class="info-row">
                                                <span>Total</span>
                                                <span class="price">24,98€</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order-footer">
                                        <button type="button" class="btn-track" data-bs-toggle="collapse" data-bs-target="#tracking2" aria-expanded="false">Seguir Pedido</button>
                                        <button type="button" class="btn-details" data-bs-toggle="collapse" data-bs-target="#details2" aria-expanded="false">Ver Detalles</button>
                                    </div>

                                    <!-- Order Tracking -->
                                    <div class="collapse tracking-info" id="tracking2">
                                        <div class="tracking-timeline">
                                            <div class="timeline-item completed">
                                                <div class="timeline-icon">
                                                    <i class="bi bi-check-circle-fill"></i>
                                                </div>
                                                <div class="timeline-content">
                                                    <h5>Pedido Confirmado</h5>
                                                    <p>Tu pedido ha sido recibido y confirmado</p>
                                                    <span class="timeline-date">15 Feb, 2025 - 09:15</span>
                                                </div>
                                            </div>

                                            <div class="timeline-item completed">
                                                <div class="timeline-icon">
                                                    <i class="bi bi-check-circle-fill"></i>
                                                </div>
                                                <div class="timeline-content">
                                                    <h5>Procesando Pago</h5>
                                                    <p>Tu pago ha sido procesado correctamente</p>
                                                    <span class="timeline-date">15 Feb, 2025 - 11:30</span>
                                                </div>
                                            </div>

                                            <div class="timeline-item completed">
                                                <div class="timeline-icon">
                                                    <i class="bi bi-check-circle-fill"></i>
                                                </div>
                                                <div class="timeline-content">
                                                    <h5>Preparando Descarga</h5>
                                                    <p>Tus eBooks han sido preparados</p>
                                                    <span class="timeline-date">15 Feb, 2025 - 14:45</span>
                                                </div>
                                            </div>

                                            <div class="timeline-item active">
                                                <div class="timeline-icon">
                                                    <i class="bi bi-cloud-download"></i>
                                                </div>
                                                <div class="timeline-content">
                                                    <h5>Disponible para Descarga</h5>
                                                    <p>Tus libros están listos para descargar</p>
                                                    <span class="timeline-date">16 Feb, 2025 - 10:20</span>
                                                    <div class="shipping-info">
                                                        <a href="#" class="btn btn-sm btn-primary">Descargar Ahora</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="timeline-item">
                                                <div class="timeline-icon">
                                                    <i class="bi bi-check-circle"></i>
                                                </div>
                                                <div class="timeline-content">
                                                    <h5>Completado</h5>
                                                    <p>Disfruta de tu lectura</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Order Details -->
                                    <div class="collapse order-details" id="details2">
                                        <div class="details-content">
                                            <div class="detail-section">
                                                <h5>Información del Pedido</h5>
                                                <div class="info-grid">
                                                    <div class="info-item">
                                                        <span class="label">Método de Pago</span>
                                                        <span class="value">Tarjeta de Crédito (**** 7821)</span>
                                                    </div>
                                                    <div class="info-item">
                                                        <span class="label">Formato de Descarga</span>
                                                        <span class="value">ePub, PDF</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="detail-section">
                                                <h5>Libros (2)</h5>
                                                <div class="order-items">
                                                    <div class="item">
                                                        <img src="<?=DIRECTORIO_FRONTEND_IMG_PRODUCT?>product-4.webp" alt="Product" loading="lazy">
                                                        <div class="item-info">
                                                            <h6>El Nombre del Viento</h6>
                                                            <div class="item-meta">
                                                                <span class="sku">ISBN: 978-84-01-33779-2</span>
                                                                <span class="qty">Cant: 1</span>
                                                            </div>
                                                        </div>
                                                        <div class="item-price">12,99€</div>
                                                    </div>

                                                    <div class="item">
                                                        <img src="<?=DIRECTORIO_FRONTEND_IMG_PRODUCT?>product-5.webp" alt="Product" loading="lazy">
                                                        <div class="item-info">
                                                            <h6>Los Pilares de la Tierra</h6>
                                                            <div class="item-meta">
                                                                <span class="sku">ISBN: 978-84-9759-687-9</span>
                                                                <span class="qty">Cant: 1</span>
                                                            </div>
                                                        </div>
                                                        <div class="item-price">11,99€</div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="detail-section">
                                                <h5>Desglose de Precios</h5>
                                                <div class="price-breakdown">
                                                    <div class="price-row">
                                                        <span>Subtotal</span>
                                                        <span>24,98€</span>
                                                    </div>
                                                    <div class="price-row">
                                                        <span>Descarga Digital</span>
                                                        <span>0,00€</span>
                                                    </div>
                                                    <div class="price-row">
                                                        <span>IVA (21%)</span>
                                                        <span>5,25€</span>
                                                    </div>
                                                    <div class="price-row total">
                                                        <span>Total</span>
                                                        <span>30,23€</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="detail-section">
                                                <h5>Dirección de Facturación</h5>
                                                <div class="address-info">
                                                    <p>Sara Martínez<br>Calle Principal 123<br>Apt 4B<br>Valencia, 46001<br>España</p>
                                                    <p class="contact">+34 655 123 456</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Order Card 3 -->
                                <div class="order-card" data-aos="fade-up" data-aos-delay="300">
                                    <div class="order-header">
                                        <div class="order-id">
                                            <span class="label">ID Pedido:</span>
                                            <span class="value">#PED-2024-1252</span>
                                        </div>
                                        <div class="order-date">10 Feb, 2025</div>
                                    </div>
                                    <div class="order-content">
                                        <div class="product-grid">
                                            <img src="<?=DIRECTORIO_FRONTEND_IMG_PRODUCT?>product-6.webp" alt="Product" loading="lazy">
                                        </div>
                                        <div class="order-info">
                                            <div class="info-row">
                                                <span>Estado</span>
                                                <span class="status delivered">Completado</span>
                                            </div>
                                            <div class="info-row">
                                                <span>Libros</span>
                                                <span>1 eBook</span>
                                            </div>
                                            <div class="info-row">
                                                <span>Total</span>
                                                <span class="price">9,99€</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order-footer">
                                        <button type="button" class="btn-review">Escribir Reseña</button>
                                        <button type="button" class="btn-details">Ver Detalles</button>
                                    </div>
                                </div>

                                <!-- Order Card 4 -->
                                <div class="order-card" data-aos="fade-up" data-aos-delay="400">
                                    <div class="order-header">
                                        <div class="order-id">
                                            <span class="label">ID Pedido:</span>
                                            <span class="value">#PED-2024-1245</span>
                                        </div>
                                        <div class="order-date">5 Feb, 2025</div>
                                    </div>
                                    <div class="order-content">
                                        <div class="product-grid">
                                            <img src="<?=DIRECTORIO_FRONTEND_IMG_PRODUCT?>product-7.webp" alt="Product" loading="lazy">
                                            <img src="<?=DIRECTORIO_FRONTEND_IMG_PRODUCT?>product-8.webp" alt="Product" loading="lazy">
                                            <img src="<?=DIRECTORIO_FRONTEND_IMG_PRODUCT?>product-9.webp" alt="Product" loading="lazy">
                                            <span class="more-items">+2</span>
                                        </div>
                                        <div class="order-info">
                                            <div class="info-row">
                                                <span>Estado</span>
                                                <span class="status cancelled">Cancelado</span>
                                            </div>
                                            <div class="info-row">
                                                <span>Libros</span>
                                                <span>5 eBooks</span>
                                            </div>
                                            <div class="info-row">
                                                <span>Total</span>
                                                <span class="price">59,95€</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order-footer">
                                        <button type="button" class="btn-reorder">Volver a Pedir</button>
                                        <button type="button" class="btn-details">Ver Detalles</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Pagination -->
                            <div class="pagination-wrapper" data-aos="fade-up">
                                <button type="button" class="btn-prev" disabled="">
                                    <i class="bi bi-chevron-left"></i>
                                </button>
                                <div class="page-numbers">
                                    <button type="button" class="active">1</button>
                                    <button type="button">2</button>
                                    <button type="button">3</button>
                                    <span>...</span>
                                    <button type="button">12</button>
                                </div>
                                <button type="button" class="btn-next">
                                    <i class="bi bi-chevron-right"></i>
                                </button>
                            </div>
                        </div>

                        <!-- Wishlist Tab -->
                        <div class="tab-pane fade" id="wishlist">
                            <div class="section-header" data-aos="fade-up">
                                <h2>Mi Lista de Deseos</h2>
                                <div class="header-actions">
                                    <button type="button" class="btn-add-all">Añadir Todo al Carrito</button>
                                </div>
                            </div>

                            <div class="wishlist-grid">
                                <!-- Wishlist Item 1 -->
                                <div class="wishlist-card" data-aos="fade-up" data-aos-delay="100">
                                    <div class="wishlist-image">
                                        <img src="<?=DIRECTORIO_FRONTEND_IMG_PRODUCT?>product-1.webp" alt="Product" loading="lazy">
                                        <button class="btn-remove" type="button" aria-label="Eliminar de la lista">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                        <div class="sale-badge">-20%</div>
                                    </div>
                                    <div class="wishlist-content">
                                        <h4>1984</h4>
                                        <div class="product-meta">
                                            <div class="rating">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-half"></i>
                                                <span>(4.5)</span>
                                            </div>
                                            <div class="price">
                                                <span class="current">7,99€</span>
                                                <span class="original">9,99€</span>
                                            </div>
                                        </div>
                                        <button type="button" class="btn-add-cart">Añadir al Carrito</button>
                                    </div>
                                </div>

                                <!-- Wishlist Item 2 -->
                                <div class="wishlist-card" data-aos="fade-up" data-aos-delay="200">
                                    <div class="wishlist-image">
                                        <img src="<?=DIRECTORIO_FRONTEND_IMG_PRODUCT?>product-2.webp" alt="Product" loading="lazy">
                                        <button class="btn-remove" type="button" aria-label="Eliminar de la lista">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </div>
                                    <div class="wishlist-content">
                                        <h4>El Señor de los Anillos</h4>
                                        <div class="product-meta">
                                            <div class="rating">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star"></i>
                                                <span>(4.0)</span>
                                            </div>
                                            <div class="price">
                                                <span class="current">16,99€</span>
                                            </div>
                                        </div>
                                        <button type="button" class="btn-add-cart">Añadir al Carrito</button>
                                    </div>
                                </div>

                                <!-- Wishlist Item 3 -->
                                <div class="wishlist-card" data-aos="fade-up" data-aos-delay="300">
                                    <div class="wishlist-image">
                                        <img src="<?=DIRECTORIO_FRONTEND_IMG_PRODUCT?>product-3.webp" alt="Product" loading="lazy">
                                        <button class="btn-remove" type="button" aria-label="Eliminar de la lista">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                        <div class="out-of-stock-badge">Agotado</div>
                                    </div>
                                    <div class="wishlist-content">
                                        <h4>Harry Potter (Colección)</h4>
                                        <div class="product-meta">
                                            <div class="rating">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <span>(5.0)</span>
                                            </div>
                                            <div class="price">
                                                <span class="current">39,99€</span>
                                            </div>
                                        </div>
                                        <button type="button" class="btn-notify">Notificar Disponibilidad</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Payment Methods Tab -->
                        <div class="tab-pane fade" id="wallet">
                            <div class="section-header" data-aos="fade-up">
                                <h2>Métodos de Pago</h2>
                                <div class="header-actions">
                                    <button type="button" class="btn-add-new">
                                        <i class="bi bi-plus-lg"></i>
                                        Añadir Nueva Tarjeta
                                    </button>
                                </div>
                            </div>

                            <div class="payment-cards-grid">
                                <!-- Payment Card 1 -->
                                <div class="payment-card default" data-aos="fade-up" data-aos-delay="100">
                                    <div class="card-header">
                                        <i class="bi bi-credit-card"></i>
                                        <div class="card-badges">
                                            <span class="default-badge">Predeterminada</span>
                                            <span class="card-type">Visa</span>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-number">•••• •••• •••• 4589</div>
                                        <div class="card-info">
                                            <span>Caduca 09/2026</span>
                                        </div>
                                    </div>
                                    <div class="card-actions">
                                        <button type="button" class="btn-edit">
                                            <i class="bi bi-pencil"></i>
                                            Editar
                                        </button>
                                        <button type="button" class="btn-remove">
                                            <i class="bi bi-trash"></i>
                                            Eliminar
                                        </button>
                                    </div>
                                </div>

                                <!-- Payment Card 2 -->
                                <div class="payment-card" data-aos="fade-up" data-aos-delay="200">
                                    <div class="card-header">
                                        <i class="bi bi-credit-card"></i>
                                        <div class="card-badges">
                                            <span class="card-type">Mastercard</span>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-number">•••• •••• •••• 7821</div>
                                        <div class="card-info">
                                            <span>Caduca 05/2025</span>
                                        </div>
                                    </div>
                                    <div class="card-actions">
                                        <button type="button" class="btn-edit">
                                            <i class="bi bi-pencil"></i>
                                            Editar
                                        </button>
                                        <button type="button" class="btn-remove">
                                            <i class="bi bi-trash"></i>
                                            Eliminar
                                        </button>
                                        <button type="button" class="btn-make-default">Hacer Predeterminada</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Reviews Tab -->
                        <div class="tab-pane fade" id="reviews">
                            <div class="section-header" data-aos="fade-up">
                                <h2>Mis Reseñas</h2>
                                <div class="header-actions">
                                    <div class="dropdown">
                                        <button class="filter-btn" data-bs-toggle="dropdown">
                                            <i class="bi bi-funnel"></i>
                                            <span>Ordenar por: Recientes</span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Recientes</a></li>
                                            <li><a class="dropdown-item" href="#">Mayor Valoración</a></li>
                                            <li><a class="dropdown-item" href="#">Menor Valoración</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="reviews-grid">
                                <!-- Review Card 1 -->
                                <div class="review-card" data-aos="fade-up" data-aos-delay="100">
                                    <div class="review-header">
                                        <img src="<?=DIRECTORIO_FRONTEND_IMG_PRODUCT?>product-1.webp" alt="Product" class="product-image" loading="lazy">
                                        <div class="review-meta">
                                            <h4>La Sombra del Viento</h4>
                                            <div class="rating">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <span>(5.0)</span>
                                            </div>
                                            <div class="review-date">Reseñado el 15 Feb, 2025</div>
                                        </div>
                                    </div>
                                    <div class="review-content">
                                        <p>Una obra maestra de la literatura contemporánea. La narrativa es cautivadora y los personajes están magistralmente desarrollados. Totalmente recomendable para los amantes de las novelas históricas.</p>
                                    </div>
                                    <div class="review-footer">
                                        <button type="button" class="btn-edit">Editar Reseña</button>
                                        <button type="button" class="btn-delete">Eliminar</button>
                                    </div>
                                </div>

                                <!-- Review Card 2 -->
                                <div class="review-card" data-aos="fade-up" data-aos-delay="200">
                                    <div class="review-header">
                                        <img src="<?=DIRECTORIO_FRONTEND_IMG_PRODUCT?>product-2.webp" alt="Product" class="product-image" loading="lazy">
                                        <div class="review-meta">
                                            <h4>Cien Años de Soledad</h4>
                                            <div class="rating">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star"></i>
                                                <span>(4.0)</span>
                                            </div>
                                            <div class="review-date">Reseñado el 10 Feb, 2025</div>
                                        </div>
                                    </div>
                                    <div class="review-content">
                                        <p>Un clásico imprescindible de García Márquez. El realismo mágico está perfectamente plasmado. Requiere concentración pero merece totalmente la pena.</p>
                                    </div>
                                    <div class="review-footer">
                                        <button type="button" class="btn-edit">Editar Reseña</button>
                                        <button type="button" class="btn-delete">Eliminar</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Addresses Tab -->
                        <div class="tab-pane fade" id="addresses">
                            <div class="section-header" data-aos="fade-up">
                                <h2>Mis Direcciones</h2>
                                <div class="header-actions">
                                    <button type="button" class="btn-add-new">
                                        <in class="bi bi-plus-lg"></in>
                                        Añadir Nueva Dirección
                                    </button>
                                </div>
                            </div>

                            <div class="addresses-grid">
                                <!-- Address Card 1 -->
                                <div class="address-card default" data-aos="fade-up" data-aos-delay="100">
                                    <div class="card-header">
                                        <h4>Casa</h4>
                                        <span class="default-badge">Predeterminada</span>
                                    </div>
                                    <div class="card-body">
                                        <p class="address-text">Calle Principal 123<br>Apt 4B<br>Valencia, 46001<br>España</p>
                                        <div class="contact-info">
                                            <div><i class="bi bi-person"></i> Sara Martínez</div>
                                            <div><i class="bi bi-telephone"></i> +34 655 123 456</div>
                                        </div>
                                    </div>
                                    <div class="card-actions">
                                        <button type="button" class="btn-edit">
                                            <i class="bi bi-pencil"></i>
                                            Editar
                                        </button>
                                        <button type="button" class="btn-remove">
                                            <i class="bi bi-trash"></i>
                                            Eliminar
                                        </button>
                                    </div>
                                </div>

                                <!-- Address Card 2 -->
                                <div class="address-card" data-aos="fade-up" data-aos-delay="200">
                                    <div class="card-header">
                                        <h4>Oficina</h4>
                                    </div>
                                    <div class="card-body">
                                        <p class="address-text">Avenida de Negocios 456<br>Suite 200<br>Madrid, 28001<br>España</p>
                                        <div class="contact-info">
                                            <div><i class="bi bi-person"></i> Sara Martínez</div>
                                            <div><i class="bi bi-telephone"></i> +34 655 987 654</div>
                                        </div>
                                    </div>
                                    <div class="card-actions">
                                        <button type="button" class="btn-edit">
                                            <i class="bi bi-pencil"></i>
                                            Editar
                                        </button>
                                        <button type="button" class="btn-remove">
                                            <i class="bi bi-trash"></i>
                                            Eliminar
                                        </button>
                                        <button type="button" class="btn-make-default">Hacer Predeterminada</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Settings Tab -->
                        <div class="tab-pane fade" id="settings">
                            <div class="section-header" data-aos="fade-up">
                                <h2>Configuración de la Cuenta</h2>
                            </div>

                            <div class="settings-content">
                                <!-- Personal Information -->
                                <div class="settings-section" data-aos="fade-up">
                                    <h3>Información Personal</h3>
                                    <form class="php-email-form settings-form">
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <label for="firstName" class="form-label">Nombre</label>
                                                <input type="text" class="form-control" id="firstName" value="Sara" required="">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="lastName" class="form-label">Apellidos</label>
                                                <input type="text" class="form-control" id="lastName" value="Martínez" required="">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="email" class="form-label">Correo Electrónico</label>
                                                <input type="email" class="form-control" id="email" value="sara@ejemplo.com" required="">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="phone" class="form-label">Teléfono</label>
                                                <input type="tel" class="form-control" id="phone" value="+34 655 123 456">
                                            </div>
                                        </div>

                                        <div class="form-buttons">
                                            <button type="submit" class="btn-save">Guardar Cambios</button>
                                        </div>

                                        <div class="loading">Cargando</div>
                                        <div class="error-message"></div>
                                        <div class="sent-message">¡Tus cambios han sido guardados exitosamente!</div>
                                    </form>
                                </div>

                                <!-- Email Preferences -->
                                <div class="settings-section" data-aos="fade-up" data-aos-delay="100">
                                    <h3>Preferencias de Email</h3>
                                    <div class="preferences-list">
                                        <div class="preference-item">
                                            <div class="preference-info">
                                                <h4>Actualizaciones de Pedidos</h4>
                                                <p>Recibe notificaciones sobre el estado de tus pedidos</p>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="orderUpdates" checked="">
                                            </div>
                                        </div>

                                        <div class="preference-item">
                                            <div class="preference-info">
                                                <h4>Promociones</h4>
                                                <p>Recibe emails sobre nuevas promociones y ofertas</p>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="promotions">
                                            </div>
                                        </div>

                                        <div class="preference-item">
                                            <div class="preference-info">
                                                <h4>Boletín de Noticias</h4>
                                                <p>Suscríbete a nuestro boletín semanal</p>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="newsletter" checked="">
                                            </div>
                                        </div>

                                        <div class="preference-item">
                                            <div class="preference-info">
                                                <h4>Recomendaciones de Libros</h4>
                                                <p>Recibe sugerencias personalizadas basadas en tus lecturas</p>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="recommendations" checked="">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Security Settings -->
                                <div class="settings-section" data-aos="fade-up" data-aos-delay="200">
                                    <h3>Seguridad</h3>
                                    <form class="php-email-form settings-form">
                                        <div class="row g-3">
                                            <div class="col-md-12">
                                                <label for="currentPassword" class="form-label">Contraseña Actual</label>
                                                <input type="password" class="form-control" id="currentPassword" required="">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="newPassword" class="form-label">Nueva Contraseña</label>
                                                <input type="password" class="form-control" id="newPassword" required="">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="confirmPassword" class="form-label">Confirmar Contraseña</label>
                                                <input type="password" class="form-control" id="confirmPassword" required="">
                                            </div>
                                        </div>

                                        <div class="form-buttons">
                                            <button type="submit" class="btn-save">Actualizar Contraseña</button>
                                        </div>

                                        <div class="loading">Cargando</div>
                                        <div class="error-message"></div>
                                        <div class="sent-message">¡Tu contraseña ha sido actualizada exitosamente!</div>
                                    </form>
                                </div>

                                <!-- Delete Account -->
                                <div class="settings-section danger-zone" data-aos="fade-up" data-aos-delay="300">
                                    <h3>Eliminar Cuenta</h3>
                                    <div class="danger-zone-content">
                                        <p>Una vez que elimines tu cuenta, no hay vuelta atrás. Por favor, está seguro.</p>
                                        <button type="button" class="btn-danger">Eliminar Cuenta</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</section><!-- /Account Section -->

<?php
include_once DIRECTORIO_FRONTEND_LAYOUTS . "footer.php";
?>