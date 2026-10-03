<?php

namespace app\models\services\database;

class UserDBConfig
{
    public static function user_db(): UserDBImpl
    {
        return new UserDB();
    }
}
