<?php
require "persona.php";

$persona = new Persona($_POST["nombre"], $_POST["edad"]);

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persona</title>
</head>

<body>
    <h1>Datos persona</h1>
    <br>
    <div>
        <strong>Nombre: </strong> <?php echo $persona->get("name"); ?>
    </div>
    <div>
        <strong>Edad: </strong> <?php echo $persona->get("year"); ?>
    </div>
    <div>
        <strong>¿Es mayor de edad?: </strong> <?php echo $persona->esMayor() ? "Si" : "No"; ?>
    </div>
</body>

</html>