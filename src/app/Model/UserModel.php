<?php

namespace App\Model;

use PDO;
use Ramsey\Uuid\Uuid;

class UserModel
{
    public static function getAllUsers ():array{
        $usuario1 = new User(Uuid::uuid4(), "Pablo");
        $usuario1->setPassword("olbap");
        $usuario1->setEmail("pablo@espm.com");
        $usuario1->setTelephone("611996455");
        $usuario1->setType(UserType::ADMIN);

        $usuario2 = new User(Uuid::uuid4(), "Paco");
        $usuario2->setPassword("ocap");
        $usuario2->setEmail("paco@espm.com");
        $usuario2->setTelephone("622007566");
        $usuario2->setType(UserType::REGULAR);

        return $usuarios = [$usuario1, $usuario2];

    }
    public static function saveUser (User $user):bool{
        $conexion = new PDO("mysql:host=mariadb;dbname=blockbookster1", "miguela", "aleugim");
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(\PDOException $error){
        echo $error;
        return false;
    }
    $sql = "INSERT INTO user value (:uuid, :username, :password, :email, :telephone, :edad, :type)";
    $sentenciaPreparada = $conexion->prepare($sql);

    $sentenciaPreparada->bindValue('uuid', $user->getUuid());
    $sentenciaPreparada->bindValue('username', $user->getUsername());
    $sentenciaPreparada->bindValue('password', $user->getPassword());
    $sentenciaPreparada->bindValue('email', $user->getEmail());
    $sentenciaPreparada->bindValue('telephone', $user->getTelephone());
    $sentenciaPreparada->bindValue('edad', $user->getEdad());
    $sentenciaPreparada->bindValue('type', $user->getType()->name);

    $sentenciaPreparada->execute();

    if($sentenciaPreparada->rowCount() > 0){
        return true;
    }else{
        return false;
    }

    return true;

}