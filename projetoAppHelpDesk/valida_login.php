<?php

	session_start();
	
	//variável que verifica se autenticação foi realizada
	$usuarios_autenticado = false;
	$usuario_id = null;
	$usuario_perfil_id = null;

	$perfis = array(1 => 'Administrativo',
					2 => 'Usuário');


	//usuários do sistema
	$usuarios_app = array(
		array('id' => 1, 'email' => 'pedro@teste.com.br', 'senha' => '123456', 'perfil_id' =>1),
		array('id' => 2, 'email' => 'bianca@teste.com.br','senha' => '654321' , 'perfil_id' =>1),
		array('id' => 3, 'email' => 'demostenes@teste.com.br','senha' => '019283', 'perfil_id' =>2),
		array('id' => 4, 'email' => 'rosane@teste.com.br','senha' => '247381', 'perfil_id' =>2),
	);

	foreach ($usuarios_app as $user) {

		if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
			$usuarios_autenticado = true;
			$usuario_id = $user['id'];
			$usuario_perfil_id = $user['perfil_id'];
		}
	}	

	if ($usuarios_autenticado) {
		echo 'Usuário autenticado <br/>';
		$_SESSION['autenticado'] = 'SIM';
		$_SESSION['id'] =$usuario_id;
		$_SESSION['perfil_id'] =$usuario_perfil_id;
		header('Location: home.php');
	} else {
		$_SESSION['autenticado'] = 'NÃO';
		header('Location: index.php?login=erro');
	}
			

	
?>