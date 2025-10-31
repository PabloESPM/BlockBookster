<?php
include_once DIRECTORIO_FRONTEND_LAYOUTS . "head.php";
include_once DIRECTORIO_FRONTEND_LAYOUTS . "header.php";
?>

<!-- Page Title -->
<div class="page-title light-background">
    <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Finalizar compra</h1>
        <nav class="breadcrumbs">
            <ol>
                <li><a href="/inicio">Inicio</a></li>
                <li class="current">Finalizar compra</li>
            </ol>
        </nav>
    </div>
</div><!-- End Page Title -->

<!-- Checkout Section -->
<section id="checkout" class="checkout section">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">
            <div class="col-lg-7">
                <!-- Checkout Form -->
                <div class="checkout-container" data-aos="fade-up">
                    <form class="checkout-form">

                        <!-- Customer Information -->
                        <div class="checkout-section" id="customer-info">
                            <div class="section-header">
                                <div class="section-number">1</div>
                                <h3>Información del lector</h3>
                            </div>
                            <div class="section-content">
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label for="first-name">Nombre</label>
                                        <input type="text" name="first-name" class="form-control" id="first-name" placeholder="Tu nombre" required="">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="last-name">Apellidos</label>
                                        <input type="text" name="last-name" class="form-control" id="last-name" placeholder="Tus apellidos" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email">Correo electrónico</label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Tu correo electrónico" required="">
                                </div>
                                <div class="form-group">
                                    <label for="phone">Teléfono (opcional)</label>
                                    <input type="tel" class="form-control" name="phone" id="phone" placeholder="Número de teléfono">
                                </div>
                            </div>
                        </div>

                        <!-- Shipping Address -->
                        <div class="checkout-section" id="shipping-address">
                            <div class="section-header">
                                <div class="section-number">2</div>
                                <h3>Detalles de facturación</h3>
                            </div>
                            <div class="section-content">
                                <div class="form-group">
                                    <label for="address">Dirección</label>
                                    <input type="text" class="form-control" name="address" id="address" placeholder="Calle y número" required="">
                                </div>
                                <div class="form-group">
                                    <label for="apartment">Apartamento, piso, etc. (opcional)</label>
                                    <input type="text" class="form-control" name="apartment" id="apartment" placeholder="Apartamento, piso, unidad...">
                                </div>
                                <div class="row">
                                    <div class="col-md-4 form-group">
                                        <label for="city">Ciudad</label>
                                        <input type="text" name="city" class="form-control" id="city" placeholder="Ciudad" required="">
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="state">Provincia / Estado</label>
                                        <input type="text" name="state" class="form-control" id="state" placeholder="Provincia" required="">
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="zip">Código postal</label>
                                        <input type="text" name="zip" class="form-control" id="zip" placeholder="Código postal" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="country">País</label>
                                    <select class="form-select" id="country" name="country" required="">
                                        <option value="">Selecciona tu país</option>
                                        <option value="ES">España</option>
                                        <option value="MX">México</option>
                                        <option value="AR">Argentina</option>
                                        <option value="CL">Chile</option>
                                        <option value="CO">Colombia</option>
                                        <option value="US">Estados Unidos</option>
                                        <option value="other">Otro</option>
                                    </select>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="save-address" name="save-address">
                                    <label class="form-check-label" for="save-address">
                                        Guardar esta información para futuras compras
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- Payment Method -->
                        <div class="checkout-section" id="payment-method">
                            <div class="section-header">
                                <div class="section-number">3</div>
                                <h3>Método de pago</h3>
                            </div>
                            <div class="section-content">
                                <div class="payment-options">
                                    <div class="payment-option active">
                                        <input type="radio" name="payment-method" id="credit-card" checked="">
                                        <label for="credit-card">
                                            <span class="payment-icon"><i class="bi bi-credit-card-2-front"></i></span>
                                            <span class="payment-label">Tarjeta de crédito o débito</span>
                                        </label>
                                    </div>
                                    <div class="payment-option">
                                        <input type="radio" name="payment-method" id="paypal">
                                        <label for="paypal">
                                            <span class="payment-icon"><i class="bi bi-paypal"></i></span>
                                            <span class="payment-label">PayPal</span>
                                        </label>
                                    </div>
                                    <div class="payment-option">
                                        <input type="radio" name="payment-method" id="apple-pay">
                                        <label for="apple-pay">
                                            <span class="payment-icon"><i class="bi bi-apple"></i></span>
                                            <span class="payment-label">Apple Pay</span>
                                        </label>
                                    </div>
                                </div>

                                <div class="payment-details" id="credit-card-details">
                                    <div class="form-group">
                                        <label for="card-number">Número de tarjeta</label>
                                        <div class="card-number-wrapper">
                                            <input type="text" class="form-control" name="card-number" id="card-number" placeholder="1234 5678 9012 3456" required="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <label for="expiry">Fecha de caducidad</label>
                                            <input type="text" class="form-control" name="expiry" id="expiry" placeholder="MM/AA" required="">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="cvv">Código de seguridad (CVV)</label>
                                            <input type="text" class="form-control" name="cvv" id="cvv" placeholder="123" required="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="card-name">Nombre en la tarjeta</label>
                                        <input type="text" class="form-control" name="card-name" id="card-name" placeholder="Nombre completo" required="">
                                    </div>
                                </div>

                                <div class="payment-details d-none" id="paypal-details">
                                    <p class="payment-info">Serás redirigido a PayPal para completar tu compra de forma segura.</p>
                                </div>

                                <div class="payment-details d-none" id="apple-pay-details">
                                    <p class="payment-info">Autoriza el pago con Apple Pay para completar tu compra.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Order Review -->
                        <div class="checkout-section" id="order-review">
                            <div class="section-header">
                                <div class="section-number">4</div>
                                <h3>Revisión y confirmación</h3>
                            </div>
                            <div class="section-content">
                                <div class="form-check terms-check">
                                    <input class="form-check-input" type="checkbox" id="terms" name="terms" required="">
                                    <label class="form-check-label" for="terms">
                                        Acepto los <a href="#" data-bs-toggle="modal" data-bs-target="#termsModal">Términos y condiciones</a> y la <a href="#" data-bs-toggle="modal" data-bs-target="#privacyModal">Política de privacidad</a>
                                    </label>
                                </div>
                                <div class="success-message d-none">¡Tu pedido se ha completado con éxito! Gracias por adquirir tus libros en BlockBookster.</div>
                                <div class="place-order-container">
                                    <button type="submit" class="btn btn-primary place-order-btn">
                                        <span class="btn-text">Completar pedido</span>
                                        <span class="btn-price">€240.96</span>
                                    </button>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>

            <div class="col-lg-5">
                <!-- Order Summary -->
                <div class="order-summary" data-aos="fade-left" data-aos-delay="200">
                    <div class="order-summary-header">
                        <h3>Resumen del pedido</h3>
                        <span class="item-count">2 libros</span>
                    </div>

                    <div class="order-summary-content">
                        <div class="order-items">
                            <div class="order-item">
                                <div class="order-item-image">
                                    <img src="app/View/frontend/img/product/product-1.webp" alt="Libro" class="img-fluid">
                                </div>
                                <div class="order-item-details">
                                    <h4>El misterio del manuscrito</h4>
                                    <p class="order-item-variant">Formato: eBook (EPUB)</p>
                                    <div class="order-item-price">
                                        <span class="quantity">1 ×</span>
                                        <span class="price">€8.99</span>
                                    </div>
                                </div>
                            </div>

                            <div class="order-item">
                                <div class="order-item-image">
                                    <img src="app/View/frontend/img/product/product-2.webp" alt="Libro" class="img-fluid">
                                </div>
                                <div class="order-item-details">
                                    <h4>La biblioteca infinita</h4>
                                    <p class="order-item-variant">Formato: PDF</p>
                                    <div class="order-item-price">
                                        <span class="quantity">1 ×</span>
                                        <span class="price">€5.99</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="promo-code">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Código promocional" aria-label="Promo Code">
                                <button class="btn btn-outline-primary" type="button">Aplicar</button>
                            </div>
                        </div>

                        <div class="order-totals">
                            <div class="order-subtotal d-flex justify-content-between">
                                <span>Subtotal</span>
                                <span>€14.98</span>
                            </div>
                            <div class="order-tax d-flex justify-content-between">
                                <span>Impuestos</span>
                                <span>€1.20</span>
                            </div>
                            <div class="order-total d-flex justify-content-between">
                                <span>Total</span>
                                <span>€16.18</span>
                            </div>
                        </div>

                        <div class="secure-checkout">
                            <div class="secure-checkout-header">
                                <i class="bi bi-shield-lock"></i>
                                <span>Pago 100% seguro</span>
                            </div>
                            <div class="payment-icons">
                                <i class="bi bi-credit-card-2-front"></i>
                                <i class="bi bi-credit-card"></i>
                                <i class="bi bi-paypal"></i>
                                <i class="bi bi-apple"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</section><!-- /Checkout Section -->

<?php
include_once DIRECTORIO_FRONTEND_LAYOUTS . "footer.php";
?>
