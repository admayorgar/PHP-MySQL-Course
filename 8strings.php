<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .resaltar{
            color:#F00;
            font-weight:bold;
        }
    </style>
</head>
<body>


<?php

/*
 STRINGS

 */

//Esto para casos donde por ejemplo tengo clases y que nos e me vean afectadas
//Tengo que usar \ para que no me afecte mi sentencia. Igual con las comillas siemples:
    echo "<h1 class=\"resaltar\"> Ejemplos de Strings </h1>";

//Concatenar muchos string con muchos nombres de variables
    $names="Juan";
    echo "Hola $names <br>";

//Ejemplos de funciones para comparar:

    $variable1="Casa";
    $variable2="CASA";

    //strcmp
    $resultado=strcmp($variable1,$variable2); //Devuelve 1 si no son iguales o 0 si lo son.

    echo "El resultado es " . $resultado . "<br>";

    //strcasecmp --> ignora mayus de minus
    $result=strcasecmp($variable1,$variable2); //Devuelve 1 si no son iguales o 0 si lo son.
    echo "El resultado es " . $result . "<br>";
    /*
     Puedo introducir un IF ahora:
     */

    if($result){
        echo "No coinciden";
    }
        else{
            echo "Coinciden.";
        }
?>

</body>
</html>
