<?php
/*Hacer un programa que muestre todos los numeros impares entre dos numeros
que lleguen por la url($_GET)
*/

if(isset($_GET['num1']) && ($_GET['num2'])){
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];

    echo "<h1>Numeros impares entre Numeros</h1>";
    echo "<h2>Los numeros impares entre $num1 y $num2 son: </h2>";
    
    if($num1 < $num2){
    for($i=$num1;$i<=$num2;$i++){
        if($i%2!=0){
            echo "$i<br>";
        }
        
    }
}elseif($num1 > $num2){
    for($i=$num2;$i<=$num1;$i++){
        if($i%2!=0){
            echo "$i<br>";
        }
    }
}
}else{
    echo "<h1>Introduce correctamente los valores por la url</h1>";
}

?>