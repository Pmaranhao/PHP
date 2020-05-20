<?php

	class Funcionario {

		public $nome = 'José';
		public $telefone = '11 99999-8888';
		public $numeroFilhos = 2;

		function resumirCadFunc() {
			return "$this->nome possui $this->numeroFilhos filho(s)";

		} 

		function modificarNumeroFilhos($numFilhos) {
			$this->numeroFilhos = $numFilhos;
		}

	}


	$y = new Funcionario();
	echo $y->resumirCadFunc(); 
	echo '<br/>';
	$y->modificarNumeroFilhos(3);
	echo $y->resumirCadFunc(); 


?>

<h1>Getters e Setters</h1>


<?php

	class Funcionario2 {

		public $nome = null;
		public $telefone = null;
		public $numeroFilhos = null;

		function setNome($nome) {
			$this->nome = $nome;
		}

		function settelefone($telefone) {
			$this->telefone = $telefone;
		}

		function setNumeroFilhos($numeroFilhos) {
			$this->numeroFilhos = $numeroFilhos;
		}

		function getNome() {
			return $this->nome;	
		}

		function getNumeroFilhos() {
			return $this->NumeroFilhos;	
		}


		function getTelefone() {
			return $this->telefone;	
		}

		function resumirCadFunc() {
			return "$this->nome possui $this->numeroFilhos filho(s), seu telefone é $this->telefone";

		} 

		function modificarNumeroFilhos($numFilhos) {
			$this->numeroFilhos = $numFilhos;
		}

	}


	$y = new Funcionario2();
	$y-> setNome('Pedro');
	$y-> setNumeroFilhos(0);
	$y-> setTelefone('21 2567-8932');
	echo $y->resumirCadFunc();
	echo '<br/>';
	$y->modificarNumeroFilhos(3);
	echo $y->resumirCadFunc();
	echo '<br/>';
	
	$x = new Funcionario2();
	$x-> setNome('Maria');
	$x-> setNumeroFilhos(2);
	$x-> setTelefone('21 90182-8932');
	echo $x->resumirCadFunc(); 
?>

<h1>Overloading de atributos e métodos</h1>

<?php

class Funcionario3 {

		public $nome = null;
		public $telefone = null;
		public $numeroFilhos = null;
		public $cargo = null;
		public $salario = null;

	function __set($atributo, $valor) {
		$this->$atributo = $valor;
	}	

	function __get($atributo) {
		return $this->$atributo;
	}

	function resumirCadFunc() {
			return "$this->nome possui $this->numeroFilhos filho(s), seu telefone é $this->telefone";

		} 

		function modificarNumeroFilhos($numFilhos) {
			$this->numeroFilhos = $numFilhos;
		}

}


	$p = new Funcionario3(); 
	$p-> __set('nome', 'Pedro');
	$p-> __set('numeroFilhos', 0);
	$p-> __set('telefone', '21 2567-8932');
	echo $p-> __get('nome') . 'possui ' . $p->__get('numeroFilhos') . ' filho(s), seu telefone é '. $p->__get('telefone') . '.<br/>';
	
	
	$f = new Funcionario3();
	$f-> __set('nome', 'Maria');
	$f-> __set('numeroFilhos', 2);
	$f-> __set('telefone', '21 90182-8932');
	echo $f->resumirCadFunc();


?>

<h1>Chamando métodos internamente</h1>

<?php

class Funcionario4 {

		public $nome = null;
		public $telefone = null;
		public $numeroFilhos = null;
		public $cargo = null;
		public $salario = null;

	function __set($atributo, $valor) {
		$this->$atributo = $valor;
	}	

	function __get($atributo) {
		return $this->$atributo;
	}

	function resumirCadFunc() {
			return $this->__get('nome') . " possui " . $this->__get('numeroFilhos') .
			 " filho(s), seu telefone é " . $this->__get('telefone') . 
			 " seu cargo de " . $this->__get('cargo') . " lhe rende " . 
			 $this->__get('salario') . "."; 

		} 

		function modificarNumeroFilhos($numFilhos) {
			$this->numeroFilhos = $numFilhos;
		}

}


	$p = new Funcionario4(); 
	$p-> __set('nome', 'Pedro');
	$p-> __set('numeroFilhos', 0);
	$p-> __set('telefone', '21 2567-8932');
	$p-> __set('cargo', 'Diretor');
	$p-> __set('salario', 'R$ 15.000,00');
	echo $p-> resumirCadFunc();
	
	echo '<br/>';

	$f = new Funcionario4();
	$f-> __set('nome', 'Maria');
	$f-> __set('numeroFilhos', 2);
	$f-> __set('telefone', '21 90182-8932');
	$f-> __set('cargo', 'Supervisora');
	$f-> __set('salario', 'R$ 5.000,00');
	echo $f->resumirCadFunc();


?>
