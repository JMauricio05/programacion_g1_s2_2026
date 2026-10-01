<?php
require "../clases/conexion_db.php";

session_start();
if (empty($_SESSION["id"])) {
    header("Location: index.php");
}

$id = $_GET["id"];
if ($id == $_SESSION["id"]) {
    header("Location: ../usuarios.php");
} else {
    $conexionDB = new ConexionDb();
    $conexDB = $conexionDB->get_conexDB();
    $sql = "delete from usuarios where id=$id ";
    $result = $conexDB->query($sql);
    if ($result) {
        header("Location: ../usuarios.php");
    }
}
