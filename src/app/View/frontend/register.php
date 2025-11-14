<?php
include_once DIRECTORIO_FRONTEND_LAYOUTS . "head.php";
include_once DIRECTORIO_FRONTEND_LAYOUTS . "header.php";

$password = '';

$password = \App\Class\Auxiliar::generarContrasenaAleatoria();
?>

<!-- Page Title -->
<div class="page-title light-background">
    <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Crea tu cuenta</h1>
        <nav class="breadcrumbs">
            <ol>
                <li><a href="/inicio">Inicio</a></li>
                <li class="current">Registro</li>
            </ol>
        </nav>
    </div>
</div><!-- End Page Title -->

<!-- Register Section -->
<section id="register" class="register section">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="registration-form-wrapper">
                        <div class="form-header text-center">
                            <h2>Únete a blockBookster</h2>
                            <p>Crea tu cuenta y comienza a descubrir, comprar y disfrutar libros digitales al instante.</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <!-- Formulario -->
                                <form action="/user" method="post">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="inputUsername" name="username" placeholder="Nombre completo" required="" autocomplete="name"
                                        <?php if (isset($error)){echo "value='".$_POST['username']."'";}?>>
                                        <label for="inputUsername">Nombre completo</label>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Correo electrónico" required="" autocomplete="email"
                                        <?php if (isset($error)){echo "value='".$_POST['email']."'";}?>>
                                        <label for="inputEmail">Correo electrónico</label>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="tel" class="form-control" id="inputTelephone" name="telephone" placeholder="Teléfono" required="" pattern="[0-9\-]{9,17}" autocomplete="tel">
                                                <?php if (isset($error)){echo "value='".$_POST['telephone']."'";}?>
                                                <label for="inputTelephone">Teléfono</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="date" class="form-control" id="inputBirthdate" name="birthdate" placeholder="Fecha de nacimiento" required="" autocomplete="birthday"
                                                <?php if (isset($error)){echo "value='".$_POST['birthdate']."'";}?>>
                                                <label for="inputBirthdate">Fecha de nacimiento</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Contraseña" required="" minlength="8" autocomplete="new-password"
                                                       value="<?= htmlspecialchars($password ?? '') ?>"
                                                        <?php if (isset($error)){echo "value='".$_POST['password']."'";}?>>
                                                <label for="inputPassword">Contraseña</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Confirmar contraseña" required="" minlength="8" autocomplete="new-password"
                                                       value="<?= htmlspecialchars($password ?? '') ?>"
                                                        <?php if (isset($error)){echo "value='".$_POST['confirmPassword']."'";}?>>
                                                <label for="confirmPassword">Confirmar contraseña</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-12 text-center">
                                            <?php if (!empty($password)): ?>
                                                <div class="alert alert-success mt-3" role="alert">
                                                    <strong>Contraseña generada:</strong> <?= htmlspecialchars($password) ?>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="form-floating mb-4">
                                        <select class="form-select" id="inputCountry" name="country" required="">
                                            <option value="" selected="" disabled="">Selecciona tu país</option>
                                            <option value="sp" <?php if (isset($error) && $_POST['country']=='sp'){echo "selected";}?>>España</option>
                                            <option value="us" <?php if (isset($error) && $_POST['country']=='us'){echo "selected";}?>>Estados Unidos</option>
                                            <option value="ca" <?php if (isset($error) && $_POST['country']=='ca'){echo "selected";}?>>Canadá</option>
                                            <option value="uk" <?php if (isset($error) && $_POST['country']=='uk'){echo "selected";}?>>Reino Unido</option>
                                            <option value="au" <?php if (isset($error) && $_POST['country']=='au'){echo "selected";}?>>Australia</option>
                                            <option value="de" <?php if (isset($error) && $_POST['country']=='de'){echo "selected";}?>>Alemania</option>
                                            <option value="fr" <?php if (isset($error) && $_POST['country']=='fr'){echo "selected";}?>>Francia</option>
                                            <option value="jp" <?php if (isset($error) && $_POST['country']=='jp'){echo "selected";}?>>Japón</option>
                                            <option value="other" <?php if (isset($error) && $_POST['country']=='other'){echo "selected";}?>>Otro</option>
                                        </select>
                                        <label for="inputCountry">País</label>
                                    </div>

                                    <div class="form-check mb-4">
                                        <input class="form-check-input" type="checkbox" id="termsCheck" name="termsCheck" required="">
                                        <label class="form-check-label" for="termsCheck">
                                            Acepto los <a href="#">Términos de servicio</a> y la <a href="#">Política de privacidad</a>
                                        </label>
                                    </div>

                                    <div class="form-check mb-4">
                                        <input class="form-check-input" type="checkbox" id="marketingCheck" name="marketingCheck">
                                        <label class="form-check-label" for="marketingCheck">
                                            Deseo recibir novedades y recomendaciones de lectura de blockBookster
                                        </label>
                                    </div>

                                    <?php if(isset($error)){?>
                                            <div class="mb-3">
                                                <div class="p-3 text-danger-emphasis bg-danger-subtle border border-danger-subtle rounded-3">
                                                    <?php foreach ($error as $fail){echo $fail. "</br>";}?>
                                                </div>
                                            </div>
                                    <?php } ?>

                                    <div class="d-grid mb-4">
                                        <button type="submit" class="btn btn-register">Crear cuenta</button>
                                    </div>

                                    <div class="login-link text-center">
                                        <p>¿Ya tienes una cuenta? <a href="/login">Inicia sesión</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="social-login">
                            <div class="row">
                                <div class="col-lg-8 mx-auto">
                                    <div class="divider">
                                        <span>o regístrate con</span>
                                    </div>
                                    <div class="social-buttons">
                                        <a href="#" class="btn btn-social">
                                            <i class="bi bi-google"></i>
                                            <span>Google</span>
                                        </a>
                                        <a href="#" class="btn btn-social">
                                            <i class="bi bi-facebook"></i>
                                            <span>Facebook</span>
                                        </a>
                                        <a href="#" class="btn btn-social">
                                            <i class="bi bi-apple"></i>
                                            <span>Apple</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="decorative-elements">
                            <div class="circle circle-1"></div>
                            <div class="circle circle-2"></div>
                            <div class="circle circle-3"></div>
                            <div class="square square-1"></div>
                            <div class="square square-2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</section><!-- /Register Section -->

<?php
include_once DIRECTORIO_FRONTEND_LAYOUTS . "footer.php";
?>