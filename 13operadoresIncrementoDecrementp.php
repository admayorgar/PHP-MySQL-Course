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
            <label for="operation"></label>
            <select name="operation" id="operation">
                <option value="incremento">Incremento</option>
                <option value="decremento">Decremento</option>

            </select>
        </p>
        <p>
            <input type="submit" name="button" id="button" value="Enviar" onclick="prueba">
        </p>
    </form>

    <?php
    if (isset($_POST["button"])){
        $operacion = $_POST["operation"];
        $numero1 = $_POST["num1"];

        if(!strcmp("incremento", $operacion)){
            $numero1++;
            echo "El resultado es: " . $numero1;
        }

        if(!strcmp("decremento", $operacion)) {
            $numero1--;
            echo "El resultado es: " . $numero1;
        }
    }
    ?>

</body>
</html>