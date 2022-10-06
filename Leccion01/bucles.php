<?php
/*bucle while: itera o repite la ejecucion de una serie de instrucciones
tantas veces con base en la condicion*/

$numero = 0;
while($numero <= 100){
    echo $numero;
    if($numero !=100){
        echo ", " ;
    }
    $numero++;
}

//ejemplo de numero que llega por url y su tabla de multiplicar
if (isset($_GET["numero"])){
    //cambiar tipo de dato
    $numero = (int)$_GET["numero"];
}else{
    $numero = 1;
}
echo "<h1>Tabla de multiplicar de $numero</h1>";
$contador = 0;
while($contador <= 10){
    echo "$numero x $contador = ".($numero*$contador)."<br>";
    $contador++;
}
echo "<hr>";
//do while
$edad = 18;
$contador = 1;
do{
    echo "Tienes acceso a local privado <br>";
    $contador++;

}while($edad >= 18 && $contador <= 10);

//bucle for
$resul = 0;
for($i=1;$i<=100;$i++){
    $resul += $i;
}
echo "<h1>La suma es: $resul</h1>"
?>