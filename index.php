<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesion</title>
</head>

<body>
    <h1>Inciar sesion</h1>
    <br>
    <form action="operaciones/iniciar_sesion.php" method="post">
        <div>
            <label for="username">Username:</label>
            <input type="text" name="user" id="username">
        </div>
        <div>
            <label for="pwd">Password:</label>
            <input type="password" name="pwd" id="pwd">
        </div>
        <div>
            <button type="submit">Iniciar sesion</button>
        </div>
    </form>
    <?php
        if(!empty($_GET["error"])){
            echo '<p>Usuario no existe, revise el username y el password</p>';
        }
    ?>
</body>

</html>