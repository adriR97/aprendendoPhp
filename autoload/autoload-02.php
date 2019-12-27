<?php
	function incluirClasses($nomeClass){
		//pesquisando no mesmo diretório
		if(file_exists($nomeClass . ".php") === true){
			require_once($nomeClass . ".php");
		}
	}

	//spl_autoload_register serve pra registrar mais de uma função de autoload
	spl_autoload_register("incluirClasses");
	spl_autoload_register(function($nomeClass){
		//procurando a classe em outro diretório
		if(file_exists("NomeDaOutraPasta" . DIRECTORY_SEPARATOR . $nomeClass . ".php") === true){
			require_once("NomeDaOutraPasta" . DIRECTORY_SEPARATOR . $nomeClass . ".php");
		}
	});

	$carro = new Verona();
	$carro->acelerar(80);
?>