<?php

namespace app\models\mappers;

use app\models\entities\User;

class UserMappers
{
    public static function to_entity(array $row_db): User
    {
        return new User(
            $row_db["id"],
            $row_db["nombre"],
            $row_db["username"]
        );
    }
}
