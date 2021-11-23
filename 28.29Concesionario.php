<?php

	class Compra_vehiculo{
		
		private $precio_base;
		//si esta variable no fuera estatica tendria que definirla en todo momento que la quisiera emplear:
		private static $ayuda=0;
        /*
         Sin embargo si tenemos como variable, la llamamos siempre, si es por ejemplo en este caso especifico, una ayuda que se habilite unicamente por temporadas, sería mas eficiente defirnila en un método que podamos llamar cada vez que queramos usarlo.
         */
		
				
		function __construct($gama){
			
			if($gama=="urbano"){
				
					$this->precio_base=10000;
				
			}else if($gama=="compacto"){
				
				
					$this->precio_base=20000;	
				
			}
			
			else if($gama=="berlina"){
				
					$this->precio_base=30000;	
				
			}		

		}// fin constructor

        //Ejemplo metodo STATIC

        static function descuento_gobierno(){
            //Si quiero puedo definir las fechas en las que se habilite y demás usando el if:
            if (date("m-d-y")>"11-25-21"){
            self::$ayuda=4500;
            }
        }

		function climatizador(){		
			
			
				$this->precio_base+=2000;					
			
			
		}// fin climatizador
		
		
		function navegador_gps(){
			
			$this->precio_base+=2500;	
			
		}//fin navegador gps
		
		
		
		function tapiceria_cuero($color){
			
			if($color=="blanco"){
			
				$this->precio_base+=3000;
			}
			
			else if($color=="beige"){
				
				$this->precio_base+=3500;
				
			}
			
			else{
				
				$this->precio_base+=5000;
				
			}
			
		}// fin tapicería
		
		
		
		function precio_final(){
			
			$valor_final=$this->precio_base-self::$ayuda;
            //self:: hacemos referencia  a campos o variables estaticas
			return $valor_final;	
			
		}// fin precio final
		
		
		
	}// fin clase
