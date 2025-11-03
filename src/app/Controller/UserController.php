<?php

namespace App\Controller;

use App\Class\User;
use App\Interface\ControllerInterface;
use App\Model\UserModel;
use Ramsey\Uuid\Uuid;

class UserController implements ControllerInterface
{
    public function index(){
        //Recuperar usuarios BD.sql
        $usuarios=UserModel::getAllUsers();

        //Llamar a la vista que represente a estos usuarios
        include_once DIRECTORIO_BACKEND . "listaUsuarios.php";

    }
    public function show($id){
        return "Los datos del usuario";

    }
    public function store(){
        var_dump($_POST);

        $usuario = new User(Uuid::uuid4(),$_POST['username']);
        $usuario->setPassword($_POST['password'])->setEmail($_POST['email'])->setBirthdate(new \DateTime($_POST['birthdate']))->setTelephone($_POST['telephone']);

        var_dump($usuario);

    }
    public function update($id){

    }
    public function destroy($id){

    }
    public function verify()
    {
        var_dump($_POST);

    }


}