<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>POO - HERENCIA</h1>
    <?php
    /*EXTENDS -> Palabra reservada para inidicar la heriencia de una clase a otra.
    Una SUBCLASE (clase Hijo) hereda de la SUPERCLASE(clase Padre)
    PHP no soporta la heriencia múltiple.
    Para el ejemplo retomaré el ejemplo anterior y que la clase camión herede de coche.
    */

    include ("25POO-Herencia-vechiculos.php");

    $mazda=new Coche();
    $pegaso=new Camion();

    echo "El Mazda tiene " . $mazda->ruedas . " ruedas" . "<br>";
    echo "El Pegaso tiene " . $pegaso->ruedas . " ruedas" . "<br>";
    $pegaso->frenar();
    $pegaso->arrancar();

    ?>

</body>
</html>