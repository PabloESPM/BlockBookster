<?php
include_once DIRECTORIO_FRONTEND_LAYOUTS . "head.php";
include_once DIRECTORIO_FRONTEND_LAYOUTS . "header.php";
?>

<!-- Page Title -->
<div class="page-title light-background">
    <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Iniciar sesión</h1>
        <nav class="breadcrumbs">
            <ol>
                <li><a href="/inicio">Inicio</a></li>
                <li class="current">Iniciar sesión</li>
            </ol>
        </nav>
    </div>
</div><!-- End Page Title -->

<!-- Login Section -->
<section id="login" class="login section">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="auth-container" data-aos="fade-in" data-aos-delay="200">
                    <!-- Login Form -->
                    <div class="auth-form login-form active">
                        <div class="form-header">
                            <h3>¡Bienvenido de nuevo!</h3>
                            <p>Inicia sesión para continuar explorando tus lecturas en blockBookster.</p>
                        </div>

                        <form class="auth-form-content" action="/user/login" method="post">
                            <div class="input-group mb-3">
                                <span class="input-icon">
                                  <i class="bi bi-envelope"></i>
                                </span>
                                <input type="email" class="form-control" id="inputUserName" name="userName" placeholder="Correo electrónico" required="" autocomplete="email">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-icon">
                                  <i class="bi bi-lock"></i>
                                </span>
                                    <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Contraseña" required="" autocomplete="current-password">
                                <span class="password-toggle">
                                    <i class="bi bi-eye"></i>
                                </span>
                            </div>
                            <div class="form-options mb-4">
                                <div class="remember-me">
                                    <input type="checkbox" id="rememberLogin">
                                    <label for="rememberLogin">Recordarme</label>
                                </div>
                                <a href="#" class="forgot-password">¿Olvidaste tu contraseña?</a>
                            </div>
                            <button type="submit" class="auth-btn primary-btn mb-3">
                                Iniciar sesión
                                <i class="bi bi-arrow-right"></i>
                            </button>
                            <?php if(isset($error)){echo "<p>".$error."</p>";}?>
                            <div class="divider">
                                <span>o</span>
                            </div>
                            <button type="button" class="auth-btn social-btn">
                                <i class="bi bi-google"></i>
                                Continuar con Google
                            </button>
                            <div class="switch-form">
                                <span>¿Aún no tienes una cuenta?</span>
                                <a href="/register" class="switch-btn" data-target="register">Crea una cuenta</a>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- /Login Section -->

<?php
include_once DIRECTORIO_FRONTEND_LAYOUTS . "footer.php";
?>
