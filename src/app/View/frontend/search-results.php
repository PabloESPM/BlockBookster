<?php
include_once DIRECTORIO_FRONTEND_LAYOUTS . "head.php";
include_once DIRECTORIO_FRONTEND_LAYOUTS . "header.php";
?>
    <!-- Search Results Header Section -->
    <section id="search-results-header" class="search-results-header section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="search-results-header">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <div class="results-count" data-aos="fade-right" data-aos-delay="200">
                            <h2>Resultados de Búsqueda</h2>
                            <p>Encontramos <span class="results-number">24</span> resultados para <span class="search-term">"ciencia ficción"</span></p>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
                        <form method="post" class="search-form">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Buscar libros..." name="search" value="ciencia ficción" required="">
                                <button class="btn search-btn" type="submit">
                                    <i class="bi bi-search"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="search-filters mt-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="filter-tags">
                                <span class="filter-label">Filtros:</span>
                                <div class="tags-wrapper">
                    <span class="filter-tag">
                      Categoría: Novela
                      <i class="bi bi-x-circle"></i>
                    </span>
                                    <span class="filter-tag">
                      Fecha: Último Mes
                      <i class="bi bi-x-circle"></i>
                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 text-lg-end mt-3 mt-lg-0">
                            <div class="sort-options">
                                <label for="sort-select" class="me-2">Ordenar por:</label>
                                <select id="sort-select" class="form-select form-select-sm d-inline-block w-auto">
                                    <option value="relevance">Relevancia</option>
                                    <option value="date-desc">Más Recientes</option>
                                    <option value="date-asc">Más Antiguos</option>
                                    <option value="title-asc">Título A-Z</option>
                                    <option value="title-desc">Título Z-A</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section><!-- /Search Results Header Section -->

    <!-- Search Product List Section -->
    <section id="search-product-list" class="search-product-list section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row g-4">
                <!-- Product 1 -->
                <div class="col-6 col-lg-3">
                    <div class="product-card" data-aos="zoom-in">
                        <div class="product-image">
                            <img src="app/View/frontend/img/product/product-f-1.webp" class="main-image img-fluid" alt="Product">
                            <img src="app/View/frontend/img/product/product-f-2.webp" class="hover-image img-fluid" alt="Product Variant">
                            <div class="product-overlay">
                                <div class="product-actions">
                                    <button type="button" class="action-btn" data-bs-toggle="tooltip" title="Vista Rápida">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                    <button type="button" class="action-btn" data-bs-toggle="tooltip" title="Añadir al Carrito">
                                        <i class="bi bi-cart-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="product-details">
                            <div class="product-category">Ciencia Ficción</div>
                            <h4 class="product-title"><a href="/productDetails">El Último Horizonte</a></h4>
                            <div class="product-meta">
                                <div class="product-price">14,99€</div>
                                <div class="product-rating">
                                    <i class="bi bi-star-fill"></i>
                                    4.8 <span>(42)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="col-6 col-lg-3">
                    <div class="product-card" data-aos="zoom-in" data-aos-delay="100">
                        <div class="product-image">
                            <img src="app/View/frontend/img/product/product-m-1.webp" class="main-image img-fluid" alt="Product">
                            <img src="app/View/frontend/img/product/product-m-2.webp" class="hover-image img-fluid" alt="Product Variant">
                            <div class="product-overlay">
                                <div class="product-actions">
                                    <button type="button" class="action-btn" data-bs-toggle="tooltip" title="Vista Rápida">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                    <button type="button" class="action-btn" data-bs-toggle="tooltip" title="Añadir al Carrito">
                                        <i class="bi bi-cart-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-badge new">Nuevo</div>
                        </div>
                        <div class="product-details">
                            <div class="product-category">Thriller</div>
                            <h4 class="product-title"><a href="/productDetails">Sombras en la Noche</a></h4>
                            <div class="product-meta">
                                <div class="product-price">11,99€</div>
                                <div class="product-rating">
                                    <i class="bi bi-star-fill"></i>
                                    4.6 <span>(28)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="col-6 col-lg-3">
                    <div class="product-card" data-aos="zoom-in" data-aos-delay="200">
                        <div class="product-image">
                            <img src="app/View/frontend/img/product/product-f-3.webp" class="main-image img-fluid" alt="Product">
                            <img src="app/View/frontend/img/product/product-f-4.webp" class="hover-image img-fluid" alt="Product Variant">
                            <div class="product-overlay">
                                <div class="product-actions">
                                    <button type="button" class="action-btn" data-bs-toggle="tooltip" title="Vista Rápida">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                    <button type="button" class="action-btn" data-bs-toggle="tooltip" title="Añadir al Carrito">
                                        <i class="bi bi-cart-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-badge sale">-25%</div>
                        </div>
                        <div class="product-details">
                            <div class="product-category">Romántica</div>
                            <h4 class="product-title"><a href="/productDetails">Bajo el Cielo de París</a></h4>
                            <div class="product-meta">
                                <div class="product-price">
                                    8,99€
                                    <span class="original-price">11,99€</span>
                                </div>
                                <div class="product-rating">
                                    <i class="bi bi-star-fill"></i>
                                    4.9 <span>(56)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 4 -->
                <div class="col-6 col-lg-3">
                    <div class="product-card" data-aos="zoom-in" data-aos-delay="300">
                        <div class="product-image">
                            <img src="app/View/frontend/img/product/product-m-3.webp" class="main-image img-fluid" alt="Product">
                            <img src="app/View/frontend/img/product/product-m-4.webp" class="hover-image img-fluid" alt="Product Variant">
                            <div class="product-overlay">
                                <div class="product-actions">
                                    <button type="button" class="action-btn" data-bs-toggle="tooltip" title="Vista Rápida">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                    <button type="button" class="action-btn" data-bs-toggle="tooltip" title="Añadir al Carrito">
                                        <i class="bi bi-cart-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="product-details">
                            <div class="product-category">Historia</div>
                            <h4 class="product-title"><a href="/productDetails">Los Secretos de Roma</a></h4>
                            <div class="product-meta">
                                <div class="product-price">16,99€</div>
                                <div class="product-rating">
                                    <i class="bi bi-star-fill"></i>
                                    4.7 <span>(35)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 5 -->
                <div class="col-6 col-lg-3">
                    <div class="product-card" data-aos="zoom-in" data-aos-delay="400">
                        <div class="product-image">
                            <img src="app/View/frontend/img/product/product-f-5.webp" class="main-image img-fluid" alt="Product">
                            <img src="app/View/frontend/img/product/product-f-6.webp" class="hover-image img-fluid" alt="Product Variant">
                            <div class="product-overlay">
                                <div class="product-actions">
                                    <button type="button" class="action-btn" data-bs-toggle="tooltip" title="Vista Rápida">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                    <button type="button" class="action-btn" data-bs-toggle="tooltip" title="Añadir al Carrito">
                                        <i class="bi bi-cart-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="product-details">
                            <div class="product-category">Fantasía</div>
                            <h4 class="product-title"><a href="/productDetails">El Reino Olvidado</a></h4>
                            <div class="product-meta">
                                <div class="product-price">12,99€</div>
                                <div class="product-rating">
                                    <i class="bi bi-star-fill"></i>
                                    4.5 <span>(23)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 6 -->
                <div class="col-6 col-lg-3">
                    <div class="product-card" data-aos="zoom-in" data-aos-delay="500">
                        <div class="product-image">
                            <img src="app/View/frontend/img/product/product-m-5.webp" class="main-image img-fluid" alt="Product">
                            <img src="app/View/frontend/img/product/product-m-6.webp" class="hover-image img-fluid" alt="Product Variant">
                            <div class="product-overlay">
                                <div class="product-actions">
                                    <button type="button" class="action-btn" data-bs-toggle="tooltip" title="Vista Rápida">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                    <button type="button" class="action-btn" data-bs-toggle="tooltip" title="Añadir al Carrito">
                                        <i class="bi bi-cart-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-badge sale">-15%</div>
                        </div>
                        <div class="product-details">
                            <div class="product-category">Misterio</div>
                            <h4 class="product-title"><a href="/productDetails">El Enigma del Faro</a></h4>
                            <div class="product-meta">
                                <div class="product-price">
                                    10,99€
                                    <span class="original-price">12,99€</span>
                                </div>
                                <div class="product-rating">
                                    <i class="bi bi-star-fill"></i>
                                    4.8 <span>(47)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 7 -->
                <div class="col-6 col-lg-3">
                    <div class="product-card" data-aos="zoom-in" data-aos-delay="600">
                        <div class="product-image">
                            <img src="app/View/frontend/img/product/product-f-7.webp" class="main-image img-fluid" alt="Product">
                            <img src="app/View/frontend/img/product/product-f-8.webp" class="hover-image img-fluid" alt="Product Variant">
                            <div class="product-overlay">
                                <div class="product-actions">
                                    <button type="button" class="action-btn" data-bs-toggle="tooltip" title="Vista Rápida">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                    <button type="button" class="action-btn" data-bs-toggle="tooltip" title="Añadir al Carrito">
                                        <i class="bi bi-cart-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="product-details">
                            <div class="product-category">Autoayuda</div>
                            <h4 class="product-title"><a href="/productDetails">El Poder de la Mente</a></h4>
                            <div class="product-meta">
                                <div class="product-price">9,99€</div>
                                <div class="product-rating">
                                    <i class="bi bi-star-fill"></i>
                                    4.6 <span>(31)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 8 -->
                <div class="col-6 col-lg-3">
                    <div class="product-card" data-aos="zoom-in" data-aos-delay="700">
                        <div class="product-image">
                            <img src="app/View/frontend/img/product/product-m-7.webp" class="main-image img-fluid" alt="Product">
                            <img src="app/View/frontend/img/product/product-m-8.webp" class="hover-image img-fluid" alt="Product Variant">
                            <div class="product-overlay">
                                <div class="product-actions">
                                    <button type="button" class="action-btn" data-bs-toggle="tooltip" title="Vista Rápida">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                    <button type="button" class="action-btn" data-bs-toggle="tooltip" title="Añadir al Carrito">
                                        <i class="bi bi-cart-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-badge new">Nuevo</div>
                        </div>
                        <div class="product-details">
                            <div class="product-category">Biografía</div>
                            <h4 class="product-title"><a href="/productDetails">Vida de un Genio</a></h4>
                            <div class="product-meta">
                                <div class="product-price">13,99€</div>
                                <div class="product-rating">
                                    <i class="bi bi-star-fill"></i>
                                    4.7 <span>(39)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section><!-- /Search Product List Section -->

    <!-- Category Pagination Section -->
    <section id="category-pagination" class="category-pagination section">

        <div class="container">
            <nav class="d-flex justify-content-center" aria-label="Page navigation">
                <ul>
                    <li>
                        <a href="#" aria-label="Previous page">
                            <i class="bi bi-arrow-left"></i>
                            <span class="d-none d-sm-inline">Anterior</span>
                        </a>
                    </li>

                    <li><a href="#" class="active">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li class="ellipsis">...</li>
                    <li><a href="#">8</a></li>
                    <li><a href="#">9</a></li>
                    <li><a href="#">10</a></li>

                    <li>
                        <a href="#" aria-label="Next page">
                            <span class="d-none d-sm-inline">Siguiente</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

    </section><!-- /Category Pagination Section -->
<?php
include_once DIRECTORIO_FRONTEND_LAYOUTS . "footer.php";
?>