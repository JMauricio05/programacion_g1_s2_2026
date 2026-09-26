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

$sql = "select * from usuarios";
$result = $conx->query($sql);
if ($result->num_rows > 0) {
    echo "Si hay datos!!!<br>";
    while ($row = $result->fetch_assoc()) {
        echo "<br>";
        echo "Nombre: " . $row["nombre"];
        echo " Username: " . $row["username"];
    }
} else {
    echo "No hay datos!!!<br>";
}

$conx->close();
