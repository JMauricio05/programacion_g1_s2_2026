<?php
function get_tbody(array $numeros)
{
    if (count($numeros) == 0) {
        echo '<tr>';
        echo '  <td colspan="3">Debe ingresar un número</td>';
        echo '</tr>';
    }
    foreach ($numeros as $numero) {
        echo '<tr>';
        echo '  <td>' . $numero . '</td>';
        echo '  <td class="center red">' . (($numero % 2) == 0 ? 'X' : '') . '</td>';
        echo '  <td class="center red">' . (!(($numero % 2) == 0) ? 'X' : '') . '</td>';
        echo '</tr>';
    }
}
