<?php
	//Faz com que não apareça mais os erros na tela
	error_reporting(E_ALL & ~E_NOTICE);

	$nome = $_GET["nome"];
	echo $nome;
?>