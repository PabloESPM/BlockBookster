<?php

namespace App\Controller;

use App\Class\User;
use App\Enum\UserType;
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
        include_once DIRECTORIO_BACKEND . "perfilUsuario.php";

    }
    public function create(){
        include_once DIRECTORIO_FRONTEND . "register.php";
    }
    public function store(){
        //o valida el usuario de vallidateusercreation o crea uno

        //Tenemos que validar estos datos
        $errores=User::validateUserRegister($_POST);

        if (is_array($errores)){
            //Hay errores en la validacion
            return include_once DIRECTORIO_FRONTEND . "register.php";

        }else{
            //Crear el suario
            $usuario=User::createfromArray($_POST);

            //Guardalos en la base de datos
            UserModel::saveUser($usuario);
            //No me queda claro para que es esto ¿Preguntar?
            header("Location: /user");
        }

    }
    public function edit($id)
    {
        //buscar en la base de datos el usuario con id el valor de $id
        $usuario=UserModel::getUserById($id);

        //Presentariamos la lista de edicion de los datos de usuario

        include_once DIRECTORIO_BACKEND . "editarUsuario.php";

    }
    public function update($id){
        //Tomar datos de peticion tipo PUT
        $put=json_decode(file_get_contents("php://input"),true);

        $put['id']=$id;

        $resultado = User::validateUserUpdate($put);
        if(is_array($resultado)){
            http_response_code(400);
            return json_encode([
               "error"=>true,
               "mensaje"=>"Ha habido un error",
               "data"=>$resultado,
               "code"=>400
            ]);
        }else{
            $oldUser=UserModel::getUserById($id);
            //este es el que tendriamos que almacenar en la base de datos tras editar el usuario
            $newUser=User::editfromArray($oldUser, $put);
            //llamada al modelo
            UserModel::updateUser($newUser);
            http_response_code(201);
            return json_encode([
                "error"=>false,
                "mensaje"=>"Datos actualizados correctamente",
                "data"=>$newUser,
                "code"=>201
            ]);
        }
        return json_encode($resultado);
    }
    public function destroy($id){
        //Borrar el usuario en la base de datos
        UserModel::deleteUserById($id);
    }
    public function destroyAll(){
        UserModel::deleteAllUsers();
    }
    public function verify()
    {
        //var_dump($_POST);

        //Busacar en la base de datos el usuario por su nombre de usuario
        $usuario = UserModel::getUserByEmail($_POST["email"]);
        if ($usuario===null){
            $error="Nombre de usuario no encontrado";
            include_once DIRECTORIO_FRONTEND . "login.php";
        }

        //Comprobar que la contraseña es la que tenemos almacenada
        if (password_verify($_POST["password"], $usuario->getPassword())){
            $_SESSION['user']=$usuario;
            if ($usuario->getType()===UserType::ADMIN){ // preguntar si puede ser admin y worker o hacerlo en else y aui poner regular
                //include_once DIRECTORIO_BACKEND . "admininicio.php";
                header("Location: /user");
                die();
            }else{
                //include_once DIRECTORIO_FRONTEND . "inicio.php";
                header("Location: /");
            }
        }else{
            $error="No se ha podido iniciar sesión. Nombre de usuario o contraseña incorrecto";

        }
        include_once DIRECTORIO_FRONTEND . "login.php";

        //Redireccionar a una pantalla principal


        //$contrasena=password_hash($_POST["password"], PASSWORD_DEFAULT);

        //var_dump($contrasena);

        //Comprobar contraseña
        //var_dump (password_verify($_POST["password"], $contrasena));

    }
    public function logout(){
        session_destroy();
        header("Location: /");
    }
}