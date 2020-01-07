<?php

	//$nome = (int)$_GET["a"];    //url = http://localhost/variaveisPreDefinidas.php?a=123
	//var_dump($nome);

	//echo "<br/><br/>";

	//acessando ip do servidor do cliente
	echo $_SERVER ["REMOTE_ADDR"] . "<br>";   
	//página que está acessando                           
	echo $_SERVER ["SCRIPT_NAME"] . "<br>";
	//o nome host do servidor onde o script atual é executado.
	echo $_SERVER ['SERVER_NAME'] . "<br>";

?>