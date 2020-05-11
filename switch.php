<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<title>Switch</title>
</head>
<body>

<h1>Calcular</h1>
	<?php
		$n1 = 2;
		$operador ='+';
		$n2 = 3;

		switch ($operador){ 
			case '*': 
				echo $n1*$n2;
				break;
			
			case '+':
				 echo $n1+$n2;
				break;
			
			case '-':
				 echo $n1-$n2;
				break;
			
			case '/':
				 echo $n1/$n2;
				break;			
			
			default:
				echo 'Não é possível fazer o cálculo.';
				break;
		} 
	?>
	
	<h1>Menu</h1>
	<?php
		
		$menu = 3;
		

		switch ($menu){ 
			case 1: 
				echo 'Falar com atendente.';
				break;
			
			case 2:
				 echo 'Pagamentos.';
				break;
			
			case 3:
				 echo 'Tranferência.';
				break;
			
			case 4:
				 echo 'Cartao de crédito.';
				break;			
			
			default:
				echo 'Por favor escolha uma opção válida';
				break;
		} 
	?>

</body>
</html>