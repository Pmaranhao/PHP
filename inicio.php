<html>
<head>
	<title>PHP</title>
</head>
<body>

	<!--Comentario HTML-->
	<!-- saída de dados com echo() e print -->
	<?php
		#comentário no PHP
		// Outro tipo
	 	/* comentario
	 	múltiplas linhas*/
		echo 'Pedro<br/>';
		print 'Maranhão<hr/>'; # print é uma função com retorno de 1 ou 0.
	?>
	<!--Declarando variáveis -->
	<?php
		#String
		$nome = 'América'; #atribuindo valor
		$titulo = 4; 
		$valor = 1653000.00;
		$campeao_sn = true; #true = 1 e false = 0
		
	?>

	<h3>Teste para recuperar nome</h3>
	<p>Time: <?= $nome ?></p>
	<p>Títulos: <?= $titulo ?></p>
	<p>Valor: <?= $valor ?></p>
	<p>Campeão: <?= $campeao_sn ?></p>

	<hr/>

	<!--Concatenação-->

	<?php 
	#operador .
		$nome = 'Pedro';
		$valor = 1654000.00;

		echo $nome . ' vai ganhar o valor de R$ '. $valor ;
	#aspas duplas
		echo '<br/>';	

		echo "Olá $nome, vai ganhar o valor de R$ $valor, parabéns";
	?>

	<hr/>

	<!-- Criação de constantes -->
	<?php

		/*Para criação é necessário usar uma função, o primeiro parâmetro 
		deve ser uma variável, e o segundo um valor*/
		#uma boa prática é usar letras maiúsculas em constantes
		define('BD_URL','endereco_bd_dev');


		#recuperar
		echo BD_URL;
		/*não se usa o $*/
	?>
	<hr/>



</body>
</html>