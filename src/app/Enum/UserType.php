<?php

namespace App\Enum;

enum UserType
{
    case ADMIN;
    case WORKER;
    case REGULAR;

    public static function createFromString(string $type): UserType
    {
        // Normaliza a minúsculas
        $type = strtolower($type);

        return match($type) {
            'admin'  => self::ADMIN,
            'worker' => self::WORKER,
            'regular'=> self::REGULAR,
            default  => throw new \ValueError("Tipo de usuario no válido: $type")
        };
    }
}

