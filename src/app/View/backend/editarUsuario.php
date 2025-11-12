<?php
$title = "Editar Usuario - Block Bookster";
include_once DIRECTORIO_BACKEND_LAYOUTS . "headadmin.php";
include_once DIRECTORIO_BACKEND_LAYOUTS . "headeradmin.php";
include_once DIRECTORIO_BACKEND_LAYOUTS . "navadmin.php";
$tituloSeccion = "Editar Usuario " . $usuario->getUsername();
include_once DIRECTORIO_BACKEND_LAYOUTS . "mainadmin.php";

// El usuario viene del controlador
$usuario = $usuario ?? null;
?>

<!-- Breadcrumb -->
<nav aria-label="breadcrumb" class="mb-3">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/adminInicio">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="/listaUsuarios">Usuarios</a></li>
        <li class="breadcrumb-item"><a href="/user/<?= $usuario->getId() ?>">
                <?= $usuario->getUsername() ?>
            </a></li>
        <li class="breadcrumb-item active" aria-current="page">Editar</li>
    </ol>
</nav>

<!-- Header -->
<div class="row mb-4">
    <div class="col-12">
        <div class="card border-0 shadow-sm">
            <div class="card-body p-4">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <div class="user-avatar-large"
                             style="background-image: url('/app/View/backend/img/avatar.svg');">
                        </div>
                    </div>
                    <div class="col">
                        <h3 class="mb-1">Editar Usuario</h3>
                        <p class="text-muted mb-0">
                            Modificando el perfil de <strong><?= $usuario->getUsername() ?></strong>
                        </p>
                    </div>
                    <div class="col-auto">
                        <div class="btn-group">
                            <a href="/user/<?= $usuario->getId() ?>" class="btn btn-outline-secondary">
                                <i class="bi bi-arrow-left me-2"></i>Volver
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<form action="/admin/usuarios/<?= $usuario->getId() ?>/update" method="POST">
    <input type="hidden" name="_method" value="PUT">

    <div class="row">
        <!-- Columna izquierda -->
        <div class="col-lg-8">
            <!-- Información Personal -->
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-header bg-white border-0 py-3">
                    <h5 class="mb-0">
                        <i class="bi bi-person-circle me-2"></i>Información Personal
                    </h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="inputUsername" class="form-label">
                                Nombre de Usuario <span class="text-danger">*</span>
                            </label>
                            <input type="text"
                                   class="form-control"
                                   id="inputUsername"
                                   name="username"
                                   value="<?= $usuario->getUsername() ?>"
                                   required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="inputEmail" class="form-label">
                                Correo Electrónico <span class="text-danger">*</span>
                            </label>
                            <input type="email"
                                   class="form-control"
                                   id="inputEmail"
                                   name="email"
                                   value="<?= $usuario->getEmail() ?>"
                                   required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="inputTelephone" class="form-label">
                                Teléfono <span class="text-danger">*</span>
                            </label>
                            <input type="tel"
                                   class="form-control"
                                   id="inputTelephone"
                                   name="telephone"
                                   value="<?= $usuario->getTelephone() ?>"
                                   pattern="[0-9\-]{9,17}"
                                   required>
                            <small class="text-muted">Formato: 9 a 17 dígitos (puede incluir guiones)</small>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="birthdate" class="form-label">
                                Fecha de Nacimiento
                            </label>
                            <input type="date"
                                   class="form-control"
                                   id="birthdate"
                                   name="birthdate"
                                   value="<?= $usuario->getBirthdate()?->format('Y-m-d') ?? '' ?>">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="inputCountry" class="form-label">País</label>
                            <select class="form-select" id="inputCountry" name="country">
                                <option value="" disabled>Selecciona tu país</option>
                                <option value="sp" <?= $usuario->getCountry() === 'sp' ? 'selected' : '' ?>>España</option>
                                <option value="us" <?= $usuario->getCountry() === 'us' ? 'selected' : '' ?>>Estados Unidos</option>
                                <option value="ca" <?= $usuario->getCountry() === 'ca' ? 'selected' : '' ?>>Canadá</option>
                                <option value="uk" <?= $usuario->getCountry() === 'uk' ? 'selected' : '' ?>>Reino Unido</option>
                                <option value="au" <?= $usuario->getCountry() === 'au' ? 'selected' : '' ?>>Australia</option>
                                <option value="de" <?= $usuario->getCountry() === 'de' ? 'selected' : '' ?>>Alemania</option>
                                <option value="fr" <?= $usuario->getCountry() === 'fr' ? 'selected' : '' ?>>Francia</option>
                                <option value="jp" <?= $usuario->getCountry() === 'jp' ? 'selected' : '' ?>>Japón</option>
                                <option value="other" <?= $usuario->getCountry() === 'other' ? 'selected' : '' ?>>Otro</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Seguridad -->
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-header bg-white border-0 py-3">
                    <h5 class="mb-0">
                        <i class="bi bi-shield-lock me-2"></i>Cambiar Contraseña
                    </h5>
                </div>
                <div class="card-body">
                    <div class="alert alert-info mb-3">
                        <i class="bi bi-info-circle me-2"></i>
                        Deja estos campos vacíos si no deseas cambiar la contraseña
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="inputPassword" class="form-label">Nueva Contraseña</label>
                            <input type="password"
                                   class="form-control"
                                   id="inputPassword"
                                   name="password"
                                   value="<?= $usuario->getPassword() ?>">
                                   minlength="8"
                                   placeholder="Mínimo 8 caracteres">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="password_confirm" class="form-label">Confirmar Contraseña</label>
                            <input type="password"
                                   class="form-control"
                                   id="password_confirm"
                                   name="password_confirm"
                                   placeholder="Repite la contraseña">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Columna derecha -->
        <div class="col-lg-4">
            <!-- Tipo de Usuario -->
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-header bg-white border-0 py-3">
                    <h5 class="mb-0">
                        <i class="bi bi-shield-check me-2"></i>Permisos
                    </h5>
                </div>
                <div class="card-body">
                    <label for="inputType" class="form-label">
                        Tipo de Usuario <span class="text-danger">*</span>
                    </label>
                    <select class="form-select"
                            id="inputType"
                            name="type"
                            required>
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

                    <div class="mt-3">
                        <div class="alert alert-warning mb-0">
                            <small>
                                <i class="bi bi-exclamation-triangle me-1"></i>
                                <strong>Atención:</strong> Cambiar el tipo de usuario modificará sus permisos
                            </small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Estado de la Cuenta -->
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-header bg-white border-0 py-3">
                    <h5 class="mb-0">
                        <i class="bi bi-toggle-on me-2"></i>Estado de la Cuenta
                    </h5>
                </div>
                <div class="card-body">
                    <div class="form-check form-switch">
                        <input class="form-check-input"
                               type="checkbox"
                               id="active"
                               name="active"
                               checked>
                        <label class="form-check-label" for="active">
                            Cuenta Activa
                        </label>
                    </div>
                    <small class="text-muted d-block mt-2">
                        Si desactivas la cuenta, el usuario no podrá iniciar sesión
                    </small>
                </div>
            </div>

            <!-- Información del Sistema -->
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-header bg-white border-0 py-3">
                    <h5 class="mb-0">
                        <i class="bi bi-info-circle me-2"></i>Información
                    </h5>
                </div>
                <div class="card-body">
                    <div class="info-item mb-3">
                        <label class="text-muted small">ID de Usuario</label>
                        <p class="mb-0"><code><?= $usuario->getId() ?></code></p>
                    </div>
                    <div class="info-item mb-3">
                        <label class="text-muted small">Fecha de Registro</label>
                        <p class="mb-0">
                            <i class="bi bi-calendar me-1"></i>

                        </p>
                    </div>
                    <div class="info-item">
                        <label class="text-muted small">Última Modificación</label>
                        <p class="mb-0">
                            <i class="bi bi-clock me-1"></i>

                        </p>
                    </div>
                </div>
            </div>

            <!-- Botones de acción -->
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <button type="button" class="btn btn-primary w-100 mb-2" onclick="peticionPUT()">
                        <i class="bi bi-check-circle me-2"></i>Modificar Usuario
                    </button>
                    <a href="/user/<?= $usuario->getId() ?>" class="btn btn-outline-secondary w-100 mb-2">
                        <i class="bi bi-x-circle me-2"></i>Cancelar
                    </a>
                    <button type="button"
                            class="btn btn-outline-danger w-100"
                            data-bs-toggle="modal"
                            data-bs-target="#confirmacionEliminarModal">
                        <i class="bi bi-trash me-2"></i>Eliminar Usuario
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>

<!-- Modal de confirmación para eliminar -->
<div class="modal fade" id="confirmacionEliminarModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-0 bg-danger text-white">
                <h5 class="modal-title" id="deleteModalLabel">
                    <i class="bi bi-exclamation-triangle me-2"></i>
                    Eliminar Usuario
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="mb-2">¿Estás seguro de que deseas eliminar al usuario <strong><?= $usuario->getUsername() ?></strong>?</p>
                <div class="alert alert-danger mb-0">
                    <i class="bi bi-exclamation-triangle-fill me-2"></i>
                    <strong>Esta acción no se puede deshacer.</strong> Se eliminarán todos los datos asociados al usuario.
                </div>
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <form action="/admin/usuarios/<?= $usuario->getId() ?>/delete" method="POST" style="display:inline;">
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="btn btn-danger" onclick="peticionDelete()">
                        <i class="bi bi-trash me-2"></i>Eliminar Permanentemente
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    function iraAModificarUsuario(){
        window.location.replace("http://localhost:8080/user/<?= $usuario->getId() ?>/edit");
    }
    function irATodosLosUsuarios(){
        window.location.replace("http://localhost:8080/user");
    }
    function peticionDelete(){
        const requestOptions = {
          method: "DELETE",
          redirect: "follow"
        };
        fetch("http://localhost:8080/user/<?= $usuario->getId() ?>", requestOptions)
            .then((response) => response.text())
            .then((result) => irATodosLosUsuarios())
            .catch((error) => console.error(error));
    }

</script>
<style>
    /* Avatar grande */
    .user-avatar-large {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        background-color: #e9ecef;
        background-size: cover;
        background-position: center;
        border: 4px solid #fff;
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    }

    /* Info items */
    .info-item label {
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        font-size: 0.75rem;
        margin-bottom: 0.25rem;
        display: block;
    }

    .info-item p {
        font-size: 1rem;
        color: #212529;
    }

    /* Form labels mejorados */
    .form-label {
        font-weight: 600;
        color: #495057;
        margin-bottom: 0.5rem;
    }

    /* Cards */
    .card {
        transition: all 0.2s ease;
    }

    .card-header h5 {
        font-size: 1rem;
        font-weight: 600;
        color: #495057;
    }

    /* Breadcrumb */
    .breadcrumb-item a {
        text-decoration: none;
        color: #0d6efd;
    }

    .breadcrumb-item a:hover {
        text-decoration: underline;
    }

    /* Required asterisk */
    .text-danger {
        color: #dc3545 !important;
    }

    /* Form switches */
    .form-check-input:checked {
        background-color: #198754;
        border-color: #198754;
    }

    /* Botones */
    .btn {
        font-weight: 500;
    }

    /* Code tag */
    code {
        background-color: #f8f9fa;
        padding: 0.25rem 0.5rem;
        border-radius: 4px;
        font-size: 0.9rem;
    }

    /* Form control focus */
    .form-control:focus,
    .form-select:focus {
        border-color: #0d6efd;
        box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
    }

    /* Alert personalizado */
    .alert {
        border-radius: 8px;
    }

    /* Modal header danger */
    .modal-header.bg-danger {
        background-color: #dc3545 !important;
    }
</style>
<script>
    function peticionPUT(){
        let username = document.getElementById('inputUsername');
        let email = document.getElementById('inputEmail');
        let telephone = document.getElementById('inputTelephone');
        let password = document.getElementById('inputPassword');
        let country = document.getElementById('inputCountry');
        let type = document.getElementById('inputType');

        const myHeaders =new Headers();
        myHeaders.append("Content-Type", "applicaton/json");

        const raw = JSON.stringify({
            "username", username.value,
            "email", email.value,
            "telephone", telephone.value,
            "password", password.value,
            "country", country.value,
            "type", type.value,
        });


        const requestOptions = {
          method: "PUT",
          headers: myHeaders,
          body: raw,
          redirect: "follow"
        };
        fetch("http://localhost:8080/user/<?= $usuario->getId() ?>", requestOptions)
            .then((response) => response.text())
            .then((result) => redireccionaratAInfoDeUsuario())
            .catch((error) => console.error(error));
    }
    function redireccionaratAInfoDeUsuario(){
        window.location.replace("http://localhost:8080/user/<?= $usuario->getId() ?>")
    }
</script>

<?php
include_once DIRECTORIO_BACKEND_LAYOUTS . "footeradmin.php";
?>
