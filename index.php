<?php
$host = "localhost";
$user_db = "root";
$pwd_db = "";
$name_db = "usuarios_db";

$conx = new mysqli($host, $user_db, $pwd_db, $name_db);

if ($conx->connect_error) {
    print($conx->connect_error);
    die();
}

echo "Conexion exitosa!!!<br>";

$sql = "insert into usuarios (nombre, username, password)";
$sql .= "values ('Juan','juan','juan12345')";

$result = $conx->query($sql);
if ($result) {
    echo "Insert exitoso!!!<br>";
}

$sql = "update usuarios set ";
$sql .= "password = 'ana987654' ";
$sql .= "where id=2";

$result = $conx->query($sql);
if ($result) {
    echo "Update exitoso!!!<br>";
}

$sql = "delete from usuarios where id>4";
$result = $conx->query($sql);
if ($result) {
    echo "Delete exitoso!!!<br>";
}

$conx->close();
