<?php
// comentario en linea
/**
 * en blouqe
 */
echo "<h1>Hola mundo!!!!</h1>"; 
echo "\n";
echo "<br>";
print 5+10;

$nombre = "Pepe";
$apellido = 'Gomez';
$nombreCompleto = $nombre . ' '. $apellido;
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
$ejemplo2 = [[1,2,3],  [4,5,6], [7,8,9]];
echo $numeros[2];
echo $numeros[0][2];

?>