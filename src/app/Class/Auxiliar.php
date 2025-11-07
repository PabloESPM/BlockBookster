<?php

namespace App\Class;

class Auxiliar
{
    public static function gestionarImagen(array $arrayPost, array $arrayFiles):string|false{

        if(empty($arrayPost['titulo']) || empty($arrayFiles['portada']['name'])) {
            die('Error: Faltan datos requeridos');
        }

        // Limpiar el título para usarlo como nombre de carpeta
        $tituloLibro = $arrayPost['titulo'];
        // Eliminar caracteres no permitidos en nombres de carpeta
        $nombreCarpeta = preg_replace('/[^a-zA-Z0-9\s\-_]/', '', $tituloLibro);
        // Reemplazar espacios por guiones bajos
        $nombreCarpeta = str_replace(' ', '_', $nombreCarpeta);

        $carpetas = scandir('app/View/backend/img'); // Ver si el directorio uploaded está creado

        // Si no existe la carpeta uploaded, crearla
        if(!array_search('uploaded', $carpetas)) {
            mkdir("app/View/backend/img/uploaded");
        }

        // Ruta completa de la carpeta del libro
        $rutaCarpetaLibro = "app/View/backend/img/uploaded/" . $nombreCarpeta;

        // Verificar si la carpeta del libro ya existe
        if(!is_dir($rutaCarpetaLibro)) {
            // Si no existe, crearla
            mkdir($rutaCarpetaLibro);
        }

        // Mover el archivo a la carpeta del libro
        $rutaDestino = $rutaCarpetaLibro . "/" . $arrayFiles['portada']['name'];

        if(move_uploaded_file($arrayFiles['portada']['tmp_name'], $rutaDestino)) {
           return $rutaDestino;
        } else {
            return false;
        }

    }

    public static function generarContrasenaAleatoria(): string
    {
        $conjunto = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()+-=[]{}|<>?';
        $longitudConjunto = strlen($conjunto);

        $contrasena = '';
        for ($i = 0; $i < 16; $i++) {
            $contrasena .= $conjunto[random_int(0, $longitudConjunto - 1)];
        }

        return $contrasena;
    }
}