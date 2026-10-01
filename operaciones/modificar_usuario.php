<?php
require "../clases/conexion_db.php";

if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: ../usuarios.php");
}

$id = $_POST["id"];
$nombre = $_POST["nombre"];
$username = $_POST["username"];
$password = $_POST["pwd"];

$conexionDB = new ConexionDb();
$conexDB = $conexionDB->get_conexDB();

$sql = "update usuarios set ";
$sql .= " nombre='$nombre', ";
$sql .= " username='$username', ";
$sql .= " password='$password' ";
$sql .= " where id=$id ";

$result = $conexDB->query($sql);
if($result){
    header("Location: ../usuarios.php");
}
