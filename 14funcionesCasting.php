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
    $num1=rand(10, 50);
    $num2=pow(4,2);
    //rand(int $min, int $max): int
    //Cuando aparece en negrita es obligatorio el parametro, si sale entre corchetes es opcional.
    echo "El numero aleatorio es:  " . $num1 . "<br>";
    echo "El numero exponente es:  " . $num2;
/*
 * Se tiene en cuenta el tema del CASTING
 * En PHP es mucho mas encillo, ya que tiene casting IMPLÍCITO -> facilitandolo.
 * Se manejan los tipos y demás de forma mas sencilla.
 * Se hace dinamicamente segun el contexto, la asignacion de valores a variables.
 */
    $num3 = "5"; //string
    $num3+=2; //int
    $num3+6.7; //float
    // En algunas ocaciones es necesrio hacer casting explícito.
    $num4="4";
    $resultado=(int)$num4; //Asi lo hago.

?>

</body>
</html>