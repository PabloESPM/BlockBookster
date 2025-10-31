<?php
include_once DIRECTORIO_FRONTEND_LAYOUTS . "head.php";
include_once DIRECTORIO_FRONTEND_LAYOUTS . "header.php";
?>

    <!-- Page Title -->
    <div class="page-title light-background">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <h1 class="mb-2 mb-lg-0">Carrito</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="/inicio">Inicio</a></li>
                    <li class="current">Carrito</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <!-- Cart Section -->
    <section id="cart" class="cart section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row">
                <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
                    <div class="cart-items">
                        <div class="cart-header d-none d-lg-block">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <h5>Libro</h5>
                                </div>
                                <div class="col-lg-2 text-center">
                                    <h5>Precio</h5>
                                </div>
                                <div class="col-lg-2 text-center">
                                    <h5>Cantidad</h5>
                                </div>
                                <div class="col-lg-2 text-center">
                                    <h5>Total</h5>
                                </div>
                            </div>
                        </div>

                        <!-- Cart Item 1 -->
                        <div class="cart-item">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-12 mt-3 mt-lg-0 mb-lg-0 mb-3">
                                    <div class="product-info d-flex align-items-center">
                                        <div class="product-image">
                                            <img src="app/View/frontend/img/product/product-1.webp" alt="Product" class="img-fluid" loading="lazy">
                                        </div>
                                        <div class="product-details">
                                            <h6 class="product-title">El Arte de la Guerra Digital</h6>
                                            <div class="product-meta">
                                                <span class="product-color">Formato: ePub</span>
                                                <span class="product-size">Autor: Sun Tzu Moderno</span>
                                            </div>
                                            <button class="remove-item" type="button">
                                                <i class="bi bi-trash"></i> Eliminar
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-12 mt-3 mt-lg-0 text-center">
                                    <div class="price-tag">
                                        <span class="current-price">12,99€</span>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-12 mt-3 mt-lg-0 text-center">
                                    <div class="quantity-selector">
                                        <button class="quantity-btn decrease">
                                            <i class="bi bi-dash"></i>
                                        </button>
                                        <input type="number" class="quantity-input" value="1" min="1" max="10">
                                        <button class="quantity-btn increase">
                                            <i class="bi bi-plus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-12 mt-3 mt-lg-0 text-center">
                                    <div class="item-total">
                                        <span>12,99€</span>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Cart Item -->

                        <!-- Cart Item 2 -->
                        <div class="cart-item">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-12 mt-3 mt-lg-0 mb-lg-0 mb-3">
                                    <div class="product-info d-flex align-items-center">
                                        <div class="product-image">
                                            <img src="app/View/frontend/img/product/product-3.webp" alt="Product" class="img-fluid" loading="lazy">
                                        </div>
                                        <div class="product-details">
                                            <h6 class="product-title">Misterio en la Biblioteca</h6>
                                            <div class="product-meta">
                                                <span class="product-color">Formato: PDF</span>
                                                <span class="product-size">Autor: María Rodríguez</span>
                                            </div>
                                            <button class="remove-item" type="button">
                                                <i class="bi bi-trash"></i> Eliminar
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-12 mt-3 mt-lg-0 text-center">
                                    <div class="price-tag">
                                        <span class="current-price">8,99€</span>
                                        <span class="original-price">11,99€</span>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-12 mt-3 mt-lg-0 text-center">
                                    <div class="quantity-selector">
                                        <button class="quantity-btn decrease">
                                            <i class="bi bi-dash"></i>
                                        </button>
                                        <input type="number" class="quantity-input" value="2" min="1" max="10">
                                        <button class="quantity-btn increase">
                                            <i class="bi bi-plus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-12 mt-3 mt-lg-0 text-center">
                                    <div class="item-total">
                                        <span>17,98€</span>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Cart Item -->

                        <!-- Cart Item 3 -->
                        <div class="cart-item">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-12 mt-3 mt-lg-0 mb-lg-0 mb-3">
                                    <div class="product-info d-flex align-items-center">
                                        <div class="product-image">
                                            <img src="app/View/frontend/img/product/product-5.webp" alt="Product" class="img-fluid" loading="lazy">
                                        </div>
                                        <div class="product-details">
                                            <h6 class="product-title">Cocina Mediterránea Moderna</h6>
                                            <div class="product-meta">
                                                <span class="product-color">Formato: Mobi</span>
                                                <span class="product-size">Autor: Chef Antonio García</span>
                                            </div>
                                            <button class="remove-item" type="button">
                                                <i class="bi bi-trash"></i> Eliminar
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-12 mt-3 mt-lg-0 text-center">
                                    <div class="price-tag">
                                        <span class="current-price">6,99€</span>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-12 mt-3 mt-lg-0 text-center">
                                    <div class="quantity-selector">
                                        <button class="quantity-btn decrease">
                                            <i class="bi bi-dash"></i>
                                        </button>
                                        <input type="number" class="quantity-input" value="1" min="1" max="10">
                                        <button class="quantity-btn increase">
                                            <i class="bi bi-plus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-12 mt-3 mt-lg-0 text-center">
                                    <div class="item-total">
                                        <span>6,99€</span>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Cart Item -->

                        <div class="cart-actions">
                            <div class="row">
                                <div class="col-lg-6 mb-3 mb-lg-0">
                                    <div class="coupon-form">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Código de descuento">
                                            <button class="btn btn-outline-accent" type="button">Aplicar Cupón</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 text-md-end">
                                    <button class="btn btn-outline-heading me-2">
                                        <i class="bi bi-arrow-clockwise"></i> Actualizar Carrito
                                    </button>
                                    <button class="btn btn-outline-remove">
                                        <i class="bi bi-trash"></i> Vaciar Carrito
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
                    <div class="cart-summary">
                        <h4 class="summary-title">Resumen del Pedido</h4>

                        <div class="summary-item">
                            <span class="summary-label">Subtotal</span>
                            <span class="summary-value">37,96€</span>
                        </div>

                        <div class="summary-item shipping-item">
                            <span class="summary-label">Descarga</span>
                            <div class="shipping-options">
                                <div class="form-check text-end">
                                    <input class="form-check-input" type="radio" name="shipping" id="standard" checked="">
                                    <label class="form-check-label" for="standard">
                                        Descarga Instantánea - Gratis
                                    </label>
                                </div>
                                <div class="form-check text-end">
                                    <input class="form-check-input" type="radio" name="shipping" id="express">
                                    <label class="form-check-label" for="express">
                                        Acceso Premium - 2,99€/mes
                                    </label>
                                </div>
                                <div class="form-check text-end">
                                    <input class="form-check-input" type="radio" name="shipping" id="free">
                                    <label class="form-check-label" for="free">
                                        Almacenamiento en la Nube Ilimitado
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="summary-item">
                            <span class="summary-label">IVA (21%)</span>
                            <span class="summary-value">7,97€</span>
                        </div>

                        <div class="summary-item discount">
                            <span class="summary-label">Descuento</span>
                            <span class="summary-value">-0,00€</span>
                        </div>

                        <div class="summary-total">
                            <span class="summary-label">Total</span>
                            <span class="summary-value">45,93€</span>
                        </div>

                        <div class="checkout-button">
                            <a href="/checkout" class="btn btn-accent w-100">
                                Proceder al Pago <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>

                        <div class="continue-shopping">
                            <a href="/category" class="btn btn-link w-100">
                                <i class="bi bi-arrow-left"></i> Seguir Comprando
                            </a>
                        </div>

                        <div class="payment-methods">
                            <p class="payment-title">Aceptamos</p>
                            <div class="payment-icons">
                                <i class="bi bi-credit-card"></i>
                                <i class="bi bi-paypal"></i>
                                <i class="bi bi-wallet2"></i>
                                <i class="bi bi-bank"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section><!-- /Cart Section -->
<?php
include_once DIRECTORIO_FRONTEND_LAYOUTS . "footer.php";
?>