<?php

namespace App\Model;

class DB
{

    public static function createDataBase(string $name) {
        $db= new \SQLite3("database/".$name);

    }

}