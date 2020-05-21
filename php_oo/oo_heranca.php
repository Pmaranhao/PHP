<?php

	class Carro extends veiculo{
		//public $placa = 'ABC1234';
		//public $cor = 'Branco';
		public $teto_solar = true;

		/*function acelerar() {
			echo 'Acelerar';
		}*/

		function __construct($placa, $cor){
			$this->$placa = $placa;
			$this->$cor = $cor;
		}

		function abrirTetoSolar() {
			echo 'Abrir teto solar';
		}

		function alterarPosicaoVolante() {
			echo 'Aterar posição volante';
		}
	}

	class Moto extends veiculo {
		//public $placa = 'DEF1122';
		//public $cor = 'Preta';
		public $contraPesoGuidao = true;

		function __construct($placa, $cor){
			$this->$placa = $placa;
			$this->$cor = $cor;
		}


		/*function acelerar() {
			echo 'Acelerar';
		}*/

		function empinar() {
			echo 'Empinar';
		}
	}

	class Veiculo{
		public $placa = null;
		public $cor = null;

		function acelerar() {
			echo 'Acelerar';
		}

		function freiar() {
			echo 'Freiar';
		}


	}


	$carro = new Carro('ABC1234','Branco');
	$moto = new Moto('DEF1122','Preta');

	echo '<pre>';
	print_r($carro);
	echo '<br/>';
	print_r($moto);
	echo '</pre>';
	echo '<br/> <hr/>';

	$carro->abrirTetoSolar();
	echo '<br/>';
	$carro->acelerar();
	echo '<br/>';
	$carro->freiar();
	echo '<br/> <hr/>';
	
	$moto->empinar();
	echo '<br/>';
	$moto->acelerar();
	echo '<br/>';
	$moto->freiar();

?>