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
VARIABLES
No deben incluir simbolos extraños, no Comenzar por valores numéricos.
Todas las sentencias terminan con ;
Los strings van siempre en comillas, pueden ser "" y ''. Aunque no es lo mismo.
No es necesario especificar el tipo de dato cuando nombro mi variable
Es un lenguaje de poco tipado
Datos umericos no van entre comillas
Puedo concatenar utilizando un punto .
Si escribo con '' me toma literalmente lo que esta en codigo, si escribo con comilla "" me vale el tema de la variable dentro de las comillas.

*/

    $nombre="Juan";
    $edad=18;
    print "El nombre del usuario es: " . $nombre . "<br>";
    print "El nombre del usuario es: $nombre" . "<br>" ;
    //Print no permite varias variables sin concatenar.
    echo $nombre . "<br>" ;
    echo "El nombre del usuario es: " . $nombre . " y tiene " . $edad . "años. <br>" ;
    //Echo permite:
    echo $nombre, $edad . "<br>" ;

/*
 FLUJO DE EJECUCIÓN

 */
    echo "El flujo va de arriba a abajo. Si hay cosas en HTML antes de mi codigo php las va  ejecutar antes. <br>";
    function dameDatos(){
        //No se ejecuta hasta que no llame la función:
        echo "este es el mensaje del interior de la función <br>";
    }
    echo  "Dos <br> ";
    dameDatos();

    //INCLUDE
        include ("including-function.php");
        echo "Este es el ejemplo <br>";
        usandoInclude();

        //Si yo llamo uno que no existe, me lanza error, pero igualmente me ejecuta el resto:

        //funcionNoExiste();

    //Esta sería la principal diferencia con el REQUIRE. Que si no esta nombrado o no existe, en vez de darme error, ejecuta el archivo hasta ese punto y luego se DETIENE.

/*
 AMBITOS DE LAS VARIABLES: Lugar de actuación de la variable.
    Local: Declarada dentro de una función. Visible y accesible desde dentro de la función.
    Global: Declarada en cualquier lugar del código PHP (dentro  fuera de una función). Visible y accesible en cualquier lugar del código.
    Super global: Declarada como Array. Visible y accesible desde fuera del script PHP
 */
    $name="Pedro";
    function giveName() {
        global $name; //Si no hago esta especificacion me sigue apareciendo Pedro. Y tiene que estar si o si en esta ubicación.
        $name="Maria";
    }
    giveName();
    echo $name;
/*
 VARIABLES ESTÁTICAS

 */



?>

</body>
</html>
