<?php
include_once DIRECTORIO_FRONTEND_LAYOUTS . "head.php";
include_once DIRECTORIO_FRONTEND_LAYOUTS . "header.php";
?>

<!-- Page Title -->
<div class="page-title light-background">
    <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Categoría</h1>
        <nav class="breadcrumbs">
            <ol>
                <li><a href="/inicio">Inicio</a></li>
                <li class="current">Categoría</li>
            </ol>
        </nav>
    </div>
</div><!-- End Page Title -->

<div class="container">
    <div class="row">

        <div class="col-lg-4 sidebar">

            <div class="widgets-container">

                <!-- Product Categories Widget -->
                <div class="product-categories-widget widget-item">

                    <h3 class="widget-title">Categorías</h3>

                    <ul class="category-tree list-unstyled mb-0">
                        <!-- Fiction Category -->
                        <li class="category-item">
                            <div class="d-flex justify-content-between align-items-center category-header collapsed" data-bs-toggle="collapse" data-bs-target="#categories-1-fiction-subcategories" aria-expanded="false" aria-controls="categories-1-fiction-subcategories">
                                <a href="javascript:void(0)" class="category-link">Ficción</a>
                                <span class="category-toggle">
                      <i class="bi bi-chevron-down"></i>
                      <i class="bi bi-chevron-up"></i>
                    </span>
                            </div>
                            <ul id="categories-1-fiction-subcategories" class="subcategory-list list-unstyled collapse ps-3 mt-2">
                                <li><a href="#" class="subcategory-link">Novela Histórica</a></li>
                                <li><a href="#" class="subcategory-link">Ciencia Ficción</a></li>
                                <li><a href="#" class="subcategory-link">Fantasía</a></li>
                                <li><a href="#" class="subcategory-link">Romántica</a></li>
                            </ul>
                        </li>

                        <!-- Non-Fiction Category -->
                        <li class="category-item">
                            <div class="d-flex justify-content-between align-items-center category-header collapsed" data-bs-toggle="collapse" data-bs-target="#categories-1-nonfiction-subcategories" aria-expanded="false" aria-controls="categories-1-nonfiction-subcategories">
                                <a href="javascript:void(0)" class="category-link">No Ficción</a>
                                <span class="category-toggle">
                      <i class="bi bi-chevron-down"></i>
                      <i class="bi bi-chevron-up"></i>
                    </span>
                            </div>
                            <ul id="categories-1-nonfiction-subcategories" class="subcategory-list list-unstyled collapse ps-3 mt-2">
                                <li><a href="#" class="subcategory-link">Biografías</a></li>
                                <li><a href="#" class="subcategory-link">Historia</a></li>
                                <li><a href="#" class="subcategory-link">Ciencia</a></li>
                                <li><a href="#" class="subcategory-link">Ensayo</a></li>
                            </ul>
                        </li>

                        <!-- Mystery & Thriller Category -->
                        <li class="category-item">
                            <div class="d-flex justify-content-between align-items-center category-header collapsed" data-bs-toggle="collapse" data-bs-target="#categories-1-mystery-subcategories" aria-expanded="false" aria-controls="categories-1-mystery-subcategories">
                                <a href="javascript:void(0)" class="category-link">Misterio &amp; Thriller</a>
                                <span class="category-toggle">
                      <i class="bi bi-chevron-down"></i>
                      <i class="bi bi-chevron-up"></i>
                    </span>
                            </div>
                            <ul id="categories-1-mystery-subcategories" class="subcategory-list list-unstyled collapse ps-3 mt-2">
                                <li><a href="#" class="subcategory-link">Suspense</a></li>
                                <li><a href="#" class="subcategory-link">Noir</a></li>
                                <li><a href="#" class="subcategory-link">Policiaca</a></li>
                                <li><a href="#" class="subcategory-link">Crimen</a></li>
                            </ul>
                        </li>

                        <!-- Self-Help & Wellness Category -->
                        <li class="category-item">
                            <div class="d-flex justify-content-between align-items-center category-header collapsed" data-bs-toggle="collapse" data-bs-target="#categories-1-selfhelp-subcategories" aria-expanded="false" aria-controls="categories-1-selfhelp-subcategories">
                                <a href="javascript:void(0)" class="category-link">Autoayuda &amp; Bienestar</a>
                                <span class="category-toggle">
                      <i class="bi bi-chevron-down"></i>
                      <i class="bi bi-chevron-up"></i>
                    </span>
                            </div>
                            <ul id="categories-1-selfhelp-subcategories" class="subcategory-list list-unstyled collapse ps-3 mt-2">
                                <li><a href="#" class="subcategory-link">Desarrollo Personal</a></li>
                                <li><a href="#" class="subcategory-link">Psicología</a></li>
                                <li><a href="#" class="subcategory-link">Salud</a></li>
                                <li><a href="#" class="subcategory-link">Mindfulness</a></li>
                            </ul>
                        </li>

                        <!-- Business & Economics Category -->
                        <li class="category-item">
                            <div class="d-flex justify-content-between align-items-center category-header collapsed" data-bs-toggle="collapse" data-bs-target="#categories-1-business-subcategories" aria-expanded="false" aria-controls="categories-1-business-subcategories">
                                <a href="javascript:void(0)" class="category-link">Negocios &amp; Economía</a>
                                <span class="category-toggle">
                      <i class="bi bi-chevron-down"></i>
                      <i class="bi bi-chevron-up"></i>
                    </span>
                            </div>
                            <ul id="categories-1-business-subcategories" class="subcategory-list list-unstyled collapse ps-3 mt-2">
                                <li><a href="#" class="subcategory-link">Emprendimiento</a></li>
                                <li><a href="#" class="subcategory-link">Marketing</a></li>
                                <li><a href="#" class="subcategory-link">Finanzas</a></li>
                                <li><a href="#" class="subcategory-link">Management</a></li>
                            </ul>
                        </li>

                        <!-- Children & YA Category (no subcategories) -->
                        <li class="category-item">
                            <div class="d-flex justify-content-between align-items-center category-header">
                                <a href="#" class="category-link">Infantil &amp; Juvenil</a>
                            </div>
                        </li>

                        <!-- Comics & Graphic Novels Category -->
                        <li class="category-item">
                            <div class="d-flex justify-content-between align-items-center category-header collapsed" data-bs-toggle="collapse" data-bs-target="#categories-1-comics-subcategories" aria-expanded="false" aria-controls="categories-1-comics-subcategories">
                                <a href="javascript:void(0)" class="category-link">Cómics &amp; Novela Gráfica</a>
                                <span class="category-toggle">
                      <i class="bi bi-chevron-down"></i>
                      <i class="bi bi-chevron-up"></i>
                    </span>
                            </div>
                            <ul id="categories-1-comics-subcategories" class="subcategory-list list-unstyled collapse ps-3 mt-2">
                                <li><a href="#" class="subcategory-link">Manga</a></li>
                                <li><a href="#" class="subcategory-link">Superhéroes</a></li>
                                <li><a href="#" class="subcategory-link">Europeo</a></li>
                                <li><a href="#" class="subcategory-link">Alternativo</a></li>
                            </ul>
                        </li>
                    </ul>

                </div><!--/Product Categories Widget -->

                <!-- Pricing Range Widget -->
                <div class="pricing-range-widget widget-item">

                    <h3 class="widget-title">Rango de Precio</h3>

                    <div class="price-range-container">
                        <div class="current-range mb-3">
                            <span class="min-price">0€</span>
                            <span class="max-price float-end">50€</span>
                        </div>

                        <div class="range-slider">
                            <div class="slider-track"></div>
                            <div class="slider-progress"></div>
                            <input type="range" class="min-range" min="0" max="50" value="0" step="1">
                            <input type="range" class="max-range" min="0" max="50" value="25" step="1">
                        </div>

                        <div class="price-inputs mt-3">
                            <div class="row g-2">
                                <div class="col-6">
                                    <div class="input-group input-group-sm">
                                        <input type="number" class="form-control min-price-input" placeholder="Mín" min="0" max="50" value="0" step="1">
                                        <span class="input-group-text">€</span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group input-group-sm">
                                        <input type="number" class="form-control max-price-input" placeholder="Máx" min="0" max="50" value="25" step="1">
                                        <span class="input-group-text">€</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="filter-actions mt-3">
                            <button type="button" class="btn btn-sm btn-primary w-100">Aplicar Filtro</button>
                        </div>
                    </div>

                </div><!--/Pricing Range Widget -->

                <!-- Format Filter Widget -->
                <div class="color-filter-widget widget-item">

                    <h3 class="widget-title">Filtrar por Formato</h3>

                    <div class="color-filter-content">
                        <div class="color-options">
                            <div class="form-check color-option">
                                <input class="form-check-input" type="checkbox" value="epub" id="format-epub">
                                <label class="form-check-label" for="format-epub">
                                    <span class="color-swatch" style="background-color: #3498db;" title="ePub">ePub</span>
                                </label>
                            </div>

                            <div class="form-check color-option">
                                <input class="form-check-input" type="checkbox" value="pdf" id="format-pdf">
                                <label class="form-check-label" for="format-pdf">
                                    <span class="color-swatch" style="background-color: #e74c3c;" title="PDF">PDF</span>
                                </label>
                            </div>

                            <div class="form-check color-option">
                                <input class="form-check-input" type="checkbox" value="mobi" id="format-mobi">
                                <label class="form-check-label" for="format-mobi">
                                    <span class="color-swatch" style="background-color: #2ecc71;" title="Mobi">Mobi</span>
                                </label>
                            </div>

                            <div class="form-check color-option">
                                <input class="form-check-input" type="checkbox" value="azw3" id="format-azw3">
                                <label class="form-check-label" for="format-azw3">
                                    <span class="color-swatch" style="background-color: #f39c12;" title="AZW3">AZW3</span>
                                </label>
                            </div>
                        </div>

                        <div class="filter-actions mt-3">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Limpiar Todo</button>
                            <button type="button" class="btn btn-sm btn-primary">Aplicar Filtro</button>
                        </div>
                    </div>

                </div><!--/Format Filter Widget -->

                <!-- Publisher Filter Widget -->
                <div class="brand-filter-widget widget-item">

                    <h3 class="widget-title">Filtrar por Editorial</h3>

                    <div class="brand-filter-content">
                        <div class="brand-search">
                            <input type="text" class="form-control" placeholder="Buscar editoriales...">
                            <i class="bi bi-search"></i>
                        </div>

                        <div class="brand-list">
                            <div class="brand-item">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="publisher1">
                                    <label class="form-check-label" for="publisher1">
                                        Planeta
                                        <span class="brand-count">(124)</span>
                                    </label>
                                </div>
                            </div>

                            <div class="brand-item">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="publisher2">
                                    <label class="form-check-label" for="publisher2">
                                        Anagrama
                                        <span class="brand-count">(98)</span>
                                    </label>
                                </div>
                            </div>

                            <div class="brand-item">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="publisher3">
                                    <label class="form-check-label" for="publisher3">
                                        Alfaguara
                                        <span class="brand-count">(87)</span>
                                    </label>
                                </div>
                            </div>

                            <div class="brand-item">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="publisher4">
                                    <label class="form-check-label" for="publisher4">
                                        Tusquets
                                        <span class="brand-count">(76)</span>
                                    </label>
                                </div>
                            </div>

                            <div class="brand-item">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="publisher5">
                                    <label class="form-check-label" for="publisher5">
                                        Salamandra
                                        <span class="brand-count">(65)</span>
                                    </label>
                                </div>
                            </div>

                            <div class="brand-item">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="publisher6">
                                    <label class="form-check-label" for="publisher6">
                                        Destino
                                        <span class="brand-count">(54)</span>
                                    </label>
                                </div>
                            </div>

                            <div class="brand-item">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="publisher7">
                                    <label class="form-check-label" for="publisher7">
                                        RBA
                                        <span class="brand-count">(43)</span>
                                    </label>
                                </div>
                            </div>

                            <div class="brand-item">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="publisher8">
                                    <label class="form-check-label" for="publisher8">
                                        Seix Barral
                                        <span class="brand-count">(39)</span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="brand-actions">
                            <button class="btn btn-sm btn-outline-primary">Aplicar Filtro</button>
                            <button class="btn btn-sm btn-link">Limpiar Todo</button>
                        </div>
                    </div>

                </div><!--/Publisher Filter Widget -->

            </div>

        </div>

        <div class="col-lg-8">

            <!-- Category Header Section -->
            <section id="category-header" class="category-header section">

                <div class="container" data-aos="fade-up">

                    <!-- Filter and Sort Options -->
                    <div class="filter-container mb-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="row g-3">
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="filter-item search-form">
                                    <label for="productSearch" class="form-label">Buscar Libros</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="productSearch" placeholder="Buscar libros..." aria-label="Buscar libros">
                                        <button class="btn search-btn" type="button">
                                            <i class="bi bi-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-2">
                                <div class="filter-item">
                                    <label for="priceRange" class="form-label">Rango de Precio</label>
                                    <select class="form-select" id="priceRange">
                                        <option selected="">Todos los Precios</option>
                                        <option>Menos de 5€</option>
                                        <option>5€ a 10€</option>
                                        <option>10€ a 15€</option>
                                        <option>15€ a 20€</option>
                                        <option>Más de 20€</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-2">
                                <div class="filter-item">
                                    <label for="sortBy" class="form-label">Ordenar Por</label>
                                    <select class="form-select" id="sortBy">
                                        <option selected="">Destacados</option>
                                        <option>Precio: Menor a Mayor</option>
                                        <option>Precio: Mayor a Menor</option>
                                        <option>Valoración</option>
                                        <option>Más Recientes</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="filter-item">
                                    <label class="form-label">Vista</label>
                                    <div class="d-flex align-items-center">
                                        <div class="view-options me-3">
                                            <button type="button" class="btn view-btn active" data-view="grid" aria-label="Vista cuadrícula">
                                                <i class="bi bi-grid-3x3-gap-fill"></i>
                                            </button>
                                            <button type="button" class="btn view-btn" data-view="list" aria-label="Vista lista">
                                                <i class="bi bi-list-ul"></i>
                                            </button>
                                        </div>
                                        <div class="items-per-page">
                                            <select class="form-select" id="itemsPerPage" aria-label="Libros por página">
                                                <option value="12">12 por página</option>
                                                <option value="24">24 por página</option>
                                                <option value="48">48 por página</option>
                                                <option value="96">96 por página</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-12" data-aos="fade-up" data-aos-delay="200">
                                <div class="active-filters">
                                    <span class="active-filter-label">Filtros Activos:</span>
                                    <div class="filter-tags">
                        <span class="filter-tag">
                          Ficción <button class="filter-remove"><i class="bi bi-x"></i></button>
                        </span>
                                        <span class="filter-tag">
                          5€ a 10€ <button class="filter-remove"><i class="bi bi-x"></i></button>
                        </span>
                                        <button class="clear-all-btn">Limpiar Todo</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </section><!-- /Category Header Section -->

            <!-- Category Product List Section -->
            <section id="category-product-list" class="category-product-list section">

                <div class="container" data-aos="fade-up" data-aos-delay="100">

                    <div class="row g-4">
                        <!-- Product 1 -->
                        <div class="col-6 col-xl-4">
                            <div class="product-card" data-aos="zoom-in">
                                <div class="product-image">
                                    <img src="<?=DIRECTORIO_FRONTEND_IMG_PRODUCT?>product-f-1.webp" class="main-image img-fluid" alt="Product">
                                    <img src="<?=DIRECTORIO_FRONTEND_IMG_PRODUCT?>product-f-2.webp" class="hover-image img-fluid" alt="Product Variant">
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
                                    <div class="product-category">Ficción Histórica</div>
                                    <h4 class="product-title"><a href="/productDetails">Los Pilares de la Tierra</a></h4>
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
                        <div class="col-6 col-xl-4">
                            <div class="product-card" data-aos="zoom-in" data-aos-delay="100">
                                <div class="product-image">
                                    <img src="<?=DIRECTORIO_FRONTEND_IMG_PRODUCT?>product-m-1.webp" class="main-image img-fluid" alt="Product">
                                    <img src="<?=DIRECTORIO_FRONTEND_IMG_PRODUCT?>product-m-2.webp" class="hover-image img-fluid" alt="Product Variant">
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
                                    <div class="product-category">Ciencia Ficción</div>
                                    <h4 class="product-title"><a href="/productDetails">Dune</a></h4>
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
                        <div class="col-6 col-xl-4">
                            <div class="product-card" data-aos="zoom-in" data-aos-delay="200">
                                <div class="product-image">
                                    <img src="<?=DIRECTORIO_FRONTEND_IMG_PRODUCT?>product-f-3.webp" class="main-image img-fluid" alt="Product">
                                    <img src="<?=DIRECTORIO_FRONTEND_IMG_PRODUCT?>product-f-4.webp" class="hover-image img-fluid" alt="Product Variant">
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
                                    <h4 class="product-title"><a href="/productDetails">Orgullo y Prejuicio</a></h4>
                                    <div class="product-meta">
                                        <div class="product-price">
                                            7,99€
                                            <span class="original-price">10,99€</span>
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
                        <div class="col-6 col-xl-4">
                            <div class="product-card" data-aos="zoom-in" data-aos-delay="300">
                                <div class="product-image">
                                    <img src="<?=DIRECTORIO_FRONTEND_IMG_PRODUCT?>product-m-3.webp" class="main-image img-fluid" alt="Product">
                                    <img src="<?=DIRECTORIO_FRONTEND_IMG_PRODUCT?>product-m-4.webp" class="hover-image img-fluid" alt="Product Variant">
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
                                    <div class="product-category">Thriller</div>
                                    <h4 class="product-title"><a href="/productDetails">La Chica del Tren</a></h4>
                                    <div class="product-meta">
                                        <div class="product-price">13,99€</div>
                                        <div class="product-rating">
                                            <i class="bi bi-star-fill"></i>
                                            4.7 <span>(35)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Product 5 -->
                        <div class="col-6 col-xl-4">
                            <div class="product-card" data-aos="zoom-in" data-aos-delay="400">
                                <div class="product-image">
                                    <img src="<?=DIRECTORIO_FRONTEND_IMG_PRODUCT?>product-f-5.webp" class="main-image img-fluid" alt="Product">
                                    <img src="<?=DIRECTORIO_FRONTEND_IMG_PRODUCT?>product-f-6.webp" class="hover-image img-fluid" alt="Product Variant">
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
                                    <h4 class="product-title"><a href="/productDetails">El Nombre del Viento</a></h4>
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
                        <div class="col-6 col-xl-4">
                            <div class="product-card" data-aos="zoom-in" data-aos-delay="500">
                                <div class="product-image">
                                    <img src="<?=DIRECTORIO_FRONTEND_IMG_PRODUCT?>product-m-5.webp" class="main-image img-fluid" alt="Product">
                                    <img src="<?=DIRECTORIO_FRONTEND_IMG_PRODUCT?>product-m-6.webp" class="hover-image img-fluid" alt="Product Variant">
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
                                    <div class="product-category">No Ficción</div>
                                    <h4 class="product-title"><a href="/productDetails">Sapiens</a></h4>
                                    <div class="product-meta">
                                        <div class="product-price">
                                            13,99€
                                            <span class="original-price">16,99€</span>
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
                        <div class="col-6 col-xl-4">
                            <div class="product-card" data-aos="zoom-in" data-aos-delay="600">
                                <div class="product-image">
                                    <img src="<?=DIRECTORIO_FRONTEND_IMG_PRODUCT?>product-f-7.webp" class="main-image img-fluid" alt="Product">
                                    <img src="<?=DIRECTORIO_FRONTEND_IMG_PRODUCT?>product-f-8.webp" class="hover-image img-fluid" alt="Product Variant">
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
                                    <h4 class="product-title"><a href="/productDetails">El Poder del Ahora</a></h4>
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
                        <div class="col-6 col-xl-4">
                            <div class="product-card" data-aos="zoom-in" data-aos-delay="700">
                                <div class="product-image">
                                    <img src="<?=DIRECTORIO_FRONTEND_IMG_PRODUCT?>product-m-7.webp" class="main-image img-fluid" alt="Product">
                                    <img src="<?=DIRECTORIO_FRONTEND_IMG_PRODUCT?>product-m-8.webp" class="hover-image img-fluid" alt="Product Variant">
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
                                    <h4 class="product-title"><a href="/productDetails">Steve Jobs</a></h4>
                                    <div class="product-meta">
                                        <div class="product-price">15,99€</div>
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

            </section><!-- /Category Product List Section -->

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

        </div>

    </div>
</div>

<?php
include_once DIRECTORIO_FRONTEND_LAYOUTS . "footer.php";
?>