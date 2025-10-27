<?php
include_once DIRECTORIO_LAYOUTS . "head.php";
include_once DIRECTORIO_LAYOUTS . "header.php";
?>

<!-- Hero Section -->
<section id="hero" class="hero section">
    <div class="hero-container">
        <div class="hero-content">
            <div class="content-wrapper" data-aos="fade-up" data-aos-delay="100">
                <h1 class="hero-title">Descubre tu próxima gran lectura</h1>
                <p class="hero-description">Explora nuestra colección curada de eBooks: desde los clásicos inmortales hasta los lanzamientos más esperados. Disfruta de tus libros favoritos al instante, en cualquier dispositivo.</p>
                <div class="hero-actions" data-aos="fade-up" data-aos-delay="200">
                    <a href="#products" class="btn-primary">Explorar libros</a>
                    <a href="#categories" class="btn-secondary">Ver categorías</a>
                </div>
                <div class="features-list" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-item">
                        <i class="bi bi-truck"></i>
                        <span>Descarga inmediata</span>
                    </div>
                    <div class="feature-item">
                        <i class="bi bi-award"></i>
                        <span>Selección de calidad</span>
                    </div>
                    <div class="feature-item">
                        <i class="bi bi-headset"></i>
                        <span>Soporte 24/7</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="hero-visuals">
            <div class="product-showcase" data-aos="fade-left" data-aos-delay="200">
                <div class="product-card featured">
                    <img src="Views/template/images/product/product-2.webp" alt="Featured Book" class="img-fluid">
                    <div class="product-badge">Más vendido</div>
                    <div class="product-info">
                        <h4>El código del narrador</h4>
                        <div class="price">
                            <span class="sale-price">$12.99</span>
                            <span class="original-price">$19.99</span>
                        </div>
                    </div>
                </div>

                <div class="product-grid">
                    <div class="product-mini" data-aos="zoom-in" data-aos-delay="400">
                        <img src="Views/template/images/product/product-3.webp" alt="Book" class="img-fluid">
                        <span class="mini-price">$6.99</span>
                    </div>
                    <div class="product-mini" data-aos="zoom-in" data-aos-delay="500">
                        <img src="Views/template/images/product/product-5.webp" alt="Book" class="img-fluid">
                        <span class="mini-price">$9.50</span>
                    </div>
                </div>
            </div>

            <div class="floating-elements">
                <div class="floating-icon cart" data-aos="fade-up" data-aos-delay="600">
                    <i class="bi bi-cart3"></i>
                    <span class="notification-dot">3</span>
                </div>
                <div class="floating-icon wishlist" data-aos="fade-up" data-aos-delay="700">
                    <i class="bi bi-heart"></i>
                </div>
                <div class="floating-icon search" data-aos="fade-up" data-aos-delay="800">
                    <i class="bi bi-search"></i>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Hero Section -->

<!-- Promo Cards Section -->
<section id="promo-cards" class="promo-cards section">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">

            <div class="col-lg-6">
                <div class="category-featured" data-aos="fade-right" data-aos-delay="200">
                    <div class="category-image">
                        <img src="Views/template/images/product/product-f-2.webp" alt="New Releases" class="img-fluid">
                    </div>
                    <div class="category-content">
                        <span class="category-tag">Lo más leído</span>
                        <h2>Nuevos lanzamientos</h2>
                        <p>Descubre los libros digitales más recientes de tus autores favoritos. Historias cautivadoras que no podrás dejar de leer.</p>
                        <a href="#" class="btn-shop">Ver novedades <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="row gy-4">

                    <div class="col-xl-6">
                        <div class="category-card cat-men" data-aos="fade-up" data-aos-delay="300">
                            <div class="category-image">
                                <img src="Views/template/images/product/product-m-5.webp" alt="Fiction" class="img-fluid">
                            </div>
                            <div class="category-content">
                                <h4>Ficción</h4>
                                <p>242 títulos</p>
                                <a href="#" class="card-link">Ver libros <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="category-card cat-kids" data-aos="fade-up" data-aos-delay="400">
                            <div class="category-image">
                                <img src="Views/template/images/product/product-8.webp" alt="Children's Books" class="img-fluid">
                            </div>
                            <div class="category-content">
                                <h4>Infantil y juvenil</h4>
                                <p>185 títulos</p>
                                <a href="#" class="card-link">Ver libros <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="category-card cat-cosmetics" data-aos="fade-up" data-aos-delay="500">
                            <div class="category-image">
                                <img src="Views/template/images/product/product-3.webp" alt="Non-Fiction" class="img-fluid">
                            </div>
                            <div class="category-content">
                                <h4>No ficción</h4>
                                <p>127 títulos</p>
                                <a href="#" class="card-link">Explorar <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="category-card cat-accessories" data-aos="fade-up" data-aos-delay="600">
                            <div class="category-image">
                                <img src="Views/template/images/product/product-12.webp" alt="Academic" class="img-fluid">
                            </div>
                            <div class="category-content">
                                <h4>Académicos</h4>
                                <p>308 títulos</p>
                                <a href="#" class="card-link">Ver colección <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
<!-- /Promo Cards Section -->

<!-- Best Sellers Section -->
<section id="best-sellers" class="best-sellers section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Más Vendidos</h2>
        <p>Descubre los eBooks más leídos y recomendados por nuestra comunidad de lectores BlockBookster.</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-5">

            <!-- Product 1 -->
            <div class="col-lg-3 col-md-6">
                <div class="product-item">
                    <div class="product-image">
                        <div class="product-badge">Exclusivo</div>
                        <img src="Views/template/images/product/product-1.webp" alt="Libro destacado" class="img-fluid" loading="lazy">
                        <div class="product-actions">
                            <button class="action-btn wishlist-btn">
                                <i class="bi bi-heart"></i>
                            </button>
                            <button class="action-btn compare-btn">
                                <i class="bi bi-arrow-left-right"></i>
                            </button>
                            <button class="action-btn quickview-btn">
                                <i class="bi bi-zoom-in"></i>
                            </button>
                        </div>
                        <button class="cart-btn">Ver Detalles</button>
                    </div>
                    <div class="product-info">
                        <div class="product-category">Colección Premium</div>
                        <h4 class="product-name"><a href="product-details.php">El Arte de Pensar en Digital</a></h4>
                        <div class="product-rating">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <span class="rating-count">(24)</span>
                        </div>
                        <div class="product-price">$12.99</div>
                    </div>
                </div>
            </div>
            <!-- End Product 1 -->

            <!-- Product 2 -->
            <div class="col-lg-3 col-md-6">
                <div class="product-item">
                    <div class="product-image">
                        <div class="product-badge sale-badge">25% Off</div>
                        <img src="Views/template/images/product/product-4.webp" alt="Libro destacado" class="img-fluid" loading="lazy">
                        <div class="product-actions">
                            <button class="action-btn wishlist-btn">
                                <i class="bi bi-heart"></i>
                            </button>
                            <button class="action-btn compare-btn">
                                <i class="bi bi-arrow-left-right"></i>
                            </button>
                            <button class="action-btn quickview-btn">
                                <i class="bi bi-zoom-in"></i>
                            </button>
                        </div>
                        <button class="cart-btn">Añadir al Carrito</button>
                    </div>
                    <div class="product-info">
                        <div class="product-category">Top Lecturas</div>
                        <h4 class="product-name"><a href="product-details.php">Historias que Inspiran</a></h4>
                        <div class="product-rating">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                            </div>
                            <span class="rating-count">(38)</span>
                        </div>
                        <div class="product-price">
                            <span class="old-price">$15.99</span>
                            <span class="current-price">$11.99</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Product 2 -->

            <!-- Product 3 -->
            <div class="col-lg-3 col-md-6">
                <div class="product-item">
                    <div class="product-image">
                        <img src="Views/template/images/product/product-7.webp" alt="Libro destacado" class="img-fluid" loading="lazy">
                        <div class="product-actions">
                            <button class="action-btn wishlist-btn">
                                <i class="bi bi-heart"></i>
                            </button>
                            <button class="action-btn compare-btn">
                                <i class="bi bi-arrow-left-right"></i>
                            </button>
                            <button class="action-btn quickview-btn">
                                <i class="bi bi-zoom-in"></i>
                            </button>
                        </div>
                        <button class="cart-btn">Añadir al Carrito</button>
                    </div>
                    <div class="product-info">
                        <div class="product-category">Novedades</div>
                        <h4 class="product-name"><a href="product-details.php">Crónicas del Futuro Cercano</a></h4>
                        <div class="product-rating">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <span class="rating-count">(12)</span>
                        </div>
                        <div class="product-price">$9.50</div>
                    </div>
                </div>
            </div>
            <!-- End Product 3 -->

            <!-- Product 4 -->
            <div class="col-lg-3 col-md-6">
                <div class="product-item">
                    <div class="product-image">
                        <div class="product-badge trending-badge">Tendencia</div>
                        <img src="Views/template/images/product/product-10.webp" alt="Libro destacado" class="img-fluid" loading="lazy">
                        <div class="product-actions">
                            <button class="action-btn wishlist-btn active">
                                <i class="bi bi-heart-fill"></i>
                            </button>
                            <button class="action-btn compare-btn">
                                <i class="bi bi-arrow-left-right"></i>
                            </button>
                            <button class="action-btn quickview-btn">
                                <i class="bi bi-zoom-in"></i>
                            </button>
                        </div>
                        <button class="cart-btn">Añadir al Carrito</button>
                    </div>
                    <div class="product-info">
                        <div class="product-category">Serie de Autor</div>
                        <h4 class="product-name"><a href="product-details.php">La Sombra del Lector</a></h4>
                        <div class="product-rating">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <span class="rating-count">(56)</span>
                        </div>
                        <div class="product-price">$13.99</div>
                    </div>
                </div>
            </div>
            <!-- End Product 4 -->

        </div>

    </div>

</section><!-- /Best Sellers Section -->

<!-- Cards Section -->
<section id="cards" class="cards section">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">

            <!-- Trending Now -->
            <div class="col-lg-4 col-md-6 mb-5 mb-md-0" data-aos="fade-up" data-aos-delay="200">
                <div class="product-category">
                    <h3 class="category-title">
                        <i class="bi bi-fire"></i> Tendencias
                    </h3>
                    <div class="product-list">
                        <div class="product-card">
                            <div class="product-image">
                                <img src="Views/template/images/product/product-1.webp" alt="Libro en tendencia" class="img-fluid">
                                <div class="product-badges">
                                    <span class="badge-new">Nuevo</span>
                                </div>
                            </div>
                            <div class="product-info">
                                <h4 class="product-name">El Código de los Sueños</h4>
                                <div class="product-rating">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i>
                                    <span>(24)</span>
                                </div>
                                <div class="product-price"><span class="current-price">$10.50</span></div>
                            </div>
                        </div>

                        <div class="product-card">
                            <div class="product-image">
                                <img src="Views/template/images/product/product-3.webp" alt="Libro en tendencia" class="img-fluid">
                            </div>
                            <div class="product-info">
                                <h4 class="product-name">Microcuentos del Viento</h4>
                                <div class="product-rating">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                    <span>(41)</span>
                                </div>
                                <div class="product-price"><span class="current-price">$8.99</span></div>
                            </div>
                        </div>

                        <div class="product-card">
                            <div class="product-image">
                                <img src="Views/template/images/product/product-5.webp" alt="Libro en tendencia" class="img-fluid">
                            </div>
                            <div class="product-info">
                                <h4 class="product-name">Guía del Lector Moderno</h4>
                                <div class="product-rating">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i>
                                    <span>(18)</span>
                                </div>
                                <div class="product-price"><span class="current-price">$7.50</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Best Sellers -->
            <div class="col-lg-4 col-md-6 mb-5 mb-md-0" data-aos="fade-up" data-aos-delay="300">
                <div class="product-category">
                    <h3 class="category-title">
                        <i class="bi bi-award"></i> Más Vendidos
                    </h3>
                    <div class="product-list">
                        <div class="product-card">
                            <div class="product-image">
                                <img src="Views/template/images/product/product-2.webp" alt="Libro más vendido" class="img-fluid">
                                <div class="product-badges">
                                    <span class="badge-sale">-15%</span>
                                </div>
                            </div>
                            <div class="product-info">
                                <h4 class="product-name">El Último Capítulo</h4>
                                <div class="product-rating">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                    <span>(87)</span>
                                </div>
                                <div class="product-price">
                                    <span class="current-price">$9.99</span>
                                    <span class="old-price">$11.50</span>
                                </div>
                            </div>
                        </div>

                        <div class="product-card">
                            <div class="product-image">
                                <img src="Views/template/images/product/product-6.webp" alt="Libro más vendido" class="img-fluid">
                            </div>
                            <div class="product-info">
                                <h4 class="product-name">Lecturas para el Alma</h4>
                                <div class="product-rating">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i>
                                    <span>(56)</span>
                                </div>
                                <div class="product-price"><span class="current-price">$10.50</span></div>
                            </div>
                        </div>

                        <div class="product-card">
                            <div class="product-image">
                                <img src="Views/template/images/product/product-8.webp" alt="Libro más vendido" class="img-fluid">
                                <div class="product-badges">
                                    <span class="badge-hot">Top</span>
                                </div>
                            </div>
                            <div class="product-info">
                                <h4 class="product-name">Historias que Dejan Huella</h4>
                                <div class="product-rating">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                    <span>(112)</span>
                                </div>
                                <div class="product-price"><span class="current-price">$11.25</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Featured -->
            <div class="col-lg-4 col-md-6 mb-5 mb-md-0" data-aos="fade-up" data-aos-delay="400">
                <div class="product-category">
                    <h3 class="category-title">
                        <i class="bi bi-star"></i> Destacados
                    </h3>
                    <div class="product-list">
                        <div class="product-card">
                            <div class="product-image">
                                <img src="Views/template/images/product/product-7.webp" alt="Libro destacado" class="img-fluid">
                            </div>
                            <div class="product-info">
                                <h4 class="product-name">Poemas para un Nuevo Día</h4>
                                <div class="product-rating">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i>
                                    <span>(32)</span>
                                </div>
                                <div class="product-price"><span class="current-price">$8.99</span></div>
                            </div>
                        </div>

                        <div class="product-card">
                            <div class="product-image">
                                <img src="Views/template/images/product/product-4.webp" alt="Libro destacado" class="img-fluid">
                                <div class="product-badges">
                                    <span class="badge-limited">Exclusivo</span>
                                </div>
                            </div>
                            <div class="product-info">
                                <h4 class="product-name">Narrativas Breves del Mundo</h4>
                                <div class="product-rating">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i>
                                    <span>(47)</span>
                                </div>
                                <div class="product-price"><span class="current-price">$9.50</span></div>
                            </div>
                        </div>

                        <div class="product-card">
                            <div class="product-image">
                                <img src="Views/template/images/product/product-9.webp" alt="Libro destacado" class="img-fluid">
                            </div>
                            <div class="product-info">
                                <h4 class="product-name">Entre Líneas y Sombras</h4>
                                <div class="product-rating">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                    <span>(64)</span>
                                </div>
                                <div class="product-price"><span class="current-price">$10.99</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section><!-- /Cards Section -->

<?php
include_once DIRECTORIO_LAYOUTS . "footer.php";
?>