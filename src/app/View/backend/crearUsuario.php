<?php
$title = "Crear Usuario - Block Bookster";
include_once DIRECTORIO_BACKEND_LAYOUTS . "headadmin.php";
include_once DIRECTORIO_BACKEND_LAYOUTS . "headeradmin.php";
include_once DIRECTORIO_BACKEND_LAYOUTS . "navadmin.php";
$tituloSeccion = "Crear Nuevo Usuario";
include_once DIRECTORIO_BACKEND_LAYOUTS . "mainadmin.php";
?>

    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="mb-3">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/adminInicio">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="/listaUsuarios">Usuarios</a></li>
            <li class="breadcrumb-item active" aria-current="page">Crear Usuario</li>
        </ol>
    </nav>

    <!-- Header -->
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-4 border-bottom">
        <div>
            <h2 class="h2 mb-1">Crear Nuevo Usuario</h2>
            <p class="text-muted mb-0">Añade un nuevo usuario al sistema</p>
        </div>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="/listaUsuarios" class="btn btn-outline-secondary">
                <i class="bi bi-arrow-left me-2"></i>Volver a la lista
            </a>
        </div>
    </div>

    <!-- Formulario de creación de usuario -->
    <form action="/user" method="POST">
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
                                       placeholder="Ej: Juan Pérez"
                                       required
                                    <?php if (isset($error)){echo "value='".$_POST['username']."'";}?>>
                                <small class="text-muted">Nombre completo del usuario</small>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="inputEmail" class="form-label">
                                    Correo Electrónico <span class="text-danger">*</span>
                                </label>
                                <input type="email"
                                       class="form-control"
                                       id="inputEmail"
                                       name="email"
                                       placeholder="ejemplo@correo.com"
                                       required
                                    <?php if (isset($error)){echo "value='".$_POST['email']."'";}?>>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="inputTelephone" class="form-label">
                                    Teléfono <span class="text-danger">*</span>
                                </label>
                                <input type="tel"
                                       class="form-control"
                                       id="inputTelephone"
                                       name="telephone"
                                       placeholder="611996455"
                                       pattern="[0-9\-]{9,17}"
                                       required
                                    <?php if (isset($error)){echo "value='".$_POST['telephone']."'";}?>>
                                <small class="text-muted">Formato: 9 a 17 dígitos (puede incluir guiones)</small>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="inputBirthdate" class="form-label">
                                    Fecha de Nacimiento
                                </label>
                                <input type="date"
                                       class="form-control"
                                       id="inputBirthdate"
                                       name="birthdate"
                                    <?php if (isset($error)){echo "value='".$_POST['birthdate']."'";}?>>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="inputCountry" class="form-label">País</label>
                                <select class="form-select" id="inputCountry" name="country">
                                    <option value="" disabled selected>Selecciona tu país</option>
                                    <option value="sp" <?php if (isset($error) && $_POST['country']=='sp'){echo "selected";}?>>🇪🇸 España</option>
                                    <option value="us" <?php if (isset($error) && $_POST['country']=='us'){echo "selected";}?>>🇺🇸 Estados Unidos</option>
                                    <option value="ca" <?php if (isset($error) && $_POST['country']=='ca'){echo "selected";}?>>🇨🇦 Canadá</option>
                                    <option value="uk" <?php if (isset($error) && $_POST['country']=='uk'){echo "selected";}?>>🇬🇧 Reino Unido</option>
                                    <option value="au" <?php if (isset($error) && $_POST['country']=='au'){echo "selected";}?>>🇦🇺 Australia</option>
                                    <option value="de" <?php if (isset($error) && $_POST['country']=='de'){echo "selected";}?>>🇩🇪 Alemania</option>
                                    <option value="fr" <?php if (isset($error) && $_POST['country']=='fr'){echo "selected";}?>>🇫🇷 Francia</option>
                                    <option value="jp" <?php if (isset($error) && $_POST['country']=='jp'){echo "selected";}?>>🇯🇵 Japón</option>
                                    <option value="other" <?php if (isset($error) && $_POST['country']=='other'){echo "selected";}?>>🌍 Otro</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contraseña -->
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-header bg-white border-0 py-3">
                        <h5 class="mb-0">
                            <i class="bi bi-shield-lock me-2"></i>Contraseña
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="inputPassword" class="form-label">
                                    Contraseña <span class="text-danger">*</span>
                                </label>
                                <input type="password"
                                       class="form-control"
                                       id="inputPassword"
                                       name="password"
                                       minlength="8"
                                       placeholder="Mínimo 8 caracteres"
                                       required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="inputConfirmPassword" class="form-label">
                                    Confirmar Contraseña <span class="text-danger">*</span>
                                </label>
                                <input type="password"
                                       class="form-control"
                                       id="inputConfirmPassword"
                                       name="confirmPassword"
                                       placeholder="Repite la contraseña"
                                       required>
                            </div>

                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input"
                                           type="checkbox"
                                           id="showPassword">
                                    <label class="form-check-label" for="showPassword">
                                        Mostrar contraseñas
                                    </label>
                                </div>
                            </div>

                            <div class="col-12 mt-3">
                                <button type="button"
                                        class="btn btn-outline-primary btn-sm"
                                        id="btnGenerarPassword">
                                    <i class="bi bi-key me-2"></i>Generar Contraseña Automática
                                </button>
                                <div id="passwordGenerada" class="mt-2" style="display: none;">
                                    <div class="alert alert-success mb-0">
                                        <strong>Contraseña generada:</strong> <span id="passwordText"></span>
                                        <button type="button"
                                                class="btn btn-sm btn-outline-success ms-2"
                                                id="btnCopiarPassword">
                                            <i class="bi bi-clipboard"></i> Copiar
                                        </button>
                                    </div>
                                </div>
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
                        <select class="form-select mb-3"
                                id="inputType"
                                name="type"
                                required>
                            <option value="REGULAR" selected>👤 Usuario Normal</option>
                            <option value="WORKER">💼 Worker</option>
                            <option value="ADMIN">⚡ Administrador</option>
                        </select>

                        <div class="alert alert-info mb-0">
                            <small>
                                <strong>ℹ️ Información:</strong>
                                <ul class="mb-0 mt-2 ps-3">
                                    <li><strong>Normal:</strong> Acceso limitado a funciones básicas</li>
                                    <li><strong>Editor:</strong> Puede gestionar contenido</li>
                                    <li><strong>Admin:</strong> Acceso total al sistema</li>
                                </ul>
                            </small>
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
                            Si está desactivada, el usuario no podrá iniciar sesión
                        </small>
                    </div>
                </div>

                <!-- Información Adicional -->
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-header bg-white border-0 py-3">
                        <h5 class="mb-0">
                            <i class="bi bi-info-circle me-2"></i>Información
                        </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-2">
                            <i class="bi bi-calendar-plus me-2"></i>
                            La fecha de creación se generará automáticamente
                        </p>
                        <p class="text-muted mb-0">
                            <i class="bi bi-key me-2"></i>
                            Se generará un ID único para el usuario
                        </p>
                    </div>
                </div>

                <!-- Botones de acción -->
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <button type="submit" class="btn btn-primary w-100 mb-2">
                            <i class="bi bi-person-plus me-2"></i>Crear Usuario
                        </button>
                        <a href="/listaUsuarios" class="btn btn-outline-secondary w-100">
                            <i class="bi bi-x-circle me-2"></i>Cancelar
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- Alertas de error -->
<?php if(isset($errores)): ?>
    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
        <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header bg-danger text-white">
                <i class="bi bi-exclamation-triangle-fill me-2"></i>
                <strong class="me-auto">Error</strong>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                <?php foreach ($errores as $fail): ?>
                    <div><?= htmlspecialchars($fail) ?></div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
<?php endif; ?>

    <style>
        /* Form labels mejorados */
        .form-label {
            font-weight: 600;
            color: #495057;
            margin-bottom: 0.5rem;
        }

        /* Cards */
        .card {
            transition: none;
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

        .alert ul {
            font-size: 0.85rem;
        }

        /* Toast personalizado */
        .toast {
            min-width: 300px;
        }
    </style>

    <script>
        // Mostrar/ocultar contraseñas
        document.getElementById('showPassword').addEventListener('change', function() {
            const passwordInput = document.getElementById('inputPassword');
            const confirmInput = document.getElementById('inputConfirmPassword');
            const type = this.checked ? 'text' : 'password';
            passwordInput.type = type;
            confirmInput.type = type;
        });

        // Generar contraseña automática
        document.getElementById('btnGenerarPassword').addEventListener('click', function() {
            const chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%&*';
            let password = '';
            for (let i = 0; i < 12; i++) {
                password += chars.charAt(Math.floor(Math.random() * chars.length));
            }

            document.getElementById('inputPassword').value = password;
            document.getElementById('inputConfirmPassword').value = password;
            document.getElementById('passwordText').textContent = password;
            document.getElementById('passwordGenerada').style.display = 'block';
        });

        // Copiar contraseña al portapapeles
        document.getElementById('btnCopiarPassword').addEventListener('click', function() {
            const password = document.getElementById('passwordText').textContent;
            navigator.clipboard.writeText(password).then(() => {
                this.innerHTML = '<i class="bi bi-check2"></i> Copiado!';
                setTimeout(() => {
                    this.innerHTML = '<i class="bi bi-clipboard"></i> Copiar';
                }, 2000);
            });
        });

        // Validación de contraseñas
        document.querySelector('form').addEventListener('submit', function(e) {
            const password = document.getElementById('inputPassword').value;
            const confirm = document.getElementById('inputConfirmPassword').value;

            if (password !== confirm) {
                e.preventDefault();
                alert('Las contraseñas no coinciden');
                document.getElementById('inputConfirmPassword').classList.add('is-invalid');
                return false;
            }

            if (password.length < 8) {
                e.preventDefault();
                alert('La contraseña debe tener al menos 8 caracteres');
                document.getElementById('inputPassword').classList.add('is-invalid');
                return false;
            }
        });
    </script>

<?php
include_once DIRECTORIO_BACKEND_LAYOUTS . "footeradmin.php";
?>