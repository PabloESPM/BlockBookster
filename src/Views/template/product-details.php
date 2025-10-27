<?php
include_once DIRECTORIO_LAYOUTS . "head.php";
include_once DIRECTORIO_LAYOUTS . "header.php";
?>

<!-- Page Title -->
<div class="page-title light-background">
    <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Detalles del Libro</h1>
        <nav class="breadcrumbs">
            <ol>
                <li><a href="/inicio">Inicio</a></li>
                <li class="current">Detalles del Libro</li>
            </ol>
        </nav>
    </div>
</div><!-- End Page Title -->

<!-- Book Details Section -->
<section id="product-details" class="product-details section">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row g-4">
            <!-- Book Cover Gallery -->
            <div class="col-lg-7" data-aos="zoom-in" data-aos-delay="150">
                <div class="product-gallery">
                    <div class="main-showcase">
                        <div class="image-zoom-container">
                            <img src="Views/template/images/product/product-details-6.webp" alt="Portada del libro" class="img-fluid main-product-image drift-zoom" id="main-product-image" data-zoom="assets/img/product/product-details-6.webp">

                            <div class="image-navigation">
                                <button class="nav-arrow prev-image image-nav-btn prev-image" type="button">
                                    <i class="bi bi-chevron-left"></i>
                                </button>
                                <button class="nav-arrow next-image image-nav-btn next-image" type="button">
                                    <i class="bi bi-chevron-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="thumbnail-grid">
                        <div class="thumbnail-wrapper thumbnail-item active" data-image="Views/template/images/product/product-details-6.webp">
                            <img src="Views/template/images/product/product-details-6.webp" alt="Vista 1" class="img-fluid">
                        </div>
                        <div class="thumbnail-wrapper thumbnail-item" data-image="Views/template/images/product/product-details-7.webp">
                            <img src="Views/template/images/product/product-details-7.webp" alt="Vista 2" class="img-fluid">
                        </div>
                        <div class="thumbnail-wrapper thumbnail-item" data-image="Views/template/images/product/product-details-8.webp">
                            <img src="Views/template/images/product/product-details-8.webp" alt="Vista 3" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Book Details -->
            <div class="col-lg-5" data-aos="fade-left" data-aos-delay="200">
                <div class="product-details">
                    <div class="product-badge-container">
                        <span class="badge-category">Ficción Contemporánea</span>
                        <div class="rating-group">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                            </div>
                            <span class="review-text">(127 valoraciones)</span>
                        </div>
                    </div>

                    <h1 class="product-name">El silencio de los días: una historia de segundas oportunidades</h1>

                    <div class="pricing-section">
                        <div class="price-display">
                            <span class="sale-price">$9.99</span>
                            <span class="regular-price">$14.99</span>
                        </div>
                        <div class="savings-info">
                            <span class="save-amount">Ahorra $5.00</span>
                            <span class="discount-percent">(33% menos)</span>
                        </div>
                    </div>

                    <div class="product-description">
                        <p>Una novela intimista y poderosa que explora la soledad, la memoria y el perdón. Escrita con una prosa envolvente, <strong>“El silencio de los días”</strong> nos invita a redescubrir los vínculos que nos definen y las palabras que nunca dijimos.</p>
                    </div>

                    <div class="availability-status">
                        <div class="stock-indicator">
                            <i class="bi bi-check-circle-fill"></i>
                            <span class="stock-text">Disponible para descarga inmediata</span>
                        </div>
                        <div class="quantity-left">Licencias digitales ilimitadas</div>
                    </div>

                    <!-- Format Options -->
                    <div class="variant-section">
                        <div class="color-selection">
                            <label class="variant-label">Formatos disponibles:</label>
                            <div class="color-grid">
                                <div class="color-chip active" data-color="ePub" style="background: linear-gradient(135deg, #6f42c1, #512da8);">
                                    <span class="selection-check"><i class="bi bi-check"></i></span>
                                </div>
                                <div class="color-chip" data-color="PDF" style="background: linear-gradient(135deg, #dc3545, #a71d2a);">
                                    <span class="selection-check"><i class="bi bi-check"></i></span>
                                </div>
                                <div class="color-chip" data-color="Audiolibro" style="background: linear-gradient(135deg, #0d6efd, #004085);">
                                    <span class="selection-check"><i class="bi bi-check"></i></span>
                                </div>
                            </div>
                            <div class="selected-variant">Seleccionado: <span>ePub</span></div>
                        </div>
                    </div>

                    <!-- Purchase Options -->
                    <div class="purchase-section">
                        <div class="action-buttons">
                            <button class="btn primary-action">
                                <i class="bi bi-bag-plus"></i>
                                Añadir a la biblioteca
                            </button>
                            <button class="btn icon-action" title="Añadir a favoritos">
                                <i class="bi bi-heart"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Benefits List -->
                    <div class="benefits-list">
                        <div class="benefit-item">
                            <i class="bi bi-cloud-arrow-down"></i>
                            <span>Descarga instantánea tras la compra</span>
                        </div>
                        <div class="benefit-item">
                            <i class="bi bi-arrow-repeat"></i>
                            <span>Relectura ilimitada en todos tus dispositivos</span>
                        </div>
                        <div class="benefit-item">
                            <i class="bi bi-shield-lock"></i>
                            <span>Compra segura y protegida</span>
                        </div>
                        <div class="benefit-item">
                            <i class="bi bi-headset"></i>
                            <span>Soporte técnico y lector 24/7</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Tabs -->
        <div class="row mt-5" data-aos="fade-up" data-aos-delay="300">
            <div class="col-12">
                <div class="info-tabs-container">
                    <nav class="tabs-navigation nav">
                        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#overview" type="button">Sinopsis</button>
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#technical" type="button">Detalles del Libro</button>
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#reviews" type="button">Reseñas (127)</button>
                    </nav>

                    <div class="tab-content">
                        <!-- Overview Tab -->
                        <div class="tab-pane fade show active" id="overview">
                            <div class="overview-content">
                                <h3>Sinopsis</h3>
                                <p>Cuando Clara regresa al pequeño pueblo donde creció, no imagina que el pasado la espera entre viejos libros y cartas olvidadas. Con una narrativa emocional, esta obra habla sobre el poder de la literatura para sanar las heridas del tiempo.</p>

                                <h4>Temas principales</h4>
                                <ul>
                                    <li>El valor de las segundas oportunidades</li>
                                    <li>El reencuentro con la memoria</li>
                                    <li>El perdón y la reconciliación</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Technical Details Tab -->
                        <div class="tab-pane fade" id="technical">
                            <div class="technical-content">
                                <div class="row g-4">
                                    <div class="col-md-6">
                                        <div class="tech-group">
                                            <h4>Información del eBook</h4>
                                            <div class="spec-table">
                                                <div class="spec-row"><span class="spec-name">Autor</span><span class="spec-value">Lucía Fernández</span></div>
                                                <div class="spec-row"><span class="spec-name">Editorial</span><span class="spec-value">BlockBookster Originals</span></div>
                                                <div class="spec-row"><span class="spec-name">Idioma</span><span class="spec-value">Español</span></div>
                                                <div class="spec-row"><span class="spec-name">Número de páginas</span><span class="spec-value">312</span></div>
                                                <div class="spec-row"><span class="spec-name">ISBN</span><span class="spec-value">978-84-123456-7-8</span></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="tech-group">
                                            <h4>Compatibilidad</h4>
                                            <div class="spec-table">
                                                <div class="spec-row"><span class="spec-name">Formatos disponibles</span><span class="spec-value">ePub, PDF, Audiolibro</span></div>
                                                <div class="spec-row"><span class="spec-name">Dispositivos</span><span class="spec-value">iOS, Android, Windows, Mac</span></div>
                                                <div class="spec-row"><span class="spec-name">Lector recomendado</span><span class="spec-value">BlockBookster Reader</span></div>
                                                <div class="spec-row"><span class="spec-name">DRM</span><span class="spec-value">Protección ligera sin restricciones de lectura</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Reviews Tab -->
                        <div class="tab-pane fade" id="reviews">
                            <div class="reviews-content">
                                <div class="reviews-header">
                                    <div class="rating-overview">
                                        <div class="average-score">
                                            <div class="score-display">4.6</div>
                                            <div class="score-stars">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-half"></i>
                                            </div>
                                            <div class="total-reviews">127 valoraciones de lectores</div>
                                        </div>
                                    </div>

                                    <div class="write-review-cta">
                                        <h4>Comparte tu opinión</h4>
                                        <p>Ayuda a otros lectores a descubrir grandes historias</p>
                                        <button class="btn review-btn">Escribir reseña</button>
                                    </div>
                                </div>

                                <!-- Ejemplo de reseñas -->
                                <div class="customer-reviews-list">
                                    <div class="review-card">
                                        <div class="reviewer-profile">
                                            <img src="Views/template/images/person/person-f-3.webp" alt="Lector" class="profile-pic">
                                            <div class="profile-details">
                                                <div class="customer-name">Sara López</div>
                                                <div class="review-meta">
                                                    <div class="review-stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                                                    <span class="review-date">21 de marzo de 2025</span>
                                                </div>
                                            </div>
                                        </div>
                                        <h5 class="review-headline">Emotivo y muy bien escrito</h5>
                                        <div class="review-text">
                                            <p>Un libro que se queda contigo. La autora consigue transmitir emociones profundas sin caer en clichés. Lo terminé en una sola noche.</p>
                                        </div>
                                    </div>

                                    <div class="review-card">
                                        <div class="reviewer-profile">
                                            <img src="Views/template/images/person/person-m-5.webp" alt="Lector" class="profile-pic">
                                            <div class="profile-details">
                                                <div class="customer-name">David Ramos</div>
                                                <div class="review-meta">
                                                    <div class="review-stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i></div>
                                                    <span class="review-date">10 de marzo de 2025</span>
                                                </div>
                                            </div>
                                        </div>
                                        <h5 class="review-headline">Una historia con alma</h5>
                                        <div class="review-text">
                                            <p>Me gustó mucho la manera en que la autora combina el pasado y el presente. Un retrato muy humano sobre el perdón.</p>
                                        </div>
                                    </div>

                                    <div class="load-more-section">
                                        <button class="btn load-more-reviews">Mostrar más reseñas</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- /Book Details Section -->

<?php
include_once DIRECTORIO_LAYOUTS . "footer.php";
?>
