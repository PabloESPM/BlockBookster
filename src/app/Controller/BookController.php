<?php

namespace App\Controller;

use App\Interface\ControllerInterface;

class BookController implements ControllerInterface
{

    public function index()
    {
        // TODO: Implement index() method.
    }

    public function show()
    {
        // TODO: Implement show() method.
    }

    public function store()
    {
        // TODO: Implement store() method.
        $rutaDestinoImg=\App\Class\Auxiliar::gestionarImagen($_POST, $_FILES);

        //Guardar la información del libro en la base de datos


        //Si todo has salido correcto entonces se redirige a mostrar todos los libros
        header('Location:/book/'.$_POST['id']);
    }

    public function update($id)
    {
        // TODO: Implement update() method.
    }

    public function destroy($id)
    {
        // TODO: Implement destroy() method.
    }
}