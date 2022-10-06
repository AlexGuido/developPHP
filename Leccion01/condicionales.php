<?php
//condicional if
$color = "Rojo"; 
if($color == "Rojo"){
    echo "El color es Rojo";
}
else{
    echo "El color no es Rojo";
}

//operadores de comparacion
/*
== igual
=== identico
!= distinto
<> diferente
!== no identico
< menor que
> mayor que 
<= menor o igual que
>= mayor o igual que 
Operadores logicos
and &&
|| or 
! not 
and, or
*/
$nombre = "Furby";
$ciudad = "Madrid";
$edad = 18;
$mayoriaEdad = 18;

if ($edad >= $mayoriaEdad){
    echo "<h1> $nombre es mayor de edad";
}else{
    echo "<h2> $nombre no es mayor de edad";
}
echo "<h2> y es de $ciudad";

//else if
$dia = 3;
if ($dia == 1){
    echo "Es Lunes";
}elseif($dia == 2){
    echo "Es martes";
}elseif($dia == 3){
    echo "Es miercoles"; 
}elseif($dia == 4){
    echo "Es jueves";
}elseif($dia == 5){
    echo "Es viernes";
}else{
    echo "Es finde";
}
echo "<br>";
//condiciones dentro de una sentencia
$edad1 = 18;
$edad2 = 64;
$edad_oficial = 20;

if ($edad_oficial >= $edad1 && $edad_oficial <= $edad2 ){
    echo "Esta en edad de trabajar";
}else{
    echo "No esta en edad de trabajar";
}
echo "<hr>";
$pais = "Mexico";
if($pais == "Mexico" || $pais == "España" || $pais == "Colombia"){
    echo "Se habla español";
}else{
    echo "No se habla español";
}
echo "<hr>";
// switch 

switch ($dia){
    case 1:
        echo "Lunes";
        break;
    case 2:
        echo "Martes";
        break;
    case 3:
        echo "Miercoles";
        break;
    case 4: 
        echo "Jueves";
        break;
    case 5:
        echo "Viernes";
        break;
    default:
        echo "Fin de semana";
}

//goto
goto marca;
echo "<h3>Instruccion 1 </h3>";
echo "<h3>Instruccion 2 </h3>";
echo "<h3>Instruccion 3 </h3>";
echo "<h3>Instruccion 4 </h3>";

marca:
echo "Me he saltado 5 echos";

?>