<?php

namespace App\Model;

use PDO;
use PDOException;
use Ramsey\Uuid\Uuid;
use App\Class\User;
use App\Enum\UserType;

class UserModel
{
    public static function getAllUsers():?array{
        //Tambien se puede usar las direcciones del env
        //poner cadena de conexion con try
        try {
            $conexion=new PDO("mysql:host=mariadb;dbname=blockbookster1","miguela", "aleugim");
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch (PDOException $e){
            echo $e->getMessage();
        }

        //Para evitar inyeccion de sql, creamos cadena de conexion
        $sql="SELECT * FROM user";

        $sentenciaPreparada=$conexion->prepare($sql);
        //ejecuta elemento
        $sentenciaPreparada->execute();

        // fetch_Assooc array asociativo
        $resultado=$sentenciaPreparada->fetchAll(PDO::FETCH_ASSOC);

        //Crear array de usuarios
        if($resultado){
            $usuarios=[];
            foreach ($resultado as $user){
                $usuarios[]=User::createfromArray($user);
            }
            return $usuarios;
        }else{
            return null;
        }
    }
    public static function saveUser(User $user):bool{
        try {
            $conexion=new PDO("mysql:host=mariadb;dbname=blockbookster1","miguela", "aleugim");
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch (PDOException $e){
            return false;
        }
        $sql="INSERT INTO user values(:id, :username, :password, :email, :telephone, :country, STR_TO_DATE(:birthdate, '%Y-%c-%d'), :type)";
        $sentenciaPreparada=$conexion->prepare($sql);

        $sentenciaPreparada->bindValue(":id",$user->getId());
        $sentenciaPreparada->bindValue(":username",$user->getUsername());
        $sentenciaPreparada->bindValue(":password",$user->getPassword());
        $sentenciaPreparada->bindValue(":email",$user->getEmail());
        $sentenciaPreparada->bindValue(":telephone",$user->getTelephone());
        $sentenciaPreparada->bindValue(":country",$user->getCountry());
        $sentenciaPreparada->bindValue(":birthdate",$user->getBirthdate()->format('Y-m-d'));
        $sentenciaPreparada->bindValue(":type",$user->getType()->name);

        // Ejecucion de la sentencia
        $sentenciaPreparada->execute();
        //comprobar si se ha insertado, mayor que cero se ha insertado
        if($sentenciaPreparada->rowCount()>0){
            return true;
        }else{
            return false;
        }
    }

    public static function getUserById($id):?User{
        //Cadena de conexion
        try {
            $conexion=new PDO("mysql:host=mariadb;dbname=blockbookster1","miguela", "aleugim");
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch (PDOException $e){
            return false;
        }
        $sql="SELECT * FROM user WHERE id=:id";
        $sentenciaPreparada=$conexion->prepare($sql);
        $sentenciaPreparada->bindValue(":id",$id);
        $sentenciaPreparada->execute();
        $resultado=$sentenciaPreparada->fetch(PDO::FETCH_ASSOC);
        if($resultado){
            $usuario=User::createfromArray($resultado);
            return $usuario;
        }else{
            return null;
        }
    }
    public static function getUserByUsername(string $username):?User{
        try {
            $conexion=new PDO("mysql:host=mariadb;dbname=blockbookster1","miguela", "aleugim");
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch (PDOException $e){
            return false;
        }
        $sql="SELECT * FROM user WHERE username=:username";
        $sentenciaPreparada=$conexion->prepare($sql);
        $sentenciaPreparada->bindValue(":username",$username);
        $sentenciaPreparada->execute();
        $resultado=$sentenciaPreparada->fetch(PDO::FETCH_ASSOC);
        if($resultado){
            $usuario=User::createfromArray($resultado);
            return $usuario;
        }else{
            return null;
        }

    }

    public static function getUserByEmail(string $email):?User{
        try {
            $conexion=new PDO("mysql:host=mariadb;dbname=blockbookster1","miguela", "aleugim");
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch (PDOException $e){
            return false;
        }
        $sql="SELECT * FROM user WHERE email=:email";
        $sentenciaPreparada=$conexion->prepare($sql);
        $sentenciaPreparada->bindValue(":email",$email);
        $sentenciaPreparada->execute();
        $resultado=$sentenciaPreparada->fetch(PDO::FETCH_ASSOC);
        if($resultado){
            $usuario=User::createfromArray($resultado);
            return $usuario;
        }else{
            return null;
        }
    }

    public static function deleteUserById($id):bool{
        try {
            $conexion=new PDO("mysql:host=mariadb;dbname=blockbookster1","miguela", "aleugim");
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch (PDOException $e){
            return false;
        }
        $sql="DELETE FROM user WHERE id=:id";
        $sentenciaPreparada=$conexion->prepare($sql);
        $sentenciaPreparada->bindValue(":id",$id);
        $sentenciaPreparada->execute();
        if($sentenciaPreparada->rowCount()>0){
            return true;
        }else{
            return false;
        }
    }
    public static function deleteAllUsers():bool{
        try {
            $conexion=new PDO("mysql:host=mariadb;dbname=blockbookster1","miguela", "aleugim");
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch (PDOException $e){
            return false;
        }
        $sql="TRUNCATE TABLE users";
        $sentenciaPreparada=$conexion->prepare($sql);
        $sentenciaPreparada->bindValue(":id",null);
        $sentenciaPreparada->execute();
        if($sentenciaPreparada->rowCount()>0){
            return true;
        }else{
            return false;
        }
    }
    public static function updateUser(User $user):bool{
        try {
            $conexion= new PDO("mysql:host=mariadb;dbname=blockbookster1","miguela", "aleugim");
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch (PDOException $e){
            return false;
        }
        $sql="UPDATE user SET username=:username, password=:password, email=:email, telephone=:telephone, country=:country, birthdate=STR_TO_DATE(:birthdate, '%Y-%c-%d'), type=:typer WHERE id=:id";
        $sentenciaPreparada=$conexion->prepare($sql);

        $sentenciaPreparada->bindValue(":id",$user->getId());
        $sentenciaPreparada->bindValue(":username",$user->getUsername());
        $sentenciaPreparada->bindValue(":password",$user->getPassword());
        $sentenciaPreparada->bindValue(":email",$user->getEmail());
        $sentenciaPreparada->bindValue(":telephone",$user->getTelephone());
        $sentenciaPreparada->bindValue(":country",$user->getCountry());
        $sentenciaPreparada->bindValue(":birthdate",$user->getBirthdate()->format('Y-m-d'));
        $sentenciaPreparada->bindValue(":type",$user->getType()->name);

        $sentenciaPreparada->execute();

        if($sentenciaPreparada->rowCount()>0){
            return true;
        }else{
            return false;
        }
    }
}
