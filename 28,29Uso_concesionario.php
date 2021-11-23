<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>

<?php

	include("28,29Concesionario.php");

	/*Compra_vehiculo::$ayuda=10000; --> probar sin que static sea privada.
	Puedo manipularla si es que la dejo asi no mas. Lo correcto es encapsularla, para que no sea editable, solo accesible dentro de la clase.*/

    //SI SE HABILITARA LA AYUDA DEL GOBIERNO HACEMOS:

    Compra_vehiculo::descuento_gobierno();//Si no elimino esta linea y veo que no me hace ningun descuento.

	//Primera Instancia creamos: compra_Antonio

        $compra_Antonio=new Compra_vehiculo("compacto");

        $compra_Antonio->climatizador();

        $compra_Antonio->tapiceria_cuero("blanco");

	echo $compra_Antonio->precio_final() . "<br>";

    //Segunda Instancia creamos: compra_Ana

        $compra_Ana=new Compra_vehiculo("compacto");

        $compra_Ana->climatizador();

        $compra_Ana->tapiceria_cuero("rojo");

        echo $compra_Ana->precio_final() ;
    /*
     * Cuando decimos que un metodo es estatico, decimos que pertenece unicamente a la clase donde se ha creado.
     */
?>
</body>
</html>