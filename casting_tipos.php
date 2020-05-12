<!DOCTYPE html>
<html>
<head>
	<title>Casting</title>
</head>
<body>

	<?php

			$valor = 10;
			$valor2 = (float) $valor;
			$valor3 = (string) $valor;
			
			$flutuante = 15.83;
			$valor4 = (int) $flutuante;
			$valor5 = (string) $flutuante;

			$fio = '22.21';
			$valor6 =(int)$fio;
			$valor7 =(float)$fio;

			$vf = true;
			$valor8 = (int)$vf;
			$valor9 = (string)$vf;

			// função gettype() => retorna o tipo da variável.
			echo $valor . ' ' . gettype($valor);
			echo '<br/>';
			echo $valor2 . ' '. gettype($valor2);
			echo '<br/>';
			echo $valor3 . ' '. gettype($valor3);
			echo '<br/><br/>';
			echo $flutuante . ' '. gettype($flutuante);
			echo '<br/>';
			echo $valor4 . ' '. gettype($valor4);
			echo '<br/>';
			echo $valor5 . ' '. gettype($valor5);
			echo '<br/><br/>';
			echo $fio . ' '. gettype($fio);
			echo '<br/>';
			echo $valor6 . ' '. gettype($valor6);
			echo '<br/>';
			echo $valor7 . ' '. gettype($valor7);
			echo '<br/><br/>';
			echo $vf . ' '. gettype($vf);
			echo '<br/>';
			echo $valor8 . ' '. gettype($valor8);
			echo '<br/>';
			echo $valor9 . ' '. gettype($valor9);

			echo '<br/><br/><br/><br/>';
	// Operadores aritméticos

			$num1 = 13;
			$num2 = 4;



			echo "A soma entre $num1 e $num2 é" .($num1 + $num2);
			echo '<br/>';
			echo "A subtração entre $num1 e $num2 é " .($num1 - $num2);
			echo '<br/>';
			echo "A soma entre $num1 e $num2 é " .($num1 + $num2);
			echo '<br/>';
			echo "A multiplicação entre $num1 e $num2 é " .($num1 * $num2);
			echo '<br/>';
			echo "A divisão entre $num1 e $num2 é " .($num1 / $num2);
			echo '<br/>';
			echo "O resto da divisão $num1 e $num2 é " .($num1 % $num2);
			echo '<br/> <br/> <br/> <br/>';


			//operaror de atribuição

			$x = 10;

			$x += 5;
			echo $x;
			echo '<br/>';

			$x -= 5;
			echo $x;
			echo '<br/>';

			$x *= 5;
			echo $x;
			echo '<br/>';

			$x /= 5;
			echo $x;
			echo '<br/>';
			
			$x %= 5;
			echo $x;
			echo '<br/>';
	?>

	
		<!-- operadores de incremento e decremento -->

		<h3>Pós-incremento</h3>
		<?php

			$n = 7;

			echo "O valor contido em n é $n <br/><br/>";
		
			
			echo ' valor contido em n após o incremento é ' . $n++ . '<br/>'; 
			
			echo 'O valor atualizado é '. $n. '<br/>'; // só agora o incrementos, pos é PÓS...
				
			echo ' valor contido em n em pré incremento ' . ++$n . '<br/><br/>'; 
			
			echo ' valor contido em n após o decremento é ' . $n-- . '<br/>'; 
			
			echo 'O valor atualizado é '. $n. '<br/>';
				
			echo ' valor contido em n em pré decremento ' . --$n . '<br/>'; 


			



		?>


</body>
</html>