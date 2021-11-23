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

    $andy="Andrea";
//ARRAY INDEXADO
    $semana[]="Lunes";
    $semana[]="Martes";
    $semana[]="Miercoles";
    $semana[]="Jueves";

    echo $semana[1] . "<br>";

    //Recorrer el array
    for ($i=0; $i<count($semana); $i++){ //usamos la funcion count si no sabemos la cantidad de elementos
        echo $semana[$i] . "<br>";
    }
    //agregar un elemento y lo verifico
    $semana[]="Viernes";
    for ($i=0; $i<count($semana); $i++) { //usamos la funcion count si no sabemos la cantidad de elementos
        echo $semana[$i] . "<br>";
    }
//_______________________________________________


//ARRAY ASOCIADO

    $mes=array(0 =>'Enero', 1 =>'Febrero', 2 =>'Marzo' );
    echo $mes[1] . "<br>";

    $datos=array("Nombre"=>"Andy", "Apellido"=>"Mayorga", "Edad"=>23);
    echo $datos ["Apellido"] . "<br>";

    //comprobar si es variable o array
    //se da por sentado que es true o se agrega ==true
    if (is_array($datos /*$andy--> no es array */)){
        echo "Es un array"  . "<br>";
    }else{
        echo "No es un array" . "<br>";
    }
    //recorrer un array asociado
    foreach ($datos as $clave=> $valor) {
        echo  "A $clave le corresponde $valor <br>";
    } //clave y valor los defino como quiera.

    //agregar un elemento array asociativo y verificarlo
    $datos["Pais"]="España";
    foreach ($datos as $clave=> $valor) {
    echo  "A $clave le corresponde $valor <br>";}
//_______________________________________________

//ORDENAR ELEMENTOS
    $materias= array("Matematicas", "Biologia", "Estadistica", "Canto");
    sort($materias);
//quiero ordenarlos alfabeticamente usando una funcion: sort, ubicandolo inmediatamente antes del bucle for
    for ($i=0; $i<count($materias); $i++){
        echo $materias[$i] . "<br>";
    }

//_______________________________________________

//ARRAYS MULTIDIMENSIONALES


    $alimentos=array("fruta"=>array("tropical"=>"Kiwi",
                                    "cítrico"=>"mandarina",
                                    "otros"=>"manzana"),
                     "leche"=>array("animal"=>"vaca",
                                    "vegetal"=>"coco"),
                     "carne"=>array("vacuno"=>"lomo",
                                    "porcino"=>"pata"));
    //echo $alimentos["carne"]["vacuno"];

    //RECORRER ARRAY MULTIDIMENSIONAL, dando un nombre a cada dimension USANDO FOREACH:

    /*foreach ($alimentos as $categoria_alim=>$origen) {
        echo "$categoria_alim:<br>";
        //le decimos que lo desdoble, por cada origen, nos traiga el elemento final, siempre y cuando hayan elementos en la lista
        while(list($key,$value)= each($origen)){
            echo "$key=$value<br>";
        }
        echo "<br>";
    }
    */
    //USANDO VAR_DUMP

    echo var_dump($alimentos);


?>

</body>
</html>