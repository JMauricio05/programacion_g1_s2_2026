<?php

namespace app\models\config;

use app\models\database\UsersDB;
use app\models\database\UsersDBInterface;
use app\models\repositories\users_repository\UsersRespository;
use app\models\repositories\users_repository\UsersRespositoryInterface;

class ModelsConfig
{
    public static function get_user_db(): UsersDBInterface
    {
        return new UsersDB();
    }

    public static function get_users_repository(): UsersRespositoryInterface
    {
        return new UsersRespository(ModelsConfig::get_user_db());
    }
}
