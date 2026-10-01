<?php
require "../clases/conexion_db.php";

session_start();
if (empty($_SESSION["id"])) {
    header("Location: index.php");
}

$id = $_POST["id"];
$username = $_POST["username"];

if ($id == $_SESSION["id"]) {
    header("Location: ../usuarios.php");
} else {
    $conexionDB = new ConexionDb();
    $conexDB = $conexionDB->get_conexDB();

    $sql = "select * from usuarios where id=$id and username='$username'";
    $result = $conexDB->query($sql);

    if ($result->num_rows > 0) {
        $sql = "delete from usuarios where id=$id ";
        $result = $conexDB->query($sql);
        if ($result) {
            header("Location: ../usuarios.php");
        }
    } else {
        header("Location: ../usuarios.php?error_delete=1");
    }
}
