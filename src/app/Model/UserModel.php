<?php

namespace App\Model;

use PDO;
use Ramsey\Uuid\Uuid;
use App\Class\User;
use App\Enum\UserType;

class UserModel
{
    public static function getAllUsers(): array
    {
        $usuario1 = new User(Uuid::uuid4(), "Pablo");
        $usuario1->setPassword("olbap");
        $usuario1->setEmail("pablo@espm.com");
        $usuario1->setTelephone("611996455");
        $usuario1->setType(UserType::ADMIN);
        $usuario1->setBirthdate(new \DateTime('1988-07-14')); // fecha de nacimiento ejemplo
        $usuario1->setCountry('España'); // opcional, si quieres mostrar país

        $usuario2 = new User(Uuid::uuid4(), "Paco");
        $usuario2->setPassword("ocap");
        $usuario2->setEmail("paco@espm.com");
        $usuario2->setTelephone("622007566");
        $usuario2->setType(UserType::REGULAR);
        $usuario2->setBirthdate(new \DateTime('1992-05-10')); // fecha de nacimiento ejemplo
        $usuario2->setCountry('España'); // opcional

        return [$usuario1, $usuario2];

    }

    public static function getUserById($id):User{
        $usuario1 = new User(Uuid::uuid4(), "Pablo");
        $usuario1->setPassword("olbap");
        $usuario1->setEmail("pablo@espm.com");
        $usuario1->setTelephone("611996455");
        $usuario1->setType(UserType::ADMIN);
        $usuario1->setBirthdate(new \DateTime('1988-07-14')); // fecha de nacimiento ejemplo
        $usuario1->setCountry('España'); // opcional, si quieres mostrar país

        return $usuario1;

    }
    public static function getUserByUsername(string $username):?User{
        $usuario1 = new User(Uuid::uuid4(), "Pablo");
        $usuario1->setPassword(password_hash("olbap", PASSWORD_DEFAULT));
        $usuario1->setEmail("pablo@gmail.com");
        $usuario1->setTelephone("611996455");
        $usuario1->setType(UserType::ADMIN);
        $usuario1->setBirthdate(\DateTime::createFromFormat('Y-m-d','1989-06-07')); // fecha de nacimiento ejemplo
        $usuario1->setCountry('España'); // opcional, si quieres mostrar país

        return $usuario1;

    }

    public static function getUserByEmail(string $email):?User{
        $usuario1 = new User(Uuid::uuid4(), "Pablo");
        $usuario1->setPassword(password_hash("olbap", PASSWORD_DEFAULT));
        $usuario1->setEmail("pablo@gmail.com");
        $usuario1->setTelephone("611996455");
        $usuario1->setType(UserType::ADMIN);
        $usuario1->setBirthdate(\DateTime::createFromFormat('Y-m-d','1989-06-07')); // fecha de nacimiento ejemplo
        $usuario1->setCountry('España'); // opcional, si quieres mostrar país

        return $usuario1;

    }
    public static function saveUser(User $user):bool{
        return true;
    }
}
