<?php
	
	session_start();

	

	//remover índices do array de sessão
	//unset()
	//unset($_SESSION['autenticado']); //para remover o índice apenas se existir

	//destruir a variável de sessão
	//session_destroy()
	//session_destroy();// será destruída
	//forçar um redirecionamento

	//echo '<pre>';
	//print_r($_SESSION);
	//echo '</pre>';

	session_destroy();
	header('Location: index.php')

?>