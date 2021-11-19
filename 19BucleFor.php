<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{
            text-align:center;
        }
        #datos_usuario {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        input {
            width: 80%;
            height: 30px;
            margin: 0.5rem;
        }

        button {
            padding: 10px 10px;
            border: 2mm;
            background: rgb(100, 200, 255);
            cursor: pointer;
        }
    </style>
</head>
<body>
<h1>BUCLE FOR</h1>
<?php
/*
Sintaxis:
    for (iniciacion bucle; condicion del bucle; incremento/decremento) {
    }
*/
/*
    for ($i=0; $i<=3; $i++){
        echo "<p>Hemos entrado en el bucle incrementando</p>";
    }

    for ($i=0; $i<=3; $i++){
        echo "<p>Hemos entrado en el bucle decrementando</p>";
    }
    for ($i=0; $i<=8; $i+=2){
        echo "<p>Hemos entrado en el bucle incrementando de a dos</p>";
        if ($i==6){
            echo "<p>Bucle Interrumpido</p>";
            break;
        }
    }
*/
/*
    for ($i=0; $i<=10; $i++){
        echo "9 x $i =  " . 9*$i . "<br>";
    }
    echo "Hemos salido del bucle";
*/
    for ($i=10; $i>=-10; $i--){
        if ($i==0){
            echo "División por 0 no es posible <br>";
            continue;
        }
        echo "7 / $i =  " . 7/$i . "<br>";
    }
    echo "Hemos salido del bucle";
?>

</body>
</html>