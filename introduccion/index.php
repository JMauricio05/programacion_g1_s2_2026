<?php
// comentario en linea

/**
 * en blouqe
 */
echo "<h1>Hola mundo!!!!</h1>";
echo "\n";
echo "<br>";
print 5 + 10;

$nombre = "Pepe";
$apellido = 'Gomez';
$nombreCompleto = $nombre . ' ' . $apellido;
$nombre_completo = "$nombre $apellido";
echo $nombreCompleto;
echo "<br>";
echo $nombre_completo;

$edad = 20;
$sueldo = 25.3;
$mayorEdad = TRUE; //FALSE;
$jobs = null;
$numeros = array();
$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$ejemplo = [TRUE, "Pepe", 12.5, 10, 1, [], null];
$ejemplo2 = [[1, 2, 3],  [4, 5, 6], [7, 8, 9]];
echo $numeros[2];
echo $ejemplo2[0][2];

$persona = [
    "nombre" => "Pepe",
    "apellido" => "Gomez",
    "edad" => 30,
    "jobs" => ["Leer", "Cine", "Deportes"]
];

echo "<br>";
echo $persona["nombre"] . " " . $persona["jobs"][1];


$numeros = [15, 14, 13, 12, 11, 10, 9, 8, 7, 6, 5, 4, 3, 2, 1];
echo "<br>For-----------------------------------------";
for ($i = 0; $i < count($numeros); $i++) {
    $numero = $numeros[$i];
    if (($numero % 2) == 0) {
        echo "<br>el numero $numero es par";
    } else {
        echo "<br>el numero $numero es impar";
    }
}

echo "<br>While-----------------------------------------";
$i = 0;
while (TRUE) {
    if ($i == 4) {
        $i++;
        continue;
    }
    $numero = $numeros[$i];
    if (($numero % 2) == 0) {
        echo "<br>el numero $numero es par";
    } else {
        echo "<br>el numero $numero es impar";
    }
    $i++;
    if ($i >= count($numeros)) {
        break;
    }
}

echo "<br>Do While-----------------------------------------";
$i = 0;
do {
    $numero = $numeros[$i];
    if (($numero % 2) == 0) {
        echo "<br>el numero $numero es par";
    } else {
        echo "<br>el numero $numero es impar";
    }
    $i++;
} while ($i < count($numeros));

echo "<br>Foreach-----------------------------------------";

foreach ($numeros as $value) {
    if (($value % 2) == 0) {
        echo "<br>el numero $value es par";
    } else {
        echo "<br>el numero $value es impar";
    }
}

foreach ($numeros as $i => $value) {
    if (($value % 2) == 0) {
        echo "<br>$i: el numero $value es par";
    } else {
        echo "<br>$i: el numero $value es impar";
    }
}

$ejemplo = [TRUE, "Pepe", 12.5, 10, 1, 15.6, null];
foreach ($ejemplo as $item) {
    echo "<br>$item";
}

$persona = [
    "nombre" => "Pepe",
    "apellido" => "Gomez",
    "edad" => 30,
    "jobs" => ["Leer", "Cine", "Deportes"]
];
foreach ($persona as $key => $item) {
    if ($key == "jobs") {
        continue;
    }
    echo "<br>$item";
}
echo "<br>Foreach-----------------------------------------";
$numero = 70;
if ($numero < 50) {
    //codigo....
} else if ($numero < 60) {
    //codigo....
} elseif ($numero < 80) {
    //codigo....
} else {
    //codigo....
}

/**
 * && and
 * || or
 * ! negacion
 * < menor que
 * > mayor que
 * <= menor o igual
 * >= mayor o igual
 * == igual en valor
 * === igual en valor y en tipo de dato
 * != diferente en valor
 * !== diferente en valor y tipo de dato
 * 
 */

echo "<br>";
echo (12 == '12') ? "Ok" : "No"; // ternario 
echo "<br>";
echo (12 === '12') ? "Ok" : "No";

$categoria = "a";

switch ($categoria) {
    case "a":
        //codigo...
        break;
    case "b":
        //codigo...
        break;
    case "c":
        //codigo...
        break;
    default:
        //codigo...
        break;
}


function tipo_numero($numero)
{
    if (($numero % 2) == 0) {
        echo "<br> el numero $numero es par";
    } else {
        echo "<br>el numero $numero es impar";
    }
}
tipo_numero(100);

function get_tipo_numero(int $numero = 12): string
{
    if (($numero % 2) == 0) {
        return "<br> el numero $numero es par";
    } else {
        return "<br>el numero $numero es impar";
    }
}
echo '<br>' . get_tipo_numero(255);
echo '<br>' . get_tipo_numero();

define("TITULO", "Ejemplo php");
echo '<br>' . TITULO;

