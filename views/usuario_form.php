<?php
require "../models/database/users_db_interface.php";
require "../models/database/users_db.php";
require "../models/entities/user.php";
require "../models/mappers/user_mappers.php";
require "../models/repositories/users_respository/users_respository_interface.php";
require "../models/repositories/users_respository/users_respository.php";
require "../models/config/models_config.php";

require "../controllers/mappers/users_mapper_controller.php";
require "../controllers/users/users_controller_interface.php";
require "../controllers/users/users_controller.php";
require "../controllers/config/controllers_config.php";

use app\controllers\config\ControllersConfig;

$titulo = "Crear usuario";
$action = "operaciones/registrar_usuario.php";
$id = 0;
$nombre = "";
$username = "";

if (!empty($_GET['id'])) {
    $titulo = "Modificar usuario";
    $action = "operaciones/modificar_usuario.php";
    $id = $_GET['id'];
    $controller = ControllersConfig::get_users_controller();
    $user = $controller->get_user($id);
    $nombre = $user->get_name();
    $username = $user->get_username();
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo; ?></title>
</head>

<body>
    <h1><?php echo $titulo; ?></h1>
    <br>
    <a href="inicio.php">Volver</a>
    <br>
    <form action="<?php echo $action; ?>" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" value="<?php echo $nombre; ?>" required>
        </div>
        <div>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" value="<?php echo $username; ?>" required>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" <?php echo empty($id) ? 'required' : ''; ?>>
        </div>
        <div>
            <button type="submit">Guardar</button>
        </div>
    </form>
</body>

</html>