<!DOCTYPE html>
<html>
	<head>
		<title>Funções</title>
		<meta charset="utf-8">
	</head>
	<body>

		<h3>Funções</h3>
		
		<?php

			#função tipo void
			function exibirBoasVindas() {
				echo 'Bem vindo! <br/>';
			}

			#função com retorno
			function calcularAreaTerreno($largura, $comprimento) {

				$area = $largura * $comprimento;
				return $area;
			}

			function calcularMediaProva($nota1, $nota2, $nota3, $nota4) {

				$media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

				return $media;
			}

			exibirBoasVindas();

			echo calcularAreaTerreno(40, 10). '<br/>';
		
			echo calcularMediaProva(6, 7, 5,9);
		?>

		<hr/>

		<p>1) Crie uma função para calcular o imposto de renda a ser pago com base em um salário passado por parâmetro.</p>

		<h4>Para calcular o valor do imposto a ser pago, considere a seguinte tabela abaixo:</h4>

		<table border="1" width="50%">
			<tr>
				<th>Base de cálculo</th>
				<th>Alíquota</th>
			</tr>
			<tr>
				<td>Até R$ 1.903,98</td>
				<td>Isento</td>
			</tr>
			<tr>
				<td>De R$ 1.903,99 até 2.826,65</td>
				<td>7,5%</td>
			</tr>
			<tr>
				<td>De R$ 2.826,66 até R$ 3.751,05</td>
				<td>15%</td>
			</tr>
			<tr>
				<td>De R$ 3.751,06 até R$ 4.664,68</td>
				<td>22,5%</td>
			</tr>
			<tr>
				<td>Acima de R$ 4.664,68</td>
				<td>27,5%</td>
			</tr>
		</table>

		<br/>
		
			<?php
			 	function calcularImposto($salario) {

			 		$imposto = 0;

				 	if($salario <= 1903.98) {
				 		echo 'Isento <br/>';
				 	
				 	} else if ($salario > 1903.98 && $salario <= 2826.65 ) {
				 		$imposto = ($salario * 7.5) / 100;
				 		echo 'Alíquota: 7,5% <br/>';
				 		echo 'Valor a pagar: R$ '. $imposto . ' <br/>';
				 	
				 	} else if ($salario > 2826.65 && $salario <= 3751.05  ) {
				 		$imposto = ($salario * 15) / 100;
				 		echo 'Alíquota: 15% <br/>';
				 		echo 'Valor a pagar: R$ '. $imposto . ' <br/>';

				 	} else if ($salario > 3751.05 && $salario <= 4664.68 ) {
				 		$imposto = ($salario * 22.5) / 100 ;
				 		echo ' Alíquota: 22,5% <br/>';
				 		echo 'Valor a pagar: R$ '. $imposto . ' <br/>';

				 	} else  {
				 		$imposto = ($salario * 27.5)/100;
				 		echo 'Alíquota: 27,5% <br/>';
				 		echo 'Valor a pagar: R$ '. $imposto . ' <br/>';
				 	}
				}

				calcularImposto(2513.98);
			?>

			<hr/>

			<h3>Seis funções nativas para manipular string</h3>

			<?php

				$texto = 'Pedro Henrique';
				$texto2 = 'pedro';
				
				#string to lower
				echo 'Original: '. $texto . '<br/>';
				echo 'strtolower: ' . strtolower($texto) . '<br/>';
				echo '<br/>';
				
				#string to upper
				echo 'Original: '. $texto . '<br/>';
				echo 'strtoupper: ' . strtoupper($texto) . '<br/>';
				echo '<br/>';
				
				#string to upper
				echo 'Original: '. $texto2 . '<br/>';
				echo 'ucfirst: ' . ucfirst($texto2) . '<br/>';
				echo '<br/>';
				
				#string length
				echo 'Original: '. $texto . '<br/>';
				echo 'strlen: ' . strlen($texto) . '<br/>';
				echo '<br/>';
				
				#string replace
				echo 'Original: '. $texto . '<br/>';
				echo 'str_replace: ' . str_replace('Henrique', 'Maranhão', $texto) . '<br/>';
				echo '<br/>';
				
				#string substr
				echo 'Original: '. $texto . '<br/>';
				echo 'substr: ' . substr($texto, 0,5) . '<br/>';
				echo '<br/>';

			?>

			<hr/>

			<h3>Funções nativas para tarefas matemáticas</h3>

			<?php

				$numero = 7.3;

				#arredonda para cima
				echo ceil($numero) . '<br/>';
				echo ceil(-2.45) . '<br/> <br/>';

				#arredonda para baixo
				echo floor($numero) . '<br/>';
				echo floor(-2.45) . '<br/> <br/>';

				#arredonda com base na fração
				echo round($numero) . '<br/>';
				echo round(-2.45) . '<br/> <br/>';

				#gerar um valor aleatório 0 até randmax
				echo 'Número máximo: ' .  getrandmax() . '<br/>';// função para saber máximo 
				echo rand(1, 25) . '<br/>';
				echo rand() . '<br/> <br/>';

				# raiz quadrada
				echo sqrt($numero) . '<br/>';
				echo round(-2.45) . '<br/> <br/>';
			?>

			<hr/>

			<h3>Funções nativas para manipularf datas</h3>

			<?php

				#recuperação da data atual / data corrente
				echo 'Dia '. date('d') . '<br/>';
				echo 'Dia ' . date('D') . '<br/>';
				echo 'Semana ' . date('W') . '<br/>';
				echo date('d/m/Y H:i') . '<br/>';

				#recuperar a timezone default da aplicação
				echo date_default_timezone_get() . '<br/>';

				#atualizar o timezone default da aplicação
				date_default_timezone_set('America/Sao_Paulo');
				echo date('d/m/Y H:i') . '<br/>';

				#transformar datas textuais em segundos
				$data_inicial = '2020-04-24';
				$data_final = '2020-05-12';

				#timestamp 01/01/1970 -- vai percorrer até 2020-04-24

				$time_inicial = strtotime($data_inicial);
				echo $data_inicial .' - ' . $time_inicial . '<br/>';

				$time_final = strtotime($data_final);
				echo $data_final .' - ' . $time_final . '<br/>';

				$difenca_times = abs($time_final - $time_inicial);
				echo $difenca_times . '<br/>';	

				$segundos_existem_dia = 24 * 60 * 60;
				echo 'Um dia possui ' . $segundos_existem_dia . 'segundos <br/>';

				$difenca_de_dias_entre_as_datas = $difenca_times / $segundos_existem_dia;
				echo 'A diferença em dias é: '. $difenca_de_dias_entre_as_datas;

			?>
	
	</body>
</html>