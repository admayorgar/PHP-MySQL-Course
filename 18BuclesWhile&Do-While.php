<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>BUCLES</h1>
    <?php
    /*
     BUCLES: Etructuras repetitivas. Repiten el codigo en su interior.
     2 tipos:
            -Bucles indeterminados:
                -While
                -Do while
            -Bucles Determinados
                -For
        La diferencia entre While y Do-While es que este ultimo ejecuta el interior aunque la condicion sea falsa.
    */

    /* WHILE
    $var1=1;
    while($var1<6){
        echo "Estamos ejecutando el codigo del bucle <br>";
        $var1++;
    }
    echo "Hemos salido del bucle";
    */
    $var1=7;
    do{
        echo "Estamos ejecutando el codigo del bucle <br>";
        $var1++;
    }while($var1<6);
    echo "Hemos salido del bucle";
    ?>

</body>
</html>