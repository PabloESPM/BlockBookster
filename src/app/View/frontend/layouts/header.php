<header id="header" class="header sticky-top">
    <!-- Top Bar -->
    <div class="top-bar py-2">
        <div class="container-fluid container-xl">
            <div class="row align-items-center">
                <div class="col-lg-4 d-none d-lg-flex">
                    <div class="top-bar-item">
                        <i class="bi bi-telephone-fill me-2"></i>
                        <span>¿Necesitas ayuda? Llámanos: </span>
                        <a href="tel:+1234567890">+1 (234) 567-890</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 text-center">
                    <div class="announcement-slider swiper init-swiper">
                        <script type="application/json" class="swiper-config">
                            {
                                "loop": true,
                                "speed": 600,
                                "autoplay": {
                                    "delay": 5000
                                },
                                "slidesPerView": 1,
                                "direction": "vertical",
                                "effect": "slide"
                            }
                        </script>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">📚 Envío gratuito en pedidos superiores a 50 €</div>
                            <div class="swiper-slide">💸 Garantía de devolución durante 30 días</div>
                            <div class="swiper-slide">🎉 20% de descuento en tu primera compra</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 d-none d-lg-block">
                    <div class="d-flex justify-content-end">
                        <div class="top-bar-item dropdown me-3">
                            <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                                <i class="bi bi-translate me-2"></i>ES
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#"><i class="bi bi-check2 me-2 selected-icon"></i>Español</a></li>
                                <li><a class="dropdown-item" href="#">English</a></li>
                                <li><a class="dropdown-item" href="#">Français</a></li>
                                <li><a class="dropdown-item" href="#">Deutsch</a></li>
                            </ul>
                        </div>
                        <div class="top-bar-item dropdown">
                            <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                                <i class="bi bi-currency-dollar me-2"></i>EUR
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#"><i class="bi bi-check2 me-2 selected-icon"></i>EUR</a></li>
                                <li><a class="dropdown-item" href="#">USD</a></li>
                                <li><a class="dropdown-item" href="#">GBP</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Header -->
    <div class="main-header">
        <div class="container-fluid container-xl">
            <div class="d-flex py-3 align-items-center justify-content-between">

                <!-- Logo -->
                <a href="/inicio" class="logo d-flex align-items-center">
                    <!-- <img src="assets/img/logo.webp" alt=""> -->
                    <h1 class="sitename">BlockBookster</h1>
                </a>

                <!-- Search -->
                <form class="search-form desktop-search-form">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Busca tu próximo libro...">
                        <button class="btn" type="submit">
                            <i class="bi bi-search"></i>
                        </button>
                    </div>
                </form>

                <!-- Actions -->
                <div class="header-actions d-flex align-items-center justify-content-end">

                    <!-- Mobile Search Toggle -->
                    <button class="header-action-btn mobile-search-toggle d-xl-none" type="button" data-bs-toggle="collapse" data-bs-target="#mobileSearch" aria-expanded="false" aria-controls="mobileSearch">
                        <i class="bi bi-search"></i>
                    </button>

                    <!-- Account -->
                    <div class="dropdown account-dropdown">
                        <button class="header-action-btn" data-bs-toggle="dropdown">
                            <i class="bi bi-person"></i>
                        </button>
                        <div class="dropdown-menu">
                            <div class="dropdown-header">
                                <h6>Bienvenido a <span class="sitename">BlockBookster</span></h6>
                                <p class="mb-0">Accede a tu cuenta y gestiona tus lecturas</p>
                            </div>
                            <div class="dropdown-body">
                                <a class="dropdown-item d-flex align-items-center" href="/account">
                                    <i class="bi bi-person-circle me-2"></i>
                                    <span>Mi perfil</span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="/account">
                                    <i class="bi bi-bag-check me-2"></i>
                                    <span>Mis pedidos</span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="/account">
                                    <i class="bi bi-heart me-2"></i>
                                    <span>Favoritos</span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="/account">
                                    <i class="bi bi-gear me-2"></i>
                                    <span>Configuración</span>
                                </a>
                            </div>
                            <div class="dropdown-footer">
                                <a href="/login" class="btn btn-primary w-100 mb-2">Iniciar sesión</a>
                                <a href="/register" class="btn btn-outline-primary w-100">Registrarse</a>
                            </div>
                        </div>
                    </div>

                    <!-- Wishlist -->
                    <a href="/account" class="header-action-btn d-none d-md-block">
                        <i class="bi bi-heart"></i>
                        <span class="badge">0</span>
                    </a>

                    <!-- Cart -->
                    <a href="/cart" class="header-action-btn">
                        <i class="bi bi-cart3"></i>
                        <span class="badge">3</span>
                    </a>

                    <!-- Mobile Navigation Toggle -->
                    <i class="mobile-nav-toggle d-xl-none bi bi-list me-0"></i>

                </div>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <div class="header-nav">
        <div class="container-fluid container-xl position-relative">
            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="/inicio" class="active">Inicio</a></li>
                    <li><a href="/about">Sobre nosotros</a></li>
                    <li><a href="/category">Categorías</a></li>
                    <li><a href="/productDetails">Detalles del libro</a></li>
                    <li><a href="/checkout">Finalizar compra</a></li>
                    <!--<li><a href="/adminInicio">Administración</a></li>-->

                    <!-- Productos Mega Menu adaptado -->
                    <li class="products-megamenu-2"><a href="#"><span>Colecciones</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>

                        <!-- Vista móvil -->
                        <ul class="mobile-megamenu">
                            <li><a href="#">Ficción</a></li>
                            <li><a href="#">No ficción</a></li>
                            <li><a href="#">Infantil</a></li>

                            <li class="dropdown"><a href="#"><span>Géneros</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                                <ul>
                                    <li><a href="#">Novelas</a></li>
                                    <li><a href="#">Ensayos</a></li>
                                    <li><a href="#">Poesía</a></li>
                                    <li><a href="#">Ciencia ficción</a></li>
                                    <li><a href="#">Fantasía</a></li>
                                    <li><a href="#">Romántica</a></li>
                                </ul>
                            </li>

                            <li class="dropdown"><a href="#"><span>Autores destacados</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                                <ul>
                                    <li><a href="#">Autores del mes</a></li>
                                    <li><a href="#">Nuevas voces</a></li>
                                    <li><a href="#">Clásicos</a></li>
                                </ul>
                            </li>

                            <li class="dropdown"><a href="#"><span>Temáticas</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                                <ul>
                                    <li><a href="#">Autoayuda</a></li>
                                    <li><a href="#">Negocios</a></li>
                                    <li><a href="#">Tecnología</a></li>
                                    <li><a href="#">Historia</a></li>
                                    <li><a href="#">Arte y cultura</a></li>
                                </ul>
                            </li>
                        </ul>

                        <!-- Vista escritorio -->
                        <div class="desktop-megamenu">
                            <div class="megamenu-tabs">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="fiction-tab" data-bs-toggle="tab" data-bs-target="#fiction-content" type="button" aria-selected="true" role="tab">FICCIÓN</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="nonfiction-tab" data-bs-toggle="tab" data-bs-target="#nonfiction-content" type="button" aria-selected="false" tabindex="-1" role="tab">NO FICCIÓN</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="kids-tab" data-bs-toggle="tab" data-bs-target="#kids-content" type="button" aria-selected="false" tabindex="-1" role="tab">INFANTIL</button>
                                    </li>
                                </ul>
                            </div>

                            <div class="megamenu-content tab-content">
                                <!-- Ficción -->
                                <div class="tab-pane fade show active" id="fiction-content" role="tabpanel" aria-labelledby="fiction-tab">
                                    <div class="category-layout">
                                        <div class="categories-section">
                                            <div class="category-headers">
                                                <h4>Novelas</h4>
                                                <h4>Fantasía</h4>
                                                <h4>Misterio</h4>
                                                <h4>Romántica</h4>
                                            </div>
                                            <div class="category-links">
                                                <div class="link-row">
                                                    <a href="#">Bestsellers</a>
                                                    <a href="#">Nuevos lanzamientos</a>
                                                    <a href="#">Autores españoles</a>
                                                    <a href="#">Adaptaciones al cine</a>
                                                </div>
                                                <div class="link-row">
                                                    <a href="#">Premiados</a>
                                                    <a href="#">Juvenil</a>
                                                    <a href="#">Relatos cortos</a>
                                                    <a href="#">Colecciones completas</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="featured-section">
                                            <div class="featured-image">
                                                <img src="<?=DIRECTORIO_FRONTEND_IMG?>/product/product-f-1.webp" alt="Colección de novelas de fantasía">
                                                <div class="featured-content">
                                                    <h3>Colección<br>de Fantasía<br>2025</h3>
                                                    <a href="#" class="btn-shop">Explorar</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- No ficción -->
                                <div class="tab-pane fade" id="nonfiction-content" role="tabpanel" aria-labelledby="nonfiction-tab">
                                    <div class="category-layout">
                                        <div class="categories-section">
                                            <div class="category-headers">
                                                <h4>Ensayo</h4>
                                                <h4>Negocios</h4>
                                                <h4>Tecnología</h4>
                                                <h4>Historia</h4>
                                            </div>
                                            <div class="category-links">
                                                <div class="link-row">
                                                    <a href="#">Economía</a>
                                                    <a href="#">Ciencia</a>
                                                    <a href="#">Biografías</a>
                                                    <a href="#">Psicología</a>
                                                </div>
                                                <div class="link-row">
                                                    <a href="#">Política</a>
                                                    <a href="#">Divulgación</a>
                                                    <a href="#">Viajes</a>
                                                    <a href="#">Arte</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="featured-section">
                                            <div class="featured-image">
                                                <img src="<?=DIRECTORIO_FRONTEND_IMG?>/product/product-m-4.webp" alt="Colección de ensayo y divulgación">
                                                <div class="featured-content">
                                                    <h3>Lecturas<br>que inspiran<br>y enseñan</h3>
                                                    <a href="#" class="btn-shop">Ver más</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Infantil -->
                                <div class="tab-pane fade" id="kids-content" role="tabpanel" aria-labelledby="kids-tab">
                                    <div class="category-layout">
                                        <div class="categories-section">
                                            <div class="category-headers">
                                                <h4>Primeras lecturas</h4>
                                                <h4>Cuentos</h4>
                                                <h4>Aventura</h4>
                                                <h4>Educativos</h4>
                                            </div>
                                            <div class="category-links">
                                                <div class="link-row">
                                                    <a href="#">0 a 3 años</a>
                                                    <a href="#">4 a 6 años</a>
                                                    <a href="#">7 a 10 años</a>
                                                    <a href="#">11 a 14 años</a>
                                                </div>
                                                <div class="link-row">
                                                    <a href="#">Clásicos infantiles</a>
                                                    <a href="#">Libros ilustrados</a>
                                                    <a href="#">Lecturas escolares</a>
                                                    <a href="#">Recomendados por docentes</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="featured-section">
                                            <div class="featured-image">
                                                <img src="<?=DIRECTORIO_FRONTEND_IMG?>/product/product-9.webp" alt="Novedades infantiles">
                                                <div class="featured-content">
                                                    <h3>Nuevas<br>aventuras<br>para niños</h3>
                                                    <a href="#" class="btn-shop">Descubrir</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </li>

                    <li><a href="/contact">Contacto</a></li>
                </ul>
            </nav>
        </div>
    </div>

    <!-- Mobile Search Form -->
    <div class="collapse" id="mobileSearch">
        <div class="container">
            <form class="search-form">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Busca tu próximo libro...">
                    <button class="btn" type="submit">
                        <i class="bi bi-search"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</header>
<main class="main">
