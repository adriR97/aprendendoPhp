<?php
	require_once("config.php");

	//usar a classe que está dentro da pasta Cliente
	use Cliente\Cadastro;                                                                 

	$cadastro = new Cadastro();
	$cadastro->setNome("Adriane Rodrigues");
	$cadastro->setEmail("dryrodrigues2009@gmail.com");
	$cadastro->setSenha("12345");

	$cadastro->registrarVenda();
?>