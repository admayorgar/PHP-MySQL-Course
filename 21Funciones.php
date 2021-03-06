<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>FUNCIONES - PARAMETROS POR VALOR Y POR REFERENCIA</h1>
<?php

    function incrementa($valor1){
        $valor1++;
        return $valor1;
    }
    $numero=5;
    echo incrementa($numero) . "<br>"; //se debe imprimir un 6
    echo $numero  . "<br>"; //imprime un 5 que es el que estoy asignando
    // echo incrementa(5); //se debe imprimir un 6

    //otro ejemplo

    function incrementandoDistinto(&$valor2){
        $valor2++;
        return $valor2;
    }
    $num=5;
    echo incrementandoDistinto($num) . "<br>";
    echo $num  . "<br>";

    //OTRO EJEMPLO

    function cambia_mayus($param){
        $param=strtolower($param);
        $param=ucwords($param);
        return $param;
    }
    $cadena="hOlA mUnDo";
    echo  cambia_mayus($cadena)  . "<br>";
    echo $cadena . "<br>";

    //y cambiandolo a por referencia:]

    function cambia_mayuss(&$parame){
        $parame=strtolower($parame);
        $parame=ucwords($parame);
        return $parame;
    }
    $cadenas="hOlA mUnDo";
    echo  cambia_mayuss($cadenas)  . "<br>";
    echo $cadenas . "<br>";

?>

</body>
</html>