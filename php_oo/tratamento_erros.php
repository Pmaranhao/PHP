<?php

	try {
		echo '<h3> *** Try *** </h3>';

		$sql = 'Select * from clientes';
		mysql_query($sql);//erro

	} catch (Error $e) {
		echo '<h3> *** Catch *** </h3>';
		echo '<p style="color: red">' . $e . '</p>';

	}	finally { // quano tiver o try e catch, o finally é opcional.
		echo '<h3> *** Finally *** </h3>';
	}

?>

<?php

	try {
		echo '<h3> *** Try *** </h3>';

		if(!file_exists('require_arquivo_a.php')) {
			throw new Exception ('O arquivo em questão deveria estar disponível as ' . date('d/m/y h:i:s') . ' mas não estava.');
		}

	} catch (Exception $r) {
		echo '<h3> *** Catch Exception *** </h3>';
		echo '<p style="color: red">' . $r . '</p>';

	}	finally { // quano tiver o try e catch, o finally é opcional.
		echo '<h3> *** Finally *** </h3>';
	}

?>

<?php

	try {
		echo '<h3> *** Try *** </h3>';

		if(!file_exists('require_arquivo_a.php')) {
			throw new Error ('O arquivo em questão deveria estar disponível as ' . date('d/m/y h:i:s') . ' mas não estava.');
		}

	} catch (Error $q) {
		echo '<h3> *** Catch Error *** </h3>';
		echo '<p style="color: red">' . $q . '</p>';

	}	finally { // quano tiver o try e catch, o finally é opcional.
		echo '<h3> *** Finally *** </h3>';
	}

?>

<h1>Exceções customizadas</h1>

<?php

	class MinhaExcpetionCustomizada extends Exception {
		private $erro = '';

		public function __construct($erro){
			$this->erro = $erro;
		}

		public function exibirMansagemErroCustomizada() {
			return $this->erro;
		}
	}

	try {
		
		throw new MinhaExcpetionCustomizada('Esse é um erro de teste');

	} catch (MinhaExcpetionCustomizada $o) {
		echo $o->exibirMansagemErroCustomizada();
	}

?>