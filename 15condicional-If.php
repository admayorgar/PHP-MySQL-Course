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
/* OPERADORES LOGICOS
Ejemplo	    Nombre	            Resultado
$a and $b	And (y)	            true si tanto $a como $b son true.
$a or $b	Or (o inclusivo)	true si cualquiera de $a o $b es true.
$a xor $b	Xor (o exclusivo)	true si $a o $b es true, pero no ambos.
! $a	    Not (no)	        true si $a no es true.
$a && $b	And (y)	            true si tanto $a como $b son true.
$a || $b	Or (o inclusivo)	true si cualquiera de $a o $b es true.
 */

/*
 * PROCEDENCIA DE OEPRADORES
Asociatividad	Operadores	                                                Información adicional
no asociativo	clone new                                                   clone and new
izquierda	    [	                                                        array()
derecha	        **	                                                        aritmética
derecha	        ++ -- ~ (int) (float) (string) (array) (object) (bool) @	tipos e incremento/decremento
no asociativo	instanceof	                                                tipos
derecha	        !	                                                        lógico
izquierda	    * / %	                                                    aritmética
izquierda	    + - .	                                                    aritmética y string
izquierda	    << >>	                                                    bit a bit
no asociativo	< <= > >=	                                                comparación
no asociativo	== != === !== <> <=>	                                    comparación
izquierda	    &	                                                        bit a bit y referencias
izquierda	    ^	                                                        bit a bit
izquierda	    |	                                                        bit a bit
izquierda	    &&	                                                        lógico
izquierda	    ||	                                                        lógico
derecha     	??	                                                        comparación
izquierda	    ? :                                                         ternario
derecha	        = += -= *= **= /= .= %= &= |= ^= <<= >>=	                asignación
izquierda	    and	                                                        lógico
izquierda	    xor	                                                        lógico
izquierda	    or	                                                        lógico
 */

    $var1=true;
    $var2=false;
    $resultado=$var1 && /*and*/ $var2; //almacenar en resultado=false
    if($resultado==true){
        echo "Correcto";
    }else{
        echo "Incorrecto";
    }
?>
</body>
</html>
