<?php

namespace app\controllers\config;

use app\controllers\users\UserControllerImpl;
use app\controllers\users\UsersController;
use app\models\config\UserDBConfig;

class ControllersConfig
{
    public static function get_user_controller(): UserControllerImpl
    {
        return new UsersController(UserDBConfig::get_user_repository());
    }
}
