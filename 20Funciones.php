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
<h1>FUNCIONES</h1>
<?php
    /*
     Par qué sirven las funciones? --> Automatizar tareas, permite eliminar código repetitivo en los porgramas.
     - Funciones Predefinidas(vienen con el legunaje PHP)
     - Funciones Propias: las crea el programador con el objetivo de reutilizarlas en el futuro
     */

    //Función predeterminada
    $palabra="andy";
    echo(strtoupper($palabra)) . "<br>";

    //Funcion propia

    function suma($num1, $num2){
        $resultado=$num1+$num2;
        return $resultado;
    }
    echo suma(1,2) . "<br>";

    //EJEMPLO

    echo "<h2>Ejemplo</h2>";

    function frase_mayus($frase, $conversion=true){
        $frase=strtolower($frase);
        if($conversion==true){
            $result=ucwords($frase);
        }else{
            $result=strtoupper($frase);
        }
        return $result;
    }
    echo(frase_mayus("esto es una prueba"));
?>

</body>
</html>