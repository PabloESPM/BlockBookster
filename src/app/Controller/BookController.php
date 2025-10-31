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
        \App\Class\Auxiliar::gestionarImagen($_POST, $_FILES);
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