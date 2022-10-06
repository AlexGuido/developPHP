<?php
/*
Escribir un script que nos muestre por pantalla todos los numeros pares
del 1 al 100
*/

for($i=0;$i<=100;$i++){
    if($i%2==0){
        echo $i;
        echo "<br>";
    }
}

?>