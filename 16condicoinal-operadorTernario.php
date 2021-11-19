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
        table{
            background-color:#FFC;
            padding:5px;
            border:#666 5px solid;
        }
        .no_validado{
            font-size:18px;
            color:#F00;
            font-weight:bold;
        }
        .validado{
            font-size:18px;
            color:#0C3;
            font-weight:bold;
        }
    </style>
</head>
<body>

<!-- validacion.php -->
    <form action="" method="post" name="datos_usuario" id="datos_usuario">
        <table width="15%" align="center">
            <tr>
                <td>Nombre:</td>
                <td><label for="nombre_usuario"></label>
                    <input type="text" name="nombre_usuario" id="nombre_usuario"></td>
            </tr>
            <tr>
                <td>Contraseña:</td>
                <td><label for="edad_usuario"></label>
                    <input type="text" name="contra" id="contra"></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="enviando" id="enviando" value="Enviar"></td>
            </tr>
        </table>
    </form>
    <?php
        if(isset ($_POST["enviando"])) {
            $contra = $_POST["contra"];
            $nombre = $_POST["nombre_usuario"];
            $resultado= $nombre== "Andrea" && $contra=="1234" ? "Puedes acceder": "No puedes acceder";
            echo $resultado;
        }
/*
    Casi todo lo que se puede hacer con el if, se puede hacer con el ternario. A excepción de que con el IF puedes hacer muuuchas evaluaciones mientras que con el operador ternario seria solo true and false.
*/
    /*
           if($edad<18){
               echo "<p class= 'no_validado'>" . "Eres menor de edad. No tienes acceso" . "</p>";
           }else{
               echo "<p class='validado'>Puedes entrar</p>";
           }
        }
    */

    ?>
<p></p>
</body>
</html>