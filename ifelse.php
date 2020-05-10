<html>
<head>
	<title>PHP</title>
</head>
<body>

	<!-- if/else -->
	<?php
	echo 'true <br/>';	
		if(true) {
			echo 'verdadeiro :-)';
	} else {
			echo 'falso ;´(';
	}
	
	echo '<br/>';
	echo '<br/>';
	echo '2(int) = 2(string) <br/>';
	if( 2 == '2') {
			echo 'verdadeiro :-)';
	} else {
			echo 'falso ;´(';
	}

	echo '<br/>';
	echo '<br/>';
	echo '2(int) === 2(string)<br/>';
	if(2 === '2') {
			echo 'verdadeiro :-)';
	} else {
			echo 'falso ;´(';
	}
	
	echo '<br/>';
	echo '<br/>';
	echo 'x != y <br/>';
	if('x' != 'y' ) {
			echo 'verdadeiro :-)';
	} else {
			echo 'falso ;´(';
	}
	
	echo '<br/>';
	echo '<br/>';
	echo '5(string) <>  5(int)<br/>';
	if('5' <> 5 ) {
			echo 'verdadeiro :-)';
	} else {
			echo 'falso ;´(';
	}
	
	echo '<br/>';
	echo '<br/>';
	echo '5(int) !== 5(string)<br/>';
	if(5 !== '5' ) {
			echo 'verdadeiro :-)';
	} else {
			echo 'falso ;´(';
	}
	
	echo '<br/>';
	echo '<br/>';
	echo '6 < 6<br/>';
	if(6 < 6) {
			echo 'verdadeiro :-)';
	} else {
			echo 'falso ;´(';
	}
	
	echo '<br/>';
	echo '<br/>';
	echo '6 <= 6<br/>';
	if(6 <= 6) {
			echo 'verdadeiro :-)';
	} else {
			echo 'falso ;´(';
	}
	
	echo '<br/>';
	echo '<br/>';
	echo ' 10 > 5<br/>';
	if(10 > 5 ) {
			echo 'verdadeiro :-)';
	} else {
			echo 'falso ;´(';
	}
	
	echo '<br/>';
	echo '<br/>';
	echo '25 >= 25<br/>';
	if(25 >= 25 ) {
			echo 'verdadeiro :-)';
	} else {
			echo 'falso ;´(';
	}

	echo '<br/>';
	echo '<br/>';
	echo 'Se 30 > 31: Verdadeiro<br/>
		  Se 51 < 50: Falso<br/>	';
	if (30 > 31) {
			echo 'verdadeiro :-)';
	} else if (51 < 50) {
			echo 'falso ;´(';		
	} else {
			echo 'Nenhum dos dois!';
	}
	?>

	<br/>
	<br/>

			<!-- Operadores lógicos-->
	<?php 
	//&& -> todos têm que ser verdadeiro para retornar verdadeiro.
	echo '5 == 3 e(&&) 10 > 3 <br/>';
	if (5 == 3 && 10 > 3) {
		echo 'Verdadeiro';
	} else {
		echo 'Falso';
	}
	echo '<br/>';
	echo '<br/>';

	// || -> uma das opções têm que ser verdadeira. 
	echo '5 == 3 ou(||) 10 > 3 <br/>';
	if (5 == 3 || 10 > 3) {
		echo 'Verdadeiro';
	} else {
		echo 'Falso';
	}
	echo '<br/>';
	echo '<br/>';
	
	//retorna verdadeiro se um da expressões for verdadeiro e a outra falsa, ou vice-versa.
	echo '5 == 3 (XOR) 10 > 11 <br/>';
	if (4 == 4 XOR 10 > 15) {
		echo 'Verdadeiro';
	} else {
		echo 'Falso';
	}
	echo '<br/>';
	echo '<br/>';

	echo '7 <= 3 (XOR) 10 > 15 <br/>';
	if (7 <= 4 XOR 10 > 15) {
		echo 'Verdadeiro';
	} else {
		echo 'Falso';
	}
	echo '<br/>';
	echo '<br/>';
	
	// verdadeiro + verdadeiro = falso
	echo '7 >= 3 (XOR) 15 > 10 <br/>';
	if (7 >=4 XOR 15 > 10) {
		echo 'Verdadeiro';
	} else {
		echo 'Falso';
	}
	echo '<br/>';
	echo '<br/>';

	// ! -> inverte o resultado retornado pela expressão

	echo '(!(7 >=4 (XOR) 15 > 10)) <br/>';
	if (!(7 >= 4 XOR 15 > 10)) {
		echo 'Verdadeiro';
	} else {
		echo 'Falso';
	}
	echo '<br/>';
	echo '<br/>';

	echo '(!("a" == "b")) <br/>';
	if (!('a' == 'b')) {
		echo 'Verdadeiro';
	} else {
		echo 'Falso';
	}
	echo '<br/>';
	echo '<br/>';

	echo '(!(22 == 22 && 3 == 3&& 5 != 5) <br/>';
	if (!(22 == 22 && 3 == 3 && 5 != 5)) {
		echo 'Verdadeiro';
	} else {
		echo 'Falso';
	}
	echo '<br/>';
	echo '<br/>';
	?>		

	

</body>
</html>