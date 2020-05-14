<!DOCTYPE html>
<html>
	<head>
	
		<title>Loops</title>
		<meta charset="utf-8">
	
	</head>
	<body>
		
		<h1>While</h1>

		<?php

			$n = 0;
			
			#Primeiro teste
			echo '-- Início do loop -- <br/>';

			while($n < 4) {
				
				echo 'Rodou ' . $n . '<br/>';
				$n++;
			}

			echo '-- Fim do loop -- <br/> <br/> <hr/>';


			#Segundo teste
			echo '-- Início do loop -- <br/>';

			while($n < 50) {
				
				echo 'Rodou ' . $n . '<br/>';
				$n += 5;

				if ($n > 25) {
					
					break;// podemos utilizar um break para "forçar" uma parada. 
				}
			
			}

			echo '-- Fim do loop -- <br/> <br/> <hr/>';
		
			#Terceiro teste
			echo '-- Início do loop -- <br/>';

			while($n < 50) {
				
				$n += 5;

				if ($n == 34 || $n == 39 ) {
					
				continue;// podemos utilizar um continue, 
				//os dois número 34 e 39 ele descartou (continuou)

	    		}
				
				echo 'Rodou ' . $n . '<br/>';
		
			}

			echo '-- Fim do loop -- <br/> <br/> <hr/>';
		?>

		<h1>Do while</h1>

		<?php
			
			do {
				echo 'Entrou no do while <br/> <br/>';
			
			} while(10 < 9);

			$x = 1;
			
			do {
				echo 'Entrou no do while <br/>';
				$x++;

			} while($x < 10); 
		?>

		<hr/>
		<h1>For</h1>

		<?php

			$p = 5;

			for ($i=0; $i < $p; $i++) { 
				echo "Rodou $i <br/>";	
			}
		?>

		<hr/>
		<h1>Percorrendo array</h1>
		
		<?php

		$times = array('Botafogo', 'São Paulo', 'Cruzeiro', 'Coritiba', 'Sport' );

			echo '<pre>';
			print_r($times);
			echo '</pre> <br/><br/>';

			echo 'Percorrendo com while <br/>';
			$idx = 0;
			while ($idx < 5) {
				
				echo  $times[$idx] . '<br/>';
				$idx++;
			}

			$time = array(
				array('time' => 'Botafogo', 'estado' => 'RJ'),
				array('time' => 'São Paulo', 'estado' => 'SP'),
				array('time' => 'Cruzeiro', 'estado' => 'MG'),
				array('time' => 'Coritiba', 'estado' => 'PR'),
				array('time' => 'Sport', 'estado' => 'PE')
				 );

				 echo '<pre>';
				print_r($time);
				echo '</pre> <br/><br/>'; 

				$idx=0;
				while ($idx < count($time)) {
				
				echo '<h4>' . $time[$idx]['time'] . '</h4>';
				echo '<p>' . $time[$idx]['estado'] . '</p>';
				$idx++;
			}

			echo '<hr/>';

			$idx=0;
			do {
			
				echo '<h4>' . $time[$idx]['time'] . '</h4>';
				echo '<p>' . $time[$idx]['estado'] . '</p>';
				$idx++;

			} while($idx < count($time));

			echo '<hr/>';

			for ($idx=0; $idx < count($time); $idx++) { 
				echo '<h4>' . $time[$idx]['time'] . '</h4>';
				echo '<p>' . $time[$idx]['estado'] . '</p>';
			}
		
		?>

		<h1>Foreach</h1>

		<?php

			$itens = array('Sofá' , 'Mesa', 'cadeira');

			echo '<pre>';
			print_r($itens);
			echo '</pre> <br/><br/>';

			foreach ($itens as $item) {
			echo "$item <br/>";
			}
		
			echo '<br/><hr/>';

			$funcionario = array('João', 'Maria', 'José');


			foreach ($funcionario as $idx => $nome){
						echo "ID $idx - Nome: $nome  <br/>";
					}	

			$funcionarios = array(
			array('nome' => 'João', 'salario' => 2500), 
			array('nome' => 'Maria', 'salario' => 3500),
			array('nome' => 'José', 'salario' => 1500),
			array('nome' => 'Pedro', 'salario' => 9500)
			);			

			echo '<pre>';
			print_r($funcionarios);
			echo '</pre> <br/><br/>';


			foreach ($funcionarios as $idx => $funcionario){
						foreach ($funcionario as $idx2 => $valor) {

							echo "$idx2 - $valor <br/>";
						}
						echo '<hr/>';
					}
		?>

		<?php

			echo 'Crie um script capaz de produzir, através de um laço de 
			repetição, um array com 6 elementos numéricos aleatórios 
			entre  1 e 60, simulando o funcionamento do sorteio da mega 
			sena. Atente-se ao fato de que os números aleatórios contiodos 
			dentro do array não podem ser repetidos.<br/>';

			$numeros = array();

			while(count($numeros) <= 5) {

				$num = rand(1, 60);
					if(!in_array($num, $numeros)){
						$numeros[] = $num;
					}
			}

			echo '<pre>';
			print_r($numeros);
			echo '</pre>';
			
		?>

	</body>
</html>