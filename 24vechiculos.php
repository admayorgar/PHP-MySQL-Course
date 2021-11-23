<?php

    class Coche{
        var $ruedas;
        var $color;
        var $motor;

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

    }

    //------------------------------------------------------

class Camion{
    var $ruedas;
    var $color;
    var $motor;

    function __construct(){
        $this->ruedas=8;
        $this->color="gris";
        $this->motor=2600;
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

    function establece_color($color_camion, $nombre_camion){
        $this->color=$color_camion;
        echo "El color de " . $nombre_camion . " es " . $this->color . "<br>";
    }
}