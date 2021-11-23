<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>POO -  REUTILIZACION DE CODIGO</h1>
<?php
    include ("24vechiculos.php");

    $mazda=new Coche();
    $pegaso=new Camion();

    echo "El Mazda tiene " . $mazda->ruedas . " ruedas" . "<br>";
    echo "El Pegaso tiene " . $pegaso->ruedas . " ruedas" . "<br>";

?>

</body>
</html>