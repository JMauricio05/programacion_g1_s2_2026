<?php

namespace app\controllers\mappers;

use app\models\entities\User;

class UsersMapperController
{
    public static function to_entity(array $request): User
    {
        return new User(
            empty($request['id']) ? 0 : $request['id'],
            $request['nombre'],
            $request['username'],
            empty($request['password']) ? "" : $request['password']
        );
    }
}
