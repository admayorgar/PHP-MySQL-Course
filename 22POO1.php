<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>PROGRAMACION ORIENTADA A OBJETOS - POO</h1>
    <?php

        //clase e instancias
        class Auto{
        //propiedades y metodos, cambio de propiedades y llamadas a metodos
            var $ruedas;
            var $color;
            var $motor;

            //para programar el estado inicial del objeto se crea un método constructor:

            function __construct(){
                $this->ruedas=4;
                $this->color="";
                $this->motor=1600;

            }

            function arrancar(){
                echo "Estoy arrancando<br>";
            }
            function girar(){
                echo "Estoy girando<br>";
            }
            function frenar(){
                echo "Estoy frenando<br>";
            }

            function establece_color($color_coche, $nombre_coche){
                $this->color=$color_coche;
                echo "El color de " . $nombre_coche . " es " . $this->color . "<br>";
            }
        }
            //instancias:
            $renault=new Auto();
            $mazda=new Auto();
            $seat=new Auto();

            $renault->establece_color("Rojo", "Renault" );
            $seat->establece_color("Azul", "Seat");



            //llamada a un método:
            $mazda->girar();
            echo  $mazda->ruedas;
    ?>

</body>
</html>