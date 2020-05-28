<?php

	class Exemplo {
		public static $atributo1 = 'Atributo estático';// n~so está acessível através do operador ->
		public $atributo2 = 'Atributo normal';

		public static function metodo1(){
			echo 'Método estático';
		}//Não pode utilizar o $this

		public function metodo2(){
			echo 'Método normal';
		}
	}

	echo Exemplo::$atributo1;
	echo '<br/>';
	Exemplo::metodo1();
    echo '<br/><br/>';
	
	$x = new Exemplo();
	echo $x->atributo2;
	echo '<br/>';
	$x->metodo2();
	

?>