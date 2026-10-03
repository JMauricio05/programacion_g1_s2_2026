<?php

namespace app\models\config;

use app\models\database\UserDBImpl;
use app\models\database\UserDB;
use app\models\repository\UserRepositoryImpl;
use app\models\repository\UserRepository;

class UserDBConfig
{
    public static function get_user_db(): UserDBImpl
    {
        return new UserDB();
    }

    public static function get_user_repository(): UserRepositoryImpl
    {
        return new UserRepository(UserDBConfig::get_user_db());
    }
}
