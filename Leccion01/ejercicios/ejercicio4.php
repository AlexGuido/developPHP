<?php
/*
Recoger dos numeros dentro de la url y hacer las operaciones 4 operaciones 
basicas
*/

if(isset($_GET['numero1']) && ($_GET['numero2'])){
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];
    //http://localhost/developPHP/Leccion01/ejercicios/ejercicio4.php?numero1=20&numero2=6
    echo "<h1>Calculadora</h1><br>";
    echo "<h1>Suma de $numero1 y $numero2 es: ".($numero1 + $numero2)."</h1><br>";
    echo "<h1>Resta de $numero1 y $numero2 es: ".($numero1 * $numero2)."</h1><br>";
    echo "<h1>Multiplicacion de $numero1 y $numero2 es: ".($numero1 * $numero2)."</h1><br>";
    echo "<h1>Division de $numero1 y $numero2 es: ".($numero1 / $numero2)."</h1><br>";

}else{
    echo "<h1>Introduce correctamente los valores por la url</h1>";
}


?>