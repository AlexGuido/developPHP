<?php

/*Funcion: conjunto de instrucciones agrupadas bajo un nombre 
en concreto y pueden reutilizarse solamente invocando a la 
funcion 
*/
//Ejemplo 1
function showNames(){
    echo "www.alexguido.com <br>";
    echo "www.alxguido.com <br>";
}

showNames();
//Ejemplo 2
function multi($x){
    echo "<h3>Tabla de multiplicar del $x</h3>";
    for($i=1; $i<=10; $i++){
        echo "$x x $i = ".($i*$x)."<br>";
    }
}
//pedir el numero por url
if(isset($_GET['x'])){
    multi($_GET['x']);
}else{
    echo "Error";
}
//ejemplo 3 (funcion con dos parametros)
function calc($x,$y){
    echo "<h4>Operaciones Basicas con $x y $y</h4>";
    echo "Suma = ".($x+$y)."<br>";
    echo "Resta = ".($x-$y)."<br>";
    echo "Multiplicacion = ".($x*$y)."<br>";
    echo "Division = ".($x/$y)."<br>";
}
//pedir el numero por url
if(isset($_GET['x'],$_GET['y'])){
    calc($_GET['x'],$_GET['y']);
}else{
    echo "Error";
}
echo "<br>";
//ejemplo 4 funciones dentro de otras funciones 
function getName($name){
    $texto = "El nombre es: $name";
    return $texto;
}
function getLastname($lastname){
    $texto = "El apellido es: $lastname";
    return $texto;
}

function returnName($name,$lastname){
    $texto = getName($name)."<br>".getLastname($lastname);
    return $texto;
}
echo returnName("alxguido.com","alexguido.com");
?>