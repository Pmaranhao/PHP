<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Operador ternário</title>
</head>
<body>

	<?php
		$usuario = 'Pedro';
		$usuario_possui_cartao = true;
		$valor_da_compra = 470;
	?>	

	<h2>Teste ternário</h2>
	<p><strong> Possui cartão da loja?</strong></p>

	<?=
	 $usuario_possui_cartao ? 'SIM' : 'NÃO';
	?>

	<p><strong>Valor do frete</strong></p>

	<?=
	  $valor_da_compra > 200? 'Frete grátis' : 'Valor do frete: R$ 50,00';
	?>

	<p><strong>Seu frete é grátis?</strong></p>
	 <?=
	   $valor_da_compra > 200 && $usuario_possui_cartao ? 'Frete grátis' : 'Valor do frete: R$ 50,00';
	?> 
	<hr/>
	<br/>
	<br/>

	<h2>Você pode doar sangue?</h2>	
		<?php
		
		$nome ='Pedro';
		$idade = 34;
		$peso = 70.200;
			
			if(($idade >= 16 && $idade <= 69)&& $peso >= 50){
				echo "$nome pode doar sange! Idade: $idade e Peso: $peso. ";
			} else {
				echo 'Não atende aos requisitos. Obrigado!';
			}
		?>

	
		
	</body>
</html>