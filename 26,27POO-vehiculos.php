<?php

class Coche
{
    //para que nadie pueda cambiar cosas erroneas uso private
    protected $ruedas; //propiedad encapsulada
    var $color; //public es por defecto
    protected $motor;

    function __construct()
    {
        $this->ruedas = 4;
        $this->color = "";
        $this->motor = 1600;
    }
    function get_ruedas(){
        return $this->ruedas;
    }
    function get_motor(){
        return $this->motor;
    }

    function arrancar()
    {
        echo "Estoy arrancando<br>";
    }

    function girar()
    {
        echo "Estoy girando<br>";
    }

    function frenar()
    {
        echo "Estoy frenando<br>";
    }

    function set_color($color_coche, $nombre_coche)
    {
        $this->color = $color_coche;
        echo "El color de " . $nombre_coche . " es " . $this->color . "<br>";
    }
}
//------------------------------------------------------

class Camion extends Coche{

    function __construct()
    {
        $this->ruedas = 8;
        $this->color = "";
        $this->motor = 2600;
    }

    //debo hacer una sobre escritura de métodos, ya que algunos metodos no son de utilidad para la subclase.

    function establece_color($color_camion, $nombre_camion){
        $this->color=$color_camion;
        echo "El color de " . $nombre_camion . " es " . $this->color . "<br>";

    }
    function arrancar(){
        parent::arrancar();
        echo  "Camion arrancado";
    }

}
