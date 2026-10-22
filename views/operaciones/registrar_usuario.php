<?php
require "../../models/database/users_db_interface.php";
require "../../models/database/users_db.php";
require "../../models/entities/user.php";
require "../../models/mappers/user_mappers.php";
require "../../models/repositories/users_respository/users_respository_interface.php";
require "../../models/repositories/users_respository/users_respository.php";
require "../../models/config/models_config.php";

require "../../controllers/mappers/users_mapper_controller.php";
require "../../controllers/users/users_controller_interface.php";
require "../../controllers/users/users_controller.php";
require "../../controllers/config/controllers_config.php";

use app\controllers\config\ControllersConfig;

$controller = ControllersConfig::get_users_controller();

$user = $controller->save_user($_POST);
if (empty($user)) {
    header("Location: ../inicio.php?error=1");
} else {
    header("Location: ../inicio.php");
}
