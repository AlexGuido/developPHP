<?php
/* 
Arrays
Es una coleccion o conjunto de datos, bajo un unico nombre
y para acceder a esos valores posemos usar un indice numerico o alfanumerico
*/
$pelicula = "Batman";
$peliculas = array("Batman","spiderman","13 goin on 30");
$cantantes = ["2pac","Drake","Jennifer Lopez"];
//arrays asociativos
$personas = array(
    "nombre" => "alex",
    "apellido" => "Guido",
    "web" => "alexguido.com"
);
var_dump($personas["web"]);

//Recorrer con for
echo "<h1>Listado de peliculas</h1>";
echo "<ul>";
for ($i = 0; $i<= count($peliculas); $i++){
    echo $peliculas[$i]."<br>";
}
echo "</ul>";

//Recorrer con Foreach
echo "<h1>Lista de cantantes</h1>";
foreach ($cantantes as $i){
    echo "<li>".$i."</l1>";
}

//arrays multidimensionales
echo "<br>";
$contactos = array(
    array(
        "name" => "alexguido",
        "email" => "contacto@alexguido.com"
    ),
    array(
        "name" => "Denis",
        "email" => "contacto@denisguido.com"
    ),
    array(
        "name" => "Furby",
        "email" => "contacto@furby.com"
    )
);
echo $contactos[0]["email"];

?>