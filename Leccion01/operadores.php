<?php
//operadores aritmeticos
$numero1 = 55;
$numero2 = 33;

echo 'suma: '.($numero1 + $numero2).'<br>';
echo 'resta: '.($numero1 - $numero2).'<br>';
echo 'producto: '.($numero1 * $numero2).'<br>';
echo 'division: '.($numero1 / $numero2).'<br>';
echo 'modulo/resto: '.($numero1 % $numero2).'<br>';

//operadores de incremento y decremento 
$year = 2019;
echo "<h1>$year</h1>";
$year++;
echo "<h1>$year</h1>";
$year--;
echo "<h1>$year</h1>";

//operadores de asignacion
$edad = 55;
echo $edad.'<br>';
echo ($edad+=6).'<br>';

?>