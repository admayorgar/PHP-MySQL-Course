<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="form1" method="post" action="">
        <p>
            <label for="num1"></label>
            <input type="text" name="num1" id="num1">
            <label for="num2"></label>
            <input type="text" name="num2" id="num2">
            <label for="operation"></label>
            <select name="operation" id="operation">
                <option value="Suma">Suma</option>
                <option value="Resta">Resta</option>
                <option value="Multiplicacion">Multiplicación</option>
                <option value="Division">División</option>
                <option value="Modulo">Módulo</option>
            </select>
        </p>
        <p>
            <input type="submit" name="button" id="button" value="Enviar" onclick="prueba">
        </p>
    </form>

    <?php
    if (isset($_POST["button"])){
        $numero1 = $_POST["num1"];
        $numero2 = $_POST["num2"];
        $operacion = $_POST["operation"];

        if(!strcmp("Suma", $operacion)){
            echo "El resultado es: " . ($numero1+$numero2);
        }
        if(!strcmp("Resta", $operacion)){
            echo "El resultado es: " . ($numero1-$numero2);
        }
        if(!strcmp("Multiplicacion", $operacion)){
            echo "El resultado es: " . ($numero1 * $numero2);
        }
        if(!strcmp("Division", $operacion)){
            echo "El resultado es: " . ($numero1/$numero2);
        }
        if(!strcmp("Modulo", $operacion)){
            echo "El resultado es: " . ($numero1%$numero2);
        }
    }
    ?>

</body>
</html>