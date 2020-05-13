<!DOCTYPE html>
<html>
	<head>
		<title>Array</title>
		<meta charset="utf-8">
	</head>
	<body>

		<?php
			//sequenciais (numéricos)
			$lista_frutas  = array('Banana', 'Maça', 'Morango', 'Uva');

			$lista_frutas[] = 'Abacaxi';
 
			echo '<pre>';
				var_dump($lista_frutas);
			echo '</pre>';	
			echo '<br/> <hr/>';
			
			echo '<pre>';
				print_r($lista_frutas);
			echo '</pre>';
			echo $lista_frutas[2];
			echo '<br/> <hr/>';

			
			//outra forma de declarar
			$times = ['Botafogo', 'Vasco', 'Fluminense', 'Flamengo'];	
			echo '<pre>';
				var_dump($times);
			echo '</pre>';	
			echo '<br/> <hr/>';
			
			echo '<pre>';
				print_r($times);
			echo '</pre>';
			echo '<br/> <hr/>';

			//associativos
			$games = array(
				'a' =>'FIFA20', 
				'b' =>'WATCH DOGS',
				'x' =>'NHL 15',
				'2' =>'GTAV');

			$games['w'] = 'RED DEAD REDEMPTION 2';

			echo '<pre>';
				var_dump($games);
			echo '</pre>';
			echo $games['w'];
			echo '<br/> <hr/>';
		?>

		<h3>Array multidimensional</h3>

		<?php
			$lista_coisas = [];

			$lista_coisas['frutas'] = ['Banana', 'Maça', 'Morango', 'Uva'];
			
			$lista_coisas['games'] =  array(
					'a' =>'FIFA20', 
					'b' =>'WATCH DOGS',
					'x' =>'NHL 15',
					'2' =>'GTAV');

			echo '<pre>';
				var_dump($lista_coisas);
			echo '</pre> <br/>';
			echo $lista_coisas['frutas'][2] . '<br/>';
			echo $lista_coisas['games']['a'];
			echo '<br/> <hr/>'
		?>

		<h3>Método de pesquisa</h3>
		
		<?php
			$lista_frutas  = array('Banana', 'Maça', 'Morango', 'Uva');

			echo '<pre>';
				print_r($lista_frutas);
			echo '</pre>';
			//in_array() -> true ou false para a existência do que está sendo procurado.
			echo in_array('Maça', $lista_frutas) . '<br/>';//retorna 1(true)
			echo in_array('Abacate', $lista_frutas) . '<br/>';//retorna vazio (false)
			echo '<br/> <hr/>';

			//outra possibilidade
			//array_search() -> retorna o índice do valor pesquisado, caso ele exista
			echo array_search('Uva', $lista_frutas) . '<br/>';
			echo array_search('Abacate', $lista_frutas) . '<br/> <hr/>';//retorna null


			//array multidimensional
			$lista_coisas =[
				'frutas' =>$lista_frutas,
				'pessoas' => ['Pedro','Maria','José']
			];

			echo '<pre>';
			print_r($lista_coisas);
			echo '</pre> <br>';

			echo in_array('Uva', $lista_coisas['frutas']) . '<br/>';
			echo in_array('Melancia', $lista_coisas['frutas']) . '<br/>';
			echo in_array('Pedro', $lista_coisas['pessoas']) . '<br/>';	
		?>

		<h3>Diferença entre False, Null e Empty</h3>
		
		<?php
			//false - tipo variável booelan
			//null e empty - valores especiais

			$numero = null;
			$numero2 = '';
			$numero3 = false;

			if (is_null($numero)) {
				echo 'Número1 é null! <br/>';
			} else {
				echo 'Número1 não é null! <br/>';
			}

			if (is_null($numero2)) {
				echo 'Número2 é null! <br/>';
			} else {
				echo 'Número2 não é null! <br/>';
			}

			if (is_null($numero3)) {
				echo 'Número3 é null! <br/>';
			} else {
				echo 'Número3 não é null! <br/><br/>';
			}


			echo 'Verificar se é vazio:<br/><br/>';

			if (empty($numero)) {
				echo 'Número1 é vazio! <br/>';
			} else {
				echo 'Número1 não é vazio! <br/>';
			}

			if (empty($numero2)) {
				echo 'Número2 é vazio! <br/>';
			} else {
				echo 'Número2 não é vazio! <br/>';
			}

			if (empty($numero3)) {
				echo 'Número3 é vazio! <br/>';
			} else {
				echo 'Número3 não é vazio! <br/>';
			}
		?>

		<h3>Funções nativas para manipular arrays</h3>	

		<?php

			$array = 'string';
			$retorno = is_array($array);
			//is_array -> verifica se o parâmetro é um array;
			if($retorno) {
				echo 'Sim, é um array';
			} else {
				echo 'Não, é um array';
			}

			echo '<br/> <hr/>';

			$array2 = [1 => 'a', 7=> 'b', 18 => 'c'];
			echo '<pre>';
				print_r($array2);
			echo '</pre> <br/>';	

			$chaves_array2 = array_keys($array2); //array_keys -> retorna todas as chaves de um array
			echo '<pre>';
				print_r($chaves_array2);
			echo '</pre> <br/> <hr/>';

			$array3 = array('notebook', 'mouse', 'teclado','hd');
			echo '<pre>';
				print_r($array3);
			echo '</pre> <br/>';
			//sort -> ordena um arry e reajusta seus índices
			sort($array3); //true ou false	
			echo '<pre>';
				print_r($array3);
			echo '</pre> <br/> <hr/>';

			$array4 = array('Pedro', 'Ana', 'Claúdia','Sérgio', 'Sheila');
			echo '<pre>';
				print_r($array4);
			echo '</pre> <br/>';
			//sort -> ordena um arry e preservando seus índices
			asort($array4); //true ou false	
			echo '<pre>';
				print_r($array4);
				//count -> conta a quantidade de elementos de uma array
				echo count($array4) . '<br/>';
			echo '</pre> <br/> <hr/>';

			
			//array_merge -> funde um ou mais arrays
			$array4 = array('Pedro', 'Ana', 'Claúdia','Sérgio', 'Sheila');
			$array3 = array('notebook', 'mouse', 'teclado','hd');

			$novo_array = array_merge($array3, $array4);			
			echo '<pre>';
				print_r($novo_array);
			echo '</pre> <br/> <hr/>';

			//explode -> divide uma string baseada em um deimitador
			$string = '13/05/2020';

			$array_retorno = explode('/', $string);
			echo $string . '<br/>';
			echo '<pre>';
				print_r($array_retorno);
			echo '</pre> <br/> <hr/>';			

			//implode -> junta elementos de uma array em uma string 
			$array5 = ['Futebol' , 'Basquete', 'Voleibol', 'Natação'];

			$string_retorno = implode(',', $array5);
			echo $string_retorno;

		?>

	</body>
</html>