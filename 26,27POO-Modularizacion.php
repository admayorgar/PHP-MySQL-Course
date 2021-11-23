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

include ("26,27POO-vehiculos.php");

$mazda=new Coche();
$pegaso=new Camion();
//SETTER--modificar
//GETTER--ver las propiedades
echo "El Mazda tiene " . $mazda->get_ruedas() . " ruedas. " . "Y un motor " . $mazda->get_motor() . "<br>";

echo "El Pegaso tiene " . $pegaso->get_ruedas() . " ruedas" . "<br>";
$pegaso->frenar();
$pegaso->arrancar();

?>

</body>
</html>