<?php
$cantantes =["2pac","Drake","Jlo","Alfredo"];
$numeros = [1,2,5,8,3,4];
//ordenar alfabeticamente o numericamente
asort($cantantes);
asort($numeros);
//var_dump($cantantes);
echo "<br>";
//var_dump($numeros);

//anadir elementos a un array
$cantantes[] = "cancerbero";
array_push($cantantes,"Jcole");

//quitar del array el ultimo elemento
array_pop($numeros);
unset($cantantes[2]);//eliminar el segundo elemento del array

//aleatorio
$indice = array_rand($cantantes);
echo $cantantes[$indice];
echo "<br>";
//orden inverso

var_dump(array_reverse($numeros));
echo "<br>";
//buscar dentro de un array
$resultado = array_search("Jcole",$cantantes);
echo $resultado;
echo "<br>";
//contar numero de elementos
echo count($cantantes);
echo "<br>";
echo sizeof($cantantes);
?>

