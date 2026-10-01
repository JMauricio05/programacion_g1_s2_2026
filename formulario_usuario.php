<?php
require "clases/conexion_db.php";

session_start();
if (empty($_SESSION["id"])) {
    header("Location: index.php");
}

$id = empty($_GET["id"]) ? null : $_GET["id"];

$titulo = "Crear usuario";
$action = "operaciones/crear_usuario.php";
$nombre = "";
$username = "";

if (!empty($id)) {
    $titulo = "Modificar usuario";
    $action = "operaciones/modificar_usuario.php";
    $conexionDB = new ConexionDb();
    $conexDB = $conexionDB->get_conexDB();
    $sql = "select * from usuarios where id=$id";
    $resultDb = $conexDB->query($sql);
    if ($resultDb->num_rows > 0) {
        while ($row = $resultDb->fetch_assoc()) {
            $nombre = $row["nombre"];
            $username = $row["username"];
            break;
        }
    }
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>
    <h1><?php echo $titulo; ?></h1>
    <a href="usuarios.php">Volver</a>
    <br>
    <form action="<?php echo $action; ?>" method="post">
        <?php
        if (!empty($id)) {
            echo '<input type="hidden" name="id" value="' . $id . '">';
        }
        ?>
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" value="<?php echo $nombre; ?>" required>
        </div>
        <div>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" value="<?php echo $username; ?>" required>
        </div>
        <div>
            <label for="pwd">Password</label>
            <input type="password" name="pwd" id="pwd" required>
        </div>
        <div>
            <button type="submit">Guardar</button>
        </div>
    </form>
</body>

</html>