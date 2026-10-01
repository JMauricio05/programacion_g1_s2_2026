<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COnfirmar</title>
</head>
<body>
    <h1>Cofirmar</h1>
    <p>Desea eliminar el registro?</p>
    <a href="usuarios.php">No</a>
    <a href="operaciones/eliminar.php?id=<?php echo $_GET["id"]; ?>">Si</a>
</body>
</html>