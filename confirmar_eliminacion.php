<?php
$id = $_GET["id"];
$confirmar = empty($_GET['conformar']) ? null : $_GET['conformar'];
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmar</title>
</head>

<body>
    <h1>Cofirmar</h1>
    <p>Desea eliminar el registro?</p>
    <?php
    if (empty($confirmar)) {
        echo '<a href="usuarios.php">No</a> ';
        echo '<a href="confirmar_eliminacion.php?id=' . $id . '&conformar=1">Si</a>';
    } else {
    ?>
        <form action="operaciones/eliminar.php" method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <label for="">Ingrese el username del usuario a eliminar</label>
            <input type="text" name="username" required>
            <button type="submit">Eliminar</button>
            <a href="usuarios.php">Cancelar</a>
        </form>
    <?php
    }
    ?>

</body>

</html>