<?php
require "../../models/database/users_db_interface.php";
require "../../models/database/users_db.php";
require "../../models/entities/user.php";
require "../../models/mappers/user_mappers.php";
require "../../models/repositories/users_respository/users_respository_interface.php";
require "../../models/repositories/users_respository/users_respository.php";
require "../../models/config/models_config.php";

require "../../controllers/sessions/sessions_controller_interface.php";
require "../../controllers/sessions/sessions_controller.php";
require "../../controllers/config/controllers_config.php";

use app\controllers\config\ControllersConfig;


$username = $_POST["username"];
$password = $_POST["password"];

$controller = ControllersConfig::get_sessions_controller();

$user = $controller->find_user($username, $password);
if (empty($user)) {
    header("Location: ../login.php?error_sesion=1");
} else {
    $controller->save_session($user);
    header("Location: ../inicio.php");
}
