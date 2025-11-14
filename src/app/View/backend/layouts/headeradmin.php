<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">BlockBookster</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
    <div class="navbar-nav ms-3">
        <div class="nav-item text-nowrap d-flex align-items-center">
            <p class="text-white mb-0 me-3">Bienvenido, <strong><?php if (isset($_SESSION['user'])){echo $_SESSION['user']->getUsername();}else{echo 'desconocido';}?></strong></p>
            <a class="nav-link px-3" href="/logout">
                <button class="btn btn-danger btn-sm" type="button">Cerrar Sesión</button>
            </a>
        </div>
    </div>
</header>
