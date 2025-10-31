<?php

namespace App\Model;

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

}