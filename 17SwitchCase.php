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
<h1>SWITCH - CASE</h1>
<div>
    <form action="" method="post" name="datos_usuario" id="datos_usuario">
        <label for="nombre_usuario">Nombre:</label>
        <input type="text" name="nombre_usuario" id="nombre_usuario"><br>

        <label for="edad_usuario">Contraseña:</label>
        <input type="text" name="contra_usuario" id="contra_usuario"><br>

        <button type="submit" name="enviando" id="enviando" value="Enviar">Enviar</button>
    </form>
</div>
<?php
/*
    if(isset ($_POST["enviando"])){
       $edad=$_POST["edad_usuario"];

       if($edad<=18){
           echo "<p class='validado'>Eres menor de edad</p>";
       }else if ($edad<=40){
           echo "<p class= 'validado'>" . "Eres joven" . "</p>";
       }else if ($edad<=65){
            echo "<p class= 'no_validado'>" . "Eres maduro" . "</p>";
        }else{
            echo "<p class= 'no_validado'>" . "Cuidate" . "</p>";
        }
    }
?>

*/
if(isset ($_POST["enviando"])){
    $nombre=$_POST["nombre_usuario"];
    $contra=$_POST["contra_usuario"];

    /* EN CASO DE SOLO COMPARA RUNA VARIABLE
    switch ($nombre){
       case "Andrea":
            echo "Usuario autorizado. Hola Andrea";
            break;
       case "Maria":
           echo "Usuario autorizado. Hola Maria";
           break;
       case "Juan":
           echo "Usuario autorizado. Hola Juan";
           break;
       default:
           echo "Usuario no autorizado";
   }
    */
    switch (true){
        case $nombre=="Andrea" && $contra=="1234":
            echo "Usuario autorizado. Hola Andrea";
            break;
        case $nombre=="Maria" && $contra=="1234":
            echo "Usuario autorizado. Hola Maria";
            break;
        case $nombre=="Juan" && $contra=="1234":
            echo "Usuario autorizado. Hola Juan";
            break;
        default:
            echo "Usuario no autorizado";
    }
}
?>
<p></p>
</body>
</html>