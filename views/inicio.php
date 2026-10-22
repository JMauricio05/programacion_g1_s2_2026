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

$controller = ControllersConfig::get_users_controller();
$users = $controller->get_users_all();

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
</head>

<body>
    <h1>Lista de usuarios</h1>
    <br>
    <a href="usuario_form.php">Crear usuario</a>
    <br>
    <?php
        if(!empty($_GET['error'])){
            echo '<p>Error al guardar los datos del usuario!!!</p>';
        }
    ?>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Username</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($users as $user) {
                echo '<tr>';
                echo '  <td>' . $user->get_id() . '</td>';
                echo '  <td>' . $user->get_name() . '</td>';
                echo '  <td>' . $user->get_username() . '</td>';
                echo '  <td>';
                echo '      <a href="usuario_form.php?id=' . $user->get_id() . '">Modificar</a>';
                echo '      <a href="operaciones/borrar_usuario.php?id=' . $user->get_id() . '">Borrar</a>';
                echo '  </td>';
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>

</body>

</html>