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

		function trocarMarcha() {
			echo 'Desengatar embreagem com o mão e engatar marcha com a pé';
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

		function trocarMarcha() {
			echo 'Desengatar embreagem com o pé e engatar marcha com a mão';
		}
	}

	class Caminhao extends Veiculo{}


	$carro = new Carro('ABC1234','Branco');
	$moto = new Moto('DEF1122','Preta');
	$caminhao = new Caminhao();

	$carro->trocarMarcha();
	echo '<br/>';
	$moto->trocarMarcha();
	echo '<br/>';
	$caminhao->trocarMarcha();


?>