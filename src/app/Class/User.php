<?php

namespace App\Class;
use App\Model\UserModel;
use \DateTime;
use App\Enum\UserType;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;
use Respect\Validation\Exceptions\NestedValidationException;
use Respect\Validation\Validator as v;

class User
{
    private UuidInterface $id;
    private string $username;
    private string $password;
    private string $email;
    private string $telephone;
    private string $country;
    private DateTime $birthdate;
    private FavList $list;
    private UserType $type;

    //Contructor
    public function __construct(UuidInterface $id,string $username)
    {
        $this->id = $id;
        $this->username = $username;
        $this->type=UserType::REGULAR; //Por defecto el usuario sera regular
        $this->list = new FavList();
    }

    //Geter y seter
    public function getId(): UuidInterface
    {
        return $this->id;
    }

    public function setId(Uuid $id): User
    {
        $this->id = $id;
        return $this;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function setUsername(string $username): User
    {
        $this->username = $username;
        return $this;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): User
    {
        $this->password = $password;
        return $this;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): User
    {
        $this->email = $email;
        return $this;
    }

    public function getTelephone(): string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): User
    {
        $this->telephone = $telephone;
        return $this;
    }

    public function getCountry(): string
    {
        return $this->country;
    }

    public function setCountry(string $country): User
    {
        $this->country = $country;
        return $this;
    }

    public function getBirthdate(): DateTime
    {
        return $this->birthdate;
    }

    public function setBirthdate(DateTime $birthdate): User
    {
        $this->birthdate = $birthdate;
        return $this;
    }

    public function getList(): FavList
    {
        return $this->list;
    }

    public function setList(FavList $list): User
    {
        $this->list = $list;
        return $this;
    }

    public function getType(): UserType
    {
        return $this->type;
    }

    public function setType(UserType $type): User
    {
        $this->type = $type;
        return $this;
    }

    //Funcion estatica
    public static function createfromArray(array $userDate): User{
        $usuario =new User(
            Uuid::uuid4(),
            $userDate['username']
        );
        $usuario->setPassword($userDate['password']);
        $usuario->setEmail($userDate['email']);
        $usuario->setTelephone($userDate['telephone']);
        $usuario->setCountry($userDate['country']);
        $usuario->setBirthdate(DateTime::createFromFormat('Y-m-d',$userDate['birthdate']));
        $usuario->setType(UserType::REGULAR); // Quiero que sea de tipo regular siempre al darse de alta

        return $usuario;
    }
    public static function editfromArray(array $userDate):User{
        //leer de la base de datos el usuario
        $usuario=UserModel::getUserById($userDate['id']);
        $usuario->setUsername($userDate['username']??$usuario->getUsername());
        $usuario->setPassword($userDate['password']??$usuario->getPassword());
        $usuario->setEmail($userDate['email']??$usuario->getEmail());
        $usuario->setTelephone($userDate['telephone']??$usuario->getTelephone());
        $usuario->setCountry($userDate['country']??$usuario->getCountry());
        $usuario->setBirthdate(DateTime::createFromFormat('Y-m-d',$userDate['birthdate'])??$usuario->getBirthdate());
        $usuario->setType(UserType::REGULAR); //Reviaasr si esto esta bien

        return $usuario;

    }

    public static function validateUserRegister(array $userData):?array{
        try{
            v::key('username', v::stringType()->length(3,32))
                ->key('email', v::email())
                ->key('password', v::stringType()->length(8,32))
                ->key('telephone', v::stringType()->length(9,32))
                ->key('country', v::in(['sp', 'us', 'ca', 'uk', 'au', 'de', 'fr', 'jp', 'other']))
                ->key('birthdate', v::date('Y-m-d'))
                ->assert($userData);

        }catch(NestedValidationException $errores){
            return $errores->getMessages();
        }
        return null;
    }
    public static function validateUserUpdate(array $userData):array|User{
        try{
            v::key('id', v::uuid()->notEmpty())
                ->key('username', v::stringType()->length(3,32), false)
                ->key('email', v::email())
                ->key('password', v::stringType()->length(8,32), false)
                ->key('telephone', v::stringType()->length(9,32), false)
                ->key('country', v::in(['sp', 'us', 'ca', 'uk', 'au', 'de', 'fr', 'jp', 'other']), false)
                ->key('birthdate', v::date('Y-m-d'))
                ->assert($userData);

        }catch(NestedValidationException $errores){
            return $errores->getMessages();
        }
        return User::editfromArray($userData);
    }
    public function isAdmin():bool{
        if($this->getType() === UserType::ADMIN){
            return true;
        }else{
            return false;
        }

    }
}