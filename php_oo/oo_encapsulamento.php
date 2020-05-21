<?php

	class Pai {
		private $nome = 'Jorge';
		protected $sobrenome = 'Silva';
		public $humor = 'Feliz';
	
		public function getNome() {
			return $this->nome;
		}

		public function setNome($value) {
			if (strlen($value) >= 3) {
				$this->nome = $value;	
			}	
		}

		public function getSobrenome() {
			return $this->sobrenome;
		}

		public function setSobrenome($value) {
			if (strlen($value) >= 3) {
				$this->sobrenome = $value;	
			}	
		}
	}

	$pai = new Pai();
	echo $pai->humor;
	$pai->humor ='Triste';
	echo '<br/>';
	echo $pai->humor;
	echo '<br/><hr/>';

	echo $pai->getNome();
	$pai->setNome('Pedro');
	echo '<br/>';
	echo $pai->getNome();
	echo '<br/><hr/>';

	echo $pai->getSobrenome();
	$pai->setSobrenome('Maranhão');
	echo '<br/>';
	echo $pai->getSobrenome();
	echo '<br/><hr/>';


?>

<h2>métodos mágicos</h2>

<?php

	class Pai2 {
		private $nome = 'Jorge';
		protected $sobrenome = 'Silva';
		public $humor = 'Feliz';

		public function __get($atributo) {
			return $this ->$atributo;
		}

		public function __set($atributo,$valor) {
			return $this ->$atributo = $valor;
		}

		private function excutarMania() {
			echo 'Assobiar';
		}

		protected function responder() {
			echo 'Oi';
		}

		public function executarAcao() {
			
			$x = rand(1,10);

			if($x >= 1 && $x <= 8){
				$this->excutarMania();
			} else {	
				$this->responder();
			}
		}
	}

	$pai = new Pai2();
	echo $pai->humor;
	echo '<br/>';
	echo $pai->nome;
	echo '<br/>';
	$pai->sobrenome = 'Oliveira';
	echo $pai->sobrenome;
	echo '<br/>';
	echo $pai-> executarAcao();

?>

<h2>HERANÇA</h2>

<?php

	class Pai3 {
		private $nome = 'Jorge';
		protected $sobrenome = 'Silva';
		public $humor = 'Feliz';

		/*public function __get($atributo) {
			return $this ->$atributo;
		}

		public function __set($atributo,$valor) {
			return $this ->$atributo = $valor;
		}*/

		private function excutarMania() {
			echo 'Assobiar';
		}

		protected function responder() {
			echo 'Oi';
		}

		public function executarAcao() {
			
			$x = rand(1,10);

			if($x >= 1 && $x <= 8){
				$this->excutarMania();
			} else {	
				$this->responder();
			}
		}
	}

	class Filho extends Pai3 {

		public function getAtributo($attr){
			return $this->$attr;
		}

		public function setAtributo ($attr, $value) {
			$this->$attr = $value;
		}
	}

	$pai = new Pai3();
	$filho = new Filho();

	echo '<pre>';
	print_r($filho);
	echo '</pre>';
	echo '<br/>';
	echo $filho->getAtributo('nome');

	$filho->setAtributo('nome', 'Raul');
	echo '<pre>';
	print_r($filho);
	echo '</pre>';
	echo '<br/>';
	echo $filho->getAtributo('nome');

	//exibir os métodos do objeto
	echo '<pre>';
	print_r(get_class_methods($filho));
	echo '</pre>';
?>