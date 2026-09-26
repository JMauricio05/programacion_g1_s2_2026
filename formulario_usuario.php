<?php
session_start();
if (empty($_SESSION["id"])) {
    header("Location: index.php");
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
    <h1>Crear usuario</h1>
    <a href="usuarios.php">Volver</a>
    <br>
    <form action="operaciones/crear_usuario.php" method="post">
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" require>
        </div>
        <div>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" require>
        </div>
        <div>
            <label for="pwd">Password</label>
            <input type="password" name="pwd" id="pwd" require>
        </div>
        <div>
            <button type="submit">Guardar</button>
        </div>
    </form>
</body>
</html>