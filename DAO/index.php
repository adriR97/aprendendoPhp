<?php
	require_once("config.php");

	//imprimindo um usuário
	#$user = new Usuario();
	#$user->loadById(2);
	#echo $user;

	//carrega a lista de usuários
	#$lista = Usuario::getList(); //pode chamar direto o método pq é estático
	#echo json_encode($lista);

	//carrega uma lista pelo login
	#$search = Usuario::search("adr");
	#echo json_encode($search);

	//carrega um usuário por login e senha
	$usuario = new Usuario();
	$usuario->login("adri","12345");
	echo $usuario;
?>