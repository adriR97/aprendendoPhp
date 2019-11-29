<?php	
	$nome = "Adriane";

	function teste(){ 
		//é necessário o global para conseguir acessar a variável que foi definida fora da function              
		global $nome;
		echo $nome;
	}

	teste();    //chamando 
?>