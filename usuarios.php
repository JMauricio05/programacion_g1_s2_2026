<?php
require "clases/conexion_db.php";

session_start();
if (empty($_SESSION["id"])) {
    header("Location: index.php");
}

$conexionDB = new ConexionDb();
$conexDB = $conexionDB->get_conexDB();

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
    <a href="operaciones/cerrar_sesion.php">Cerrar sesion</a>
    <a href="formulario_usuario.php">Crear usuario</a>
    <br>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Username</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            $select = "select * from usuarios";
            $result = $conexDB->query($select);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()){
                    echo '<tr>';
                    echo '  <td>'.$row["id"].'</td>'; 
                    echo '  <td>'.$row["nombre"].'</td>'; 
                    echo '  <td>'.$row["username"].'</td>'; 
                    echo '  <td></td>'; 
                    echo '</tr>';
                }
            }
            ?>
        </tbody>
    </table>
</body>

</html>