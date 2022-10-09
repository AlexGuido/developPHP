<?php
/*
variables globales: Son las que se declaran fuera de una funcion y estan
disponibles dentro y fuera de las funciones 

Variables locales: Son las que se definen dentro de una funcion y no pueden ser usadas
fuera de la funcion, solo estan disponibles dentro a menos que hagamos un return.

*/
// variable global 
$frase = "ni los genios son tan genios ni los mediocres tan mediocres";

echo $frase;

function helloWorld(){
    global $frase;
    echo "<h1>$frase</h1>";

    $year = 2022;
    echo "<h1>$year</h1>";
    return $year;
}

helloWorld();

//funciones variables
function morning(){
    return "Hello, good morning";
}
function evening(){
    return "hi, whats going on?";
}
function night(){
    return "good night";
}
$horario = "morning";
echo $horario();
?>