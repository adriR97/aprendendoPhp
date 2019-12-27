<?php
	function __autoload($nomeClass){ 
		/*não precisa ficar usando require toda vez que chamar 
		uma classe. Só funciona no mesmo diretório*/           
		require_once("$nomeClass.php");
	} 	

	$carro = new Verona();
	$carro->acelerar(55);
?>