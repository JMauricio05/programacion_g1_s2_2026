<?php
// require  include
require "operaciones/tabla.php";

$titulo = "Html con PHP";
// $num = empty($_GET["num"]) ? 0 : $_GET["num"];
$num = empty($_POST["num"]) ? 0 : $_POST["num"];
$numeros = [];
for ($n = 1; $n <= $num; $n++) {
    array_push($numeros, $n);
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Index</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h1><?php echo $titulo; ?></h1>
    <a href="persona/inicio.html">Ir a personas</a>
    <form action="#" method="POST">
        <label for="num1">Ingrese el número:</label>
        <input type="number" name="num" id="num1" min="1">
        <button type="submit">Enviar</button>
    </form>
    <br>
    <table border="1">
        <thead>
            <tr>
                <th>Número</th>
                <th>Par</th>
                <th>Impar</th>
            </tr>
        </thead>
        <tbody>
            <?php
            get_tbody($numeros);
            // if($num==0){
            //     echo '<tr>';
            //     echo '  <td colspan="3">Debe ingresar un número</td>';
            //     echo '</tr>';
            // }
            // foreach ($numeros as $numero) {
            //     echo '<tr>';
            //     echo '  <td>' . $numero . '</td>';
            //     echo '  <td class="center red">' . (($numero % 2) == 0 ? 'X' : '') . '</td>';
            //     echo '  <td class="center red">' . (!(($numero % 2) == 0) ? 'X' : '') . '</td>';
            //     echo '</tr>';
            // }
            ?>
        </tbody>
    </table>
</body>

</html>