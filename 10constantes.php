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
 * El nombre de las constantes ha de ir en mayusculas
 * el nombre de las constantes no debe llevar el simbolo $ como si las variables
 * Es obligatorio usar define() para definir constantes
 * El ambito de las vonstantes el global por defecto
 * No se pueden redefinir
 * Solo puenen almacenar valores escalares. (arrays no lo son)
 */

    define("AUTOR", "Andrea");
    echo AUTOR . "<br>";
    echo "El autor es: " . AUTOR . "<br>";
    //Constantes predefinidas:
    echo  "La linea de esta instrucción es: " . __LINE__ . "<br>";
    echo "Estamos trabajando con este fichero: " . __FILE__;

?>

</body>
</html>


