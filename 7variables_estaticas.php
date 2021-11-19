<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php

/*
 VARIABLES ESTÁTICAS

 */
    function incrementaVariable(){
        static $contador=0; //la linea se ejecute una sola ves (static) y que se conserve el valor de la ejecución
        $contador++;
        echo $contador . "<br>";
    }
    incrementaVariable();
    incrementaVariable();
    incrementaVariable();

    //Cuando quiero que una variable conserve su valor al salir de su ambito, uso una variable estática STATIC
?>

</body>
</html>
