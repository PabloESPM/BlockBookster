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
        //Recuperar los datos del usuario
        $usuario=UserModel::getUserById($id);

        //Mostrar datos de usuario con una vista

        include_once DIRECTORIO_BACKEND . "mostrarUsuario.php";

    }
    public function create(){
        include_once DIRECTORIO_FRONTEND . "register.php";
    }
    public function store(){
        // Datos que recibo en la peticion POST
        var_dump($_POST);

        //Tenemos que validar estos datos
        $usuario=User::validateUserRegister($_POST);

        //Guardalos en la base de datos
        //UserModel::saveUser($usuario);



        //$usuario = new User(Uuid::uuid4(),$_POST['username']);
        //$usuario->setPassword($_POST['password'])->setEmail($_POST['email'])->setBirthdate(new \DateTime($_POST['birthdate']))->setTelephone($_POST['telephone']);

        //var_dump($usuario);

    }
    public function edit($id)
    {
        //buscar en la base de datos el usuario con id el valor de $id
        $usuario=UserModel::getUserById($id);

        //Presentariamos la lista de edicion de los datos de usuario

        include_once DIRECTORIO_BACKEND . "editarUsuario.php";

    }
    public function update($id){

    }
    public function destroy($id){
        return "se esta intentando borrar este usuario $id";

    }
    public function verify()
    {
        var_dump($_POST);

    }


}