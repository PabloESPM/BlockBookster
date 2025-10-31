<?php

namespace App\Class;
use \DateTime;
use App\Enum\UserType;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

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
        $this->type=UserType::REGULAR;
        $this->list = new FavList();
    }

    //Geter y seter
    public function getId(): Uuid
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
    public static function fromArray(array $userDate): User{
        return new User();
    }






}