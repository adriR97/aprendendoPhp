<?php

	$nome = (int)$_GET["a"];    //url = http://localhost/variaveisPreDefinidas.php?a=123
	var_dump($nome);

	echo "<br/><br/>";

	$ip = $_SERVER ["REMOTE_ADDR"];  //acessando ip do servidor do cliente
	$pagina = $_SERVER ["SCRIPT_NAME"]; //página que está acessando
	echo $ip;
	echo $pagina;

?>