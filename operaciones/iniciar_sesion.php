<?php

if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: ../index.php");
}
$username = $_POST["user"];
$password = $_POST["pwd"];

$hostDB = "localhost";
$userDB = "root";
$pwdDB = "";
$nameDB = "usuarios_db";

$conexDB = new mysqli($hostDB, $userDB, $pwdDB, $nameDB);

if ($conexDB->connect_error) {
    print($conexDB->connect_error);
    die();
}

$select = "select * from usuarios where username='$username' and password='$password'";
$result = $conexDB->query($select);
if ($result->num_rows > 0) {
    while ($usuario = $result->fetch_assoc()) {
        session_start();
        $_SESSION["id"] = $usuario["id"];
        $_SESSION["name"] = $usuario["nombre"];
        $_SESSION["username"] = $usuario["username"];
        header("Location: ../usuarios.php");
    }
} else {
    header("Location: ../index.php?error=1"); 
}
