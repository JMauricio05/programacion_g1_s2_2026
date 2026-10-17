<?php

namespace app\controllers\config;

use app\controllers\sessions\SessionsController;
use app\controllers\sessions\SessionsControllerInterface;
use app\models\config\ModelsConfig;

class ControllersConfig
{
    public static function get_sessions_controller(): SessionsControllerInterface
    {
        return new SessionsController(ModelsConfig::get_users_repository());
    }
}
