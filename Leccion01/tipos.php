<?php
/*Tipos de datos:
    entero (int)
    decimal (float/double)
    cadena (string)
    boleano (bool)
    null
    arrays
    objeto
*/
$numero = 100;
$decimal = 27.9;
$texto = 'hola';
$verdadero = true;
$nulo = null;
//obtener tipo de dato  gettype($variable)
echo gettype($numero).'<br>';
echo gettype($decimal).'<br>';
echo gettype($texto).'<br>';
echo gettype($verdadero).'<br>';
echo gettype($nulo).'<br>';

//debugging
$miNombre = 'alxguido';
var_dump($miNombre);



?>