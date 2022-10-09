<?php
//Debugging
$nombre = "AlexGuido";
var_dump($nombre);

//fecha 
echo date ('d-m-y');
echo "<br>";
echo time();

//matematicas
echo "raiz cuadrada de 10: ".sqrt(10);
echo "<br>";
echo "Numero aleatorio entre 10 y 40: ".rand(10,40);
echo "<br>";
echo "Numero pi: ".pi();
echo "<br>";
echo "Redondear: ".round(7.897,1);

//funciones generales
echo "<br>";
echo gettype($nombre);

echo "<br>";
if(is_string($nombre)){
    echo "Esa variable es un string";
}

echo "<br>";
if(!is_float($nombre)){
    echo "La variable nombre no es un numero con decimales";
}
//comprobar si una variable existe
echo "<br>";
if(isset($nombre)){
    echo "La variable existe";
}else{
    "La variable no existe";
}
//limpiar espacios
echo "<br>";
$frase ="  mi contenido  ";
var_dump(trim($frase));

//eliminar variables / indices
$year = 2020;
unset($year);

//comprobar variable vacia
$texto = "  ";

if (empty(trim($texto))){
    echo "La variable texto esta vacia";
}else{
    echo "La variable texto tiene contenido";
}
echo "<br>";
//contar caracteres de un string
$cadena = "12345";
echo strlen($cadena);
echo "<br>";
//encontrar caracter
$frase = "la vida es bella";
echo strpos($frase,"vida");
echo "<br>";
//reemplazar palabras de un string
$frase = str_replace("vida","moto",$frase);
echo $frase;
echo "<br>";

//mayusculas y minusculas
echo strtolower($frase);
echo "<br>";
echo strtoupper($frase);
?>