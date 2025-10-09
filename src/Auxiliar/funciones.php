<?php
function generarContrasenaAleatoria(): string {
    $conjunto = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+-=[]{}|;:,.<>?';
    $longitudConjunto = 88;

    $contrasena = '';
    for ($i = 0; $i < 16; $i++) {
        $contrasena .= $conjunto[random_int(0, $longitudConjunto - 1)];
    }

    return $contrasena;
}
/*
echo '<h1>Contraseña</h1>';
$pass1 = generarContrasenaAleatoria();
echo "<p><strong>$pass1</strong>";
*/
?>


