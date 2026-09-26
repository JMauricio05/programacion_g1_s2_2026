<?php
require "../clases/conexion_db.php";

if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: ../usuarios.php");
}

$nombre = $_POST["nombre"];
$username = $_POST["username"];
$password = $_POST["pwd"];

$conexionDB = new ConexionDb();
$conexDB = $conexionDB->get_conexDB();

$sql = "insert into usuarios (nombre, username, password)";
$sql .= "values ('$nombre','$username','$password')";

$result = $conexDB->query($sql);
if($result){
    header("Location: ../usuarios.php");
}
