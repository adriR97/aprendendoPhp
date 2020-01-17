<?php	
	require_once("config.php");
	//session_unset($_SESSION["nome"]);                      //apagando a variável de sessão nome
	//session_unset();                                       //apagando todas as variáveis de sessão
	//session_destroy();                                     //limpa a variável e reseta o usuário

	echo $_SESSION["nome"] . "<br/>";
	echo session_id() . "<br/>";                             //id sessão usuário(não se repete)
	//session_regenerate_id();                               //atualizar o id sempre que recarregar a página
	echo session_save_path() . "<br/>"                       //caminho que está sendo armazenado a sessão atual
?>