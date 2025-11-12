<?php
$title = "Usuarios Registrados - Block Bookster";
include_once DIRECTORIO_BACKEND_LAYOUTS . "headadmin.php";
include_once DIRECTORIO_BACKEND_LAYOUTS . "headeradmin.php";
include_once DIRECTORIO_BACKEND_LAYOUTS . "navadmin.php";
$tituloSeccion = "Usuarios Registrados";
include_once DIRECTORIO_BACKEND_LAYOUTS . "mainadmin.php";
?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
    <div>
        <h2 class="h2 mb-1">Listado de Usuarios</h2>
        <p class="text-muted mb-0">Gestiona los usuarios registrados en la plataforma</p>
    </div>
    <div class="btn-toolbar mb-2 mb-md-0">
        <button type="button" class="btn btn-primary">
            <i class="bi bi-person-plus-fill me-2"></i>Añadir Usuario
        </button>
    </div>
</div>

<!-- Estadísticas rápidas -->
<div class="row mb-4">
    <div class="col-md-4 mb-3">
        <div class="card border-0 shadow-sm">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                        <div class="bg-primary bg-opacity-10 p-3 rounded">
                            <i class="bi bi-people-fill text-primary fs-4"></i>
                        </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h6 class="text-muted mb-1">Total Usuarios</h6>
                        <h4 class="mb-0"><?= count($usuarios) ?></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <div class="card border-0 shadow-sm">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                        <div class="bg-success bg-opacity-10 p-3 rounded">
                            <i class="bi bi-shield-check text-success fs-4"></i>
                        </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h6 class="text-muted mb-1">Administradores</h6>
                        <h4 class="mb-0"><?= count(array_filter($usuarios, fn($u) => $u->getType()->name === 'ADMIN')) ?></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <div class="card border-0 shadow-sm">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                        <div class="bg-info bg-opacity-10 p-3 rounded">
                            <i class="bi bi-briefcase-fill text-info fs-4"></i>
                        </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h6 class="text-muted mb-1">Workers</h6>
                        <h4 class="mb-0"><?= count(array_filter($usuarios, fn($u) => $u->getType()->name === 'WORKER')) ?></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Tabla de usuarios -->
<div class="card border-0 shadow-sm">
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="bg-light">
                <tr>
                    <th scope="col" class="ps-4">Avatar</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Email</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">Fecha de Nacimiento</th>
                    <th scope="col">País</th>
                    <th scope="col">Rol</th>
                    <th scope="col" class="text-end pe-4">Acciones</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($usuarios as $usuario): ?>
                    <tr>
                        <!-- Avatar -->
                        <td class="ps-4">
                            <div class="user-avatar"
                                 style="background-image: url('/app/View/backend/img/avatar.svg');">
                            </div>
                        </td>

                        <!-- Nombre -->
                        <td>
                            <span class="fw-semibold"><?= $usuario->getUsername() ?></span>
                        </td>

                        <!-- Email -->
                        <td>
                            <span class="text-muted"><?= $usuario->getEmail() ?></span>
                        </td>

                        <!-- Teléfono -->
                        <td>
                            <div class="d-flex align-items-center">
                                <i class="bi bi-telephone me-2 text-muted"></i>
                                <span><?= $usuario->getTelephone() ?></span>
                            </div>
                        </td>

                        <!-- Fecha de Nacimiento -->
                        <td>
                            <span class="badge bg-light text-dark border">
                                <?= $usuario->getBirthdate()?->format('d/m/Y') ?? '—' ?>
                            </span>
                        </td>

                        <!-- País -->
                        <td>
                            <div class="d-flex align-items-center">
                                <i class="bi bi-geo-alt me-2 text-muted"></i>
                                <span><?= $usuario->getCountry() ?? 'España' ?></span>
                            </div>
                        </td>

                        <!-- Rol -->
                        <td>
                            <select class="form-select form-select-sm role-select" name="role" data-user-id="<?= $usuario->getId() ?>">
                                <option value="REGULAR" <?= $usuario->getType()->name === 'REGULAR' ? 'selected' : '' ?>>
                                    👤 Normal
                                </option>
                                <option value="EDITOR" <?= $usuario->getType()->name === 'EDITOR' ? 'selected' : '' ?>>
                                    💼 Worker
                                </option>
                                <option value="ADMIN" <?= $usuario->getType()->name === 'ADMIN' ? 'selected' : '' ?>>
                                    ⚡ Admin
                                </option>
                            </select>
                        </td>

                        <!-- Acciones -->
                        <td class="text-end pe-4">
                            <div class="btn-group btn-group-sm" role="group">
                                <!-- Botón Ver Perfil -->
                                <a href="/user/<?= $usuario->getId() ?>"
                                   class="btn btn-outline-info"
                                   title="Ver perfil"
                                   data-bs-toggle="tooltip">
                                    <i class="bi bi-eye-fill"></i>
                                </a>

                                <!-- Botón Eliminar Usuario -->
                                <button type="button"
                                        class="btn btn-outline-danger btn-delete-user"
                                        data-user-id="<?= $usuario->getId() ?>"
                                        data-user-name="<?= htmlspecialchars($usuario->getUsername()) ?>"
                                        title="Eliminar usuario"
                                        data-bs-toggle="tooltip">
                                    <i class="bi bi-trash-fill"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<style>
    /* Mejoras generales de la tabla */
    .table {
        font-size: 0.9rem;
    }

    .table thead th {
        font-weight: 600;
        text-transform: uppercase;
        font-size: 0.75rem;
        letter-spacing: 0.5px;
        color: #6c757d;
        border-bottom: 2px solid #dee2e6;
        padding: 1rem 0.75rem;
    }

    .table tbody tr {
        border-bottom: 1px solid #f0f0f0;
    }

    .table tbody tr:hover {
        background-color: #f8f9fa;
    }

    .table td {
        padding: 1rem 0.75rem;
        vertical-align: middle;
    }

    /* Avatar de usuario mejorado */
    .user-avatar {
        width: 45px;
        height: 45px;
        border-radius: 50%;
        background-color: #e9ecef;
        background-size: cover;
        background-position: center;
        border: 3px solid #fff;
        box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        flex-shrink: 0;
        margin: 0 auto;
    }

    /* Select de rol mejorado */
    .role-select {
        min-width: 130px;
        border: 1px solid #dee2e6;
        border-radius: 6px;
        font-weight: 500;
        cursor: pointer;
        transition: all 0.2s ease;
    }

    .role-select:hover {
        border-color: #0d6efd;
        box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.1);
    }

    .role-select:focus {
        border-color: #0d6efd;
        box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
    }

    /* Botones de acción mejorados */
    .btn-group-sm > .btn {
        padding: 0.4rem 0.75rem;
        font-size: 0.875rem;
        border-radius: 6px;
    }

    .btn-outline-info {
        border-color: #17a2b8;
        color: #17a2b8;
    }

    .btn-outline-info:hover {
        background-color: #17a2b8;
        border-color: #17a2b8;
        color: white;
    }

    .btn-outline-danger {
        border-color: #dc3545;
        color: #dc3545;
    }

    .btn-outline-danger:hover {
        background-color: #dc3545;
        border-color: #dc3545;
        color: white;
    }

    .btn-group .btn {
        transition: all 0.2s ease;
    }

    /* Cards de estadísticas */
    .card {
        transition: none;
    }

    /* Badge para fechas */
    .badge {
        font-weight: 500;
        padding: 0.4rem 0.65rem;
    }
</style>

<?php
include_once DIRECTORIO_BACKEND_LAYOUTS . "footeradmin.php";
?>


